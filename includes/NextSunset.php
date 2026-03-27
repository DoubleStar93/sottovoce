<?php
declare(strict_types=1);

require_once __DIR__ . '/SunsetForecast.php';

/**
 * Risolve il prossimo tramonto (oggi se non è ancora passato, altrimenti domani).
 */
final class NextSunset
{
    public function __construct(
        private readonly SunsetForecast $forecast,
    ) {
    }

    public static function createDefault(): self
    {
        return new self(SunsetForecast::fromEnv());
    }

    /**
     * @return array{
     *   ok: true,
     *   date: string,
     *   sunset_local: string,
     *   at: \DateTimeImmutable
     * }|array{ok: false, error: string}
     */
    public function resolve(): array
    {
        $tz = new DateTimeZone($this->forecast->timezone());
        $now = new DateTimeImmutable('now', $tz);
        $today = $now->format('Y-m-d');
        $tomorrow = $now->modify('+1 day')->format('Y-m-d');

        $tToday = $this->forecast->ensureDate($today);
        if ($tToday === null) {
            return ['ok' => false, 'error' => 'today_unavailable'];
        }

        $dtToday = new DateTimeImmutable($today . ' ' . $tToday, $tz);
        if ($now < $dtToday) {
            return [
                'ok' => true,
                'date' => $today,
                'sunset_local' => $tToday,
                'at' => $dtToday,
            ];
        }

        $tTomorrow = $this->forecast->ensureDate($tomorrow);
        if ($tTomorrow === null) {
            return ['ok' => false, 'error' => 'tomorrow_unavailable'];
        }

        $dtTomorrow = new DateTimeImmutable($tomorrow . ' ' . $tTomorrow, $tz);

        return [
            'ok' => true,
            'date' => $tomorrow,
            'sunset_local' => $tTomorrow,
            'at' => $dtTomorrow,
        ];
    }
}
