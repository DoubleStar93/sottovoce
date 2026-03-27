<?php
declare(strict_types=1);

require_once dirname(__DIR__) . '/config.php';

/**
 * Persistenza e API tramonti (data/sunset-forecast.json + sunrise-sunset.org).
 */
final class SunsetForecast
{
    public function __construct(
        private readonly string $dataFilePath,
        private readonly float $latitude,
        private readonly float $longitude,
        private readonly string $timezone = 'Europe/Rome',
    ) {
    }

    public static function fromEnv(?string $projectRoot = null): self
    {
        $root = $projectRoot ?? dirname(__DIR__);

        return new self(
            $root . '/data/sunset-forecast.json',
            (float) appEnv('SUNSET_DEFAULT_LAT', '44.42'),
            (float) appEnv('SUNSET_DEFAULT_LNG', '12.19'),
            'Europe/Rome',
        );
    }

    public function path(): string
    {
        return $this->dataFilePath;
    }

    public function timezone(): string
    {
        return $this->timezone;
    }

    public function latitude(): float
    {
        return $this->latitude;
    }

    public function longitude(): float
    {
        return $this->longitude;
    }

    /**
     * @return array{ok: bool, body: array|null, error: string|null}
     */
    public function fetchApi(string $dateYmd): array
    {
        $q = http_build_query([
            'lat' => $this->latitude,
            'lng' => $this->longitude,
            'date' => $dateYmd,
            'formatted' => '0',
        ]);
        $url = 'https://api.sunrise-sunset.org/json?' . $q;

        $ctx = stream_context_create([
            'http' => [
                'timeout' => 20,
                'header' => "User-Agent: SottovoceSunsetTool/1.0\r\n",
            ],
            'ssl' => [
                'verify_peer' => true,
                'verify_peer_name' => true,
            ],
        ]);

        $raw = @file_get_contents($url, false, $ctx);
        if ($raw === false) {
            return ['ok' => false, 'body' => null, 'error' => 'HTTP/fetch failed'];
        }

        $decoded = json_decode($raw, true);
        if (!is_array($decoded)) {
            return ['ok' => false, 'body' => null, 'error' => 'Invalid JSON'];
        }

        return ['ok' => true, 'body' => $decoded, 'error' => null];
    }

    public function utcToLocal(?string $isoUtc): ?string
    {
        if ($isoUtc === null || $isoUtc === '') {
            return null;
        }
        try {
            $dt = new DateTimeImmutable($isoUtc, new DateTimeZone('UTC'));

            return $dt->setTimezone(new DateTimeZone($this->timezone))->format('H:i:s');
        } catch (Throwable) {
            return null;
        }
    }

    /**
     * @return array{date: string, sunset_local: string|null}|null
     */
    public function normalizeRow(array $row): ?array
    {
        $date = isset($row['date']) ? (string) $row['date'] : '';
        if ($date === '' || !preg_match('/^\d{4}-\d{2}-\d{2}$/', $date)) {
            return null;
        }
        if (isset($row['sunset_local']) && is_string($row['sunset_local']) && $row['sunset_local'] !== '') {
            return ['date' => $date, 'sunset_local' => $row['sunset_local']];
        }
        if (isset($row['sunset']) && is_string($row['sunset'])) {
            $local = $this->utcToLocal($row['sunset']);

            return ['date' => $date, 'sunset_local' => $local];
        }

        return null;
    }

    /**
     * @return array{byDate: array<string, array{date: string, sunset_local: string|null}>}
     */
    public function loadByDate(): array
    {
        $path = $this->dataFilePath;
        if (!is_file($path)) {
            return ['byDate' => []];
        }
        $raw = file_get_contents($path);
        if ($raw === false) {
            return ['byDate' => []];
        }
        $decoded = json_decode($raw, true);
        if (!is_array($decoded)) {
            return ['byDate' => []];
        }
        $rawRows = [];
        if (array_is_list($decoded)) {
            $rawRows = $decoded;
        } elseif (isset($decoded['rows']) && is_array($decoded['rows'])) {
            $rawRows = $decoded['rows'];
        }
        $byDate = [];
        foreach ($rawRows as $row) {
            if (!is_array($row)) {
                continue;
            }
            $n = $this->normalizeRow($row);
            if ($n === null) {
                continue;
            }
            $byDate[$n['date']] = $n;
        }

        return ['byDate' => $byDate];
    }

    /**
     * @return list<array<string, mixed>>
     */
    public function rowsFromDecoded(?array $decoded): array
    {
        if ($decoded === null) {
            return [];
        }
        if (array_is_list($decoded)) {
            return $decoded;
        }
        if (isset($decoded['rows']) && is_array($decoded['rows'])) {
            return $decoded['rows'];
        }

        return [];
    }

    /**
     * @param list<array{date: string, sunset_local: string}> $rows
     */
    public function writeRows(array $rows): void
    {
        $path = $this->dataFilePath;
        $dir = dirname($path);
        if (!is_dir($dir) && !mkdir($dir, 0755, true) && !is_dir($dir)) {
            throw new RuntimeException('SunsetForecast: cannot create data directory');
        }
        $json = json_encode(array_values($rows), JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_THROW_ON_ERROR);
        if (file_put_contents($path, $json) === false) {
            throw new RuntimeException('SunsetForecast: cannot write file');
        }
    }

    /**
     * Se la data non è nel file, chiama l'API e aggiorna il JSON.
     */
    public function ensureDate(string $dateYmd): ?string
    {
        if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $dateYmd)) {
            return null;
        }
        $loaded = $this->loadByDate();
        $byDate = $loaded['byDate'];
        if (
            isset($byDate[$dateYmd]['sunset_local'])
            && is_string($byDate[$dateYmd]['sunset_local'])
            && $byDate[$dateYmd]['sunset_local'] !== ''
        ) {
            return $byDate[$dateYmd]['sunset_local'];
        }

        $res = $this->fetchApi($dateYmd);
        if (!$res['ok'] || !is_array($res['body'])) {
            return null;
        }
        $body = $res['body'];
        $st = (string) ($body['status'] ?? '');
        $results = $body['results'] ?? null;
        $sunset = is_array($results) ? ($results['sunset'] ?? null) : null;
        $local = is_string($sunset) ? $this->utcToLocal($sunset) : null;
        if ($st !== 'OK' || $local === null || $local === '') {
            return null;
        }

        $byDate[$dateYmd] = ['date' => $dateYmd, 'sunset_local' => $local];
        $rows = array_values($byDate);
        usort($rows, static function (array $a, array $b): int {
            return strcmp($a['date'] ?? '', $b['date'] ?? '');
        });
        $rowsOut = array_values(array_filter($rows, static function (array $r): bool {
            return isset($r['sunset_local']) && is_string($r['sunset_local']) && $r['sunset_local'] !== '';
        }));

        try {
            $this->writeRows($rowsOut);
        } catch (Throwable) {
            return null;
        }

        return $local;
    }
}
