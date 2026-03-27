<?php declare(strict_types=1);
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/SunsetForecast.php';

$tz = new DateTimeZone('Europe/Rome');
$today = new DateTimeImmutable('today', $tz);
$forecast = SunsetForecast::fromEnv(__DIR__);
$sunsetWeek = [];

for ($i = 0; $i < 7; $i++) {
    $d = $today->modify("+{$i} day");
    $dateYmd = $d->format('Y-m-d');
    $sunset = $forecast->ensureDate($dateYmd);
    $sunsetWeek[] = [
        'date' => $d,
        'sunset' => $sunset,
    ];
}
?>
<!doctype html>
<html lang="<?= htmlspecialchars(appCurrentLocale(), ENT_QUOTES) ?>">
<?php include __DIR__ . '/pages/_partials/head.php'; ?>
<body id="page-top" class="sottovoce-luxury page-template page-template-default page sottovoce-hours-page">
<div id="bgHalosHome" class="bg-halos-home" aria-hidden="true"></div>
<div id="page" class="site">
<?php include __DIR__ . '/pages/_partials/header.php'; ?>
<main class="site-main">
  <section class="sottovoce-legal-page">
    <div class="container">
      <h1 class="display-1-72 font-48-mobile mb-3 text-center sottovoce-hours-title-glow"><?= htmlspecialchars(label('hours.title', 'Orari'), ENT_QUOTES) ?></h1>
      <p class="body-2 text-center mb-4"><?= htmlspecialchars(label('hours.intro', "Sottovoce apre al tramonto: l'accoglienza segue il ritmo della luce serale, con ingresso consigliato in prossimita dell'orario indicato."), ENT_QUOTES) ?></p>

      <div class="sottovoce-hours-card mb-4">
        <h2 class="display-2-48 mb-3 text-center"><?= htmlspecialchars(label('hours.how_title', 'Come funzionano gli orari'), ENT_QUOTES) ?></h2>
        <p class="body-2 mb-3"><?= htmlspecialchars(label('hours.how_body_1', 'Il servizio e organizzato su turni da 50 minuti per garantire puntualita, attenzione al tavolo e continuita del ritmo in sala.'), ENT_QUOTES) ?></p>
        <p class="body-2 mb-0"><?= htmlspecialchars(label('hours.how_body_2', 'Ti consigliamo di arrivare qualche minuto prima rispetto all\'orario del tuo slot; in caso di ritardo faremo il possibile per assisterti in base alla disponibilita del turno successivo.'), ENT_QUOTES) ?></p>
      </div>

      <div class="sottovoce-hours-card">
        <h2 class="display-2-48 mb-3 text-center"><?= htmlspecialchars(label('hours.week_title', 'Tramonto: prossimi 7 giorni'), ENT_QUOTES) ?></h2>
        <div class="table-responsive">
          <table class="table table-borderless mb-0 sottovoce-hours-table">
            <thead>
              <tr>
                <th scope="col"><?= htmlspecialchars(label('hours.table.date', 'Data'), ENT_QUOTES) ?></th>
                <th scope="col" class="text-right"><?= htmlspecialchars(label('hours.table.sunset', 'Tramonto'), ENT_QUOTES) ?></th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($sunsetWeek as $row): ?>
              <?php
              $sunsetRaw = is_string($row['sunset']) ? $row['sunset'] : '';
              $sunsetDisplay = $sunsetRaw !== '' ? substr($sunsetRaw, 0, 5) : label('hours.unavailable', 'non disponibile');
              ?>
              <tr>
                <td class="sottovoce-hours-date"><?= htmlspecialchars($row['date']->format('d/m/Y'), ENT_QUOTES) ?></td>
                <td class="text-right sottovoce-hours-time"><?= htmlspecialchars($sunsetDisplay, ENT_QUOTES) ?></td>
              </tr>
            <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
</main>
<?php include __DIR__ . '/pages/_partials/footer.php'; ?>
</div>
<?php include __DIR__ . '/pages/_partials/foot.php'; ?>
<style>
  .bg-halos-home {
    position: fixed;
    inset: 0;
    overflow: hidden;
    pointer-events: none;
    z-index: 2;
    mix-blend-mode: screen;
  }
  .bg-halo-home {
    position: absolute;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(255, 214, 188, 0.2) 0%, rgba(206, 85, 22, 0.2) 30%, rgba(206, 85, 22, 0.08) 56%, rgba(206, 85, 22, 0) 78%);
    filter: blur(var(--blur, 24px));
    opacity: var(--opacity, 0.62);
    transform: translate(-50%, -50%);
    animation: homeHaloDrift var(--dur, 9s) ease-in-out infinite;
    animation-delay: var(--delay, 0s);
  }
  @keyframes homeHaloDrift {
    0%, 100% { transform: translate(-50%, -50%) scale(0.92); }
    50% { transform: translate(-50%, -50%) scale(1.08); }
  }
  #page { position: relative; z-index: 1; }
  .sottovoce-hours-title-glow {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.7), 0 0 28px rgba(255, 215, 180, 0.45), 0 0 54px rgba(206, 85, 22, 0.24);
  }
  .sottovoce-hours-card {
    border: 1px solid rgba(227, 203, 165, 0.24);
    background: linear-gradient(180deg, rgba(60, 62, 33, 0.32) 0%, rgba(60, 62, 33, 0.16) 100%);
    padding: 1.1rem 1.25rem;
    border-radius: 14px;
    backdrop-filter: blur(2px);
  }
  .sottovoce-hours-table th,
  .sottovoce-hours-table td {
    color: #fff;
    border-top: 1px solid rgba(227, 203, 165, 0.14);
    padding: 0.85rem 0.35rem;
  }
  .sottovoce-hours-table thead th {
    border-top: none;
    border-bottom: 1px solid rgba(227, 203, 165, 0.28);
    opacity: 0.9;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    font-size: 0.82rem;
    font-weight: 500;
  }
  .sottovoce-hours-table tbody tr:hover td {
    background: rgba(227, 203, 165, 0.06);
  }
  .sottovoce-hours-date {
    font-weight: 400;
    letter-spacing: 0.02em;
  }
  .sottovoce-hours-time {
    font-weight: 500;
    letter-spacing: 0.04em;
    color: #f2dec0;
  }
</style>
<script>
  (function () {
    var HALO_COUNT = 10;
    var count = Math.min(40, Math.max(1, HALO_COUNT));
    var root = document.getElementById("bgHalosHome");
    if (!root) return;
    for (var i = 0; i < count; i += 1) {
      var halo = document.createElement("div");
      halo.className = "bg-halo-home";
      var size = 140 + Math.random() * 320;
      var left = Math.random() * 100;
      var top = Math.random() * 100;
      var opacity = 0.4 + Math.random() * 0.35;
      var blur = 12 + Math.random() * 22;
      var duration = 7 + Math.random() * 7;
      var delay = -Math.random() * 6;
      halo.style.width = size + "px";
      halo.style.height = size + "px";
      halo.style.left = left + "%";
      halo.style.top = top + "%";
      halo.style.setProperty("--opacity", opacity.toFixed(2));
      halo.style.setProperty("--blur", blur.toFixed(0) + "px");
      halo.style.setProperty("--dur", duration.toFixed(2) + "s");
      halo.style.setProperty("--delay", delay.toFixed(2) + "s");
      root.appendChild(halo);
    }
  })();
</script>
</body>
</html>
