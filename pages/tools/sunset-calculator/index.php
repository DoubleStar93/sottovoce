<?php
declare(strict_types=1);

require_once dirname(__DIR__, 3) . '/config.php';
require_once dirname(__DIR__, 3) . '/includes/SunsetForecast.php';

$forecast = SunsetForecast::fromEnv();
$dataFile = $forecast->path();
$toolKey = appEnv('SUNSET_TOOL_KEY', '');
$daysDefault = 100;
$daysMax = 366;
$localTz = $forecast->timezone();

$messages = [];
$errorFlash = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && ($_POST['action'] ?? '') === 'refresh') {
    if ($toolKey !== '' && ($toolKey !== (string) ($_POST['key'] ?? ''))) {
        $errorFlash = label('sunset.err_key', 'Chiave non valida.');
    } else {
        $days = (int) ($_POST['days'] ?? $daysDefault);
        if ($days < 1) {
            $days = 1;
        }
        if ($days > $daysMax) {
            $days = $daysMax;
        }

        $savedBefore = $forecast->loadByDate();
        $allByDate = $savedBefore['byDate'];

        $errors = 0;
        $skipped = 0;
        $apiCalls = 0;
        $start = new DateTimeImmutable('today', new DateTimeZone('UTC'));

        for ($i = 0; $i < $days; $i++) {
            $d = $start->modify('+' . $i . ' days');
            $dateYmd = $d->format('Y-m-d');

            if (
                isset($allByDate[$dateYmd]['sunset_local'])
                && is_string($allByDate[$dateYmd]['sunset_local'])
                && $allByDate[$dateYmd]['sunset_local'] !== ''
            ) {
                $skipped++;
                continue;
            }

            $res = $forecast->fetchApi($dateYmd);
            $apiCalls++;
            if (!$res['ok'] || !is_array($res['body'])) {
                $allByDate[$dateYmd] = [
                    'date' => $dateYmd,
                    'sunset_local' => null,
                ];
                $errors++;
            } else {
                $body = $res['body'];
                $st = (string) ($body['status'] ?? '');
                $results = $body['results'] ?? null;
                $sunset = is_array($results) ? ($results['sunset'] ?? null) : null;
                $local = is_string($sunset) ? $forecast->utcToLocal($sunset) : null;
                $allByDate[$dateYmd] = [
                    'date' => $dateYmd,
                    'sunset_local' => $local,
                ];
                if ($st !== 'OK' || $local === null) {
                    $errors++;
                }
            }
            usleep(120_000);
        }

        $rows = array_values($allByDate);
        usort($rows, static function (array $a, array $b): int {
            return strcmp($a['date'] ?? '', $b['date'] ?? '');
        });

        $rowsOut = array_values(array_filter($rows, static function (array $r): bool {
            return isset($r['sunset_local']) && is_string($r['sunset_local']) && $r['sunset_local'] !== '';
        }));

        try {
            $forecast->writeRows($rowsOut);
            $messages[] = label('sunset.msg_saved', 'Dati salvati.')
                . ' '
                . sprintf(
                    label('sunset.msg_summary', 'API: %d, saltati: %d, errori: %d.'),
                    $apiCalls,
                    $skipped,
                    $errors
                );
        } catch (Throwable $e) {
            $errorFlash = label('sunset.err_save', 'Impossibile salvare il file in data/.');
        }
    }
}

$savedDecoded = null;
if (is_file($dataFile)) {
    $rawSaved = file_get_contents($dataFile);
    if ($rawSaved !== false) {
        $decoded = json_decode($rawSaved, true);
        $savedDecoded = is_array($decoded) ? $decoded : null;
    }
}
$savedRows = $forecast->rowsFromDecoded($savedDecoded);

$locale = appCurrentLocale();
$pageTitle = label('sunset.page_title', 'Tramonti — calcolo');

?>
<!DOCTYPE html>
<html lang="<?= htmlspecialchars($locale, ENT_QUOTES, 'UTF-8') ?>">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
  <meta name="robots" content="noindex, nofollow">
  <style>
    :root {
      --bg: #f5f0e8;
      --text: #25282d;
      --accent: #3c3e21;
      --muted: #6b6b6b;
      --border: #d4cfc4;
    }
    * { box-sizing: border-box; }
    body {
      margin: 0;
      font-family: system-ui, -apple-system, "Segoe UI", Roboto, sans-serif;
      background: var(--bg);
      color: var(--text);
      line-height: 1.45;
      padding: 1.5rem clamp(1rem, 3vw, 2.5rem) 3rem;
    }
    h1 {
      font-weight: 600;
      font-size: 1.35rem;
      letter-spacing: 0.04em;
      text-transform: uppercase;
      margin: 0 0 0.35rem;
      color: var(--accent);
    }
    .sub { color: var(--muted); font-size: 0.95rem; margin-bottom: 1.5rem; max-width: 42rem; }
    .panel {
      background: #fff;
      border: 1px solid var(--border);
      padding: 1.25rem 1.5rem;
      margin-bottom: 1.5rem;
      max-width: 52rem;
    }
    label { display: block; font-size: 0.8rem; text-transform: uppercase; letter-spacing: 0.06em; color: var(--muted); margin-bottom: 0.25rem; }
    input[type="text"], input[type="number"], input[type="password"] {
      width: 100%;
      max-width: 16rem;
      padding: 0.5rem 0.6rem;
      border: 1px solid var(--border);
      margin-bottom: 1rem;
    }
    button {
      background: var(--accent);
      color: #fff;
      border: 0;
      padding: 0.55rem 1.2rem;
      font-size: 0.9rem;
      cursor: pointer;
      letter-spacing: 0.04em;
    }
    button:hover { opacity: 0.92; }
    .msg { padding: 0.75rem 1rem; margin-bottom: 1rem; max-width: 52rem; border: 1px solid var(--border); background: #fff; }
    .msg.err { border-color: #c45c3e; color: #7a2e1a; }
    table { width: 100%; border-collapse: collapse; font-size: 0.88rem; }
    th, td { text-align: left; padding: 0.45rem 0.6rem; border-bottom: 1px solid var(--border); }
    th { font-size: 0.72rem; text-transform: uppercase; letter-spacing: 0.06em; color: var(--muted); }
    .wrap-table { overflow-x: auto; max-width: min(100%, 56rem); border: 1px solid var(--border); background: #fff; }
    .meta-line { font-size: 0.85rem; color: var(--muted); margin-bottom: 0.75rem; }
    a { color: var(--accent); }
  </style>
</head>
<body>
  <h1><?= htmlspecialchars(label('sunset.heading', 'Tramonti (API)'), ENT_QUOTES, 'UTF-8') ?></h1>
  <p class="sub"><?= htmlspecialchars(label('sunset.intro', 'Tramonto locale (Europe/Rome) da sunrise-sunset.org.'), ENT_QUOTES, 'UTF-8') ?></p>

  <?php if ($errorFlash !== ''): ?>
    <div class="msg err"><?= htmlspecialchars($errorFlash, ENT_QUOTES, 'UTF-8') ?></div>
  <?php endif; ?>

  <?php foreach ($messages as $m): ?>
    <div class="msg"><?= htmlspecialchars($m, ENT_QUOTES, 'UTF-8') ?></div>
  <?php endforeach; ?>

  <div class="panel">
    <form method="post" action="">
      <input type="hidden" name="action" value="refresh">
      <p class="sub" style="margin-top:0;margin-bottom:1rem;font-size:0.9rem;">
        <?= htmlspecialchars(label('sunset.coords_from_env', 'Coordinate: SUNSET_DEFAULT_LAT / SUNSET_DEFAULT_LNG nel file .env'), ENT_QUOTES, 'UTF-8') ?>
      </p>
      <label for="days"><?= htmlspecialchars(label('sunset.label_days', 'Giorni (max 366)'), ENT_QUOTES, 'UTF-8') ?></label>
      <input type="number" name="days" id="days" min="1" max="<?= (int) $daysMax ?>" value="<?= (int) $daysDefault ?>" required>
      <?php if ($toolKey !== ''): ?>
        <label for="key"><?= htmlspecialchars(label('sunset.label_key', 'Chiave (SUNSET_TOOL_KEY in .env)'), ENT_QUOTES, 'UTF-8') ?></label>
        <input type="password" name="key" id="key" autocomplete="off">
      <?php endif; ?>
      <button type="submit"><?= htmlspecialchars(label('sunset.btn_fetch', 'Scarica e salva'), ENT_QUOTES, 'UTF-8') ?></button>
    </form>
  </div>

  <?php if ($savedRows !== []): ?>
    <p class="meta-line">
      <?= htmlspecialchars(label('sunset.meta_location_note', 'Posizione fissa (da .env)'), ENT_QUOTES, 'UTF-8') ?>
      · <?= htmlspecialchars($localTz, ENT_QUOTES, 'UTF-8') ?>
    </p>
    <div class="wrap-table">
      <table>
        <thead>
          <tr>
            <th><?= htmlspecialchars(label('sunset.col_date', 'Data'), ENT_QUOTES, 'UTF-8') ?></th>
            <th><?= htmlspecialchars(label('sunset.col_sunset_local', 'Tramonto (locale)'), ENT_QUOTES, 'UTF-8') ?></th>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($savedRows as $row): ?>
          <?php
          if (!is_array($row)) {
              continue;
          }
          $date = (string) ($row['date'] ?? '');
          if (array_key_exists('sunset_local', $row)) {
              $v = $row['sunset_local'];
              $sl = ($v !== null && $v !== '') ? (string) $v : '—';
          } elseif (isset($row['sunset']) && is_string($row['sunset'])) {
              $sl = $forecast->utcToLocal($row['sunset']) ?? '—';
          } else {
              $sl = '—';
          }
          ?>
          <tr>
            <td><?= htmlspecialchars($date, ENT_QUOTES, 'UTF-8') ?></td>
            <td><?= htmlspecialchars($sl, ENT_QUOTES, 'UTF-8') ?></td>
          </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <p style="margin-top:1rem;font-size:0.8rem;color:var(--muted);">
      <?= htmlspecialchars(label('sunset.file_hint', 'File:'), ENT_QUOTES, 'UTF-8') ?>
      <code>data/sunset-forecast.json</code>
      ·
      <a href="https://api.sunrise-sunset.org/" rel="noopener noreferrer">sunrise-sunset.org API</a>
    </p>
  <?php else: ?>
    <p class="meta-line"><?= htmlspecialchars(label('sunset.empty', 'Nessun file salvato: usa il pulsante per scaricare i dati.'), ENT_QUOTES, 'UTF-8') ?></p>
  <?php endif; ?>

</body>
</html>
