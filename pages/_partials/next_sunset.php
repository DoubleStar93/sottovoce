<?php
declare(strict_types=1);

require_once dirname(__DIR__, 2) . '/config.php';
require_once dirname(__DIR__, 2) . '/includes/SunsetForecast.php';
require_once dirname(__DIR__, 2) . '/includes/NextSunset.php';

$forecast = SunsetForecast::fromEnv();
$nextSunset = (new NextSunset($forecast))->resolve();

?>
<div class="next-sunset-widget" data-component="next-sunset">
  <?php if ($nextSunset['ok'] === true): ?>
    <p class="next-sunset-line mb-0">
      <span class="next-sunset-label"><?= htmlspecialchars(label('next_sunset.label', 'Prossimo tramonto'), ENT_QUOTES, 'UTF-8') ?>:</span>
      <time datetime="<?= htmlspecialchars($nextSunset['at']->format('c'), ENT_QUOTES, 'UTF-8') ?>">
        <?= htmlspecialchars($nextSunset['date'], ENT_QUOTES, 'UTF-8') ?>
        ·
        <?= htmlspecialchars($nextSunset['sunset_local'], ENT_QUOTES, 'UTF-8') ?>
      </time>
      <span class="next-sunset-tz">(<?= htmlspecialchars($forecast->timezone(), ENT_QUOTES, 'UTF-8') ?>)</span>
    </p>
  <?php else: ?>
    <p class="next-sunset-line next-sunset--error mb-0" role="status">
      <?= htmlspecialchars(label('next_sunset.unavailable', 'Tramonto non disponibile al momento.'), ENT_QUOTES, 'UTF-8') ?>
    </p>
  <?php endif; ?>
</div>
