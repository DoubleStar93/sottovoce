<?php
declare(strict_types=1);

/** @var array $nextSunsetCountdown from pages/index.php */
if (!isset($nextSunsetCountdown) || !is_array($nextSunsetCountdown)) {
    return;
}

$targetIso = '';
if (($nextSunsetCountdown['ok'] ?? false) === true && isset($nextSunsetCountdown['at']) && $nextSunsetCountdown['at'] instanceof DateTimeImmutable) {
    $targetIso = $nextSunsetCountdown['at']->format('c');
}

?>
<style>
  .sunset-countdown-hero {
    position: relative;
    z-index: 4;
    margin: 0.75rem auto 1rem;
    max-width: 40rem;
    text-align: center;
    padding: 0.35rem 0.75rem;
    border-radius: 0;
    background: transparent;
    box-shadow: none;
  }

  .sunset-countdown-hero .sunset-countdown-inner {
    position: relative;
  }

  body.sottovoce-luxury .sunset-countdown-hero .sunset-countdown-label {
    font-size: clamp(0.62rem, 1.35vw, 0.72rem) !important;
    font-weight: 400 !important;
    letter-spacing: 0.42em !important;
    text-transform: uppercase !important;
    color: rgba(255, 255, 255, 0.95) !important;
    margin: 0 0 0.4rem !important;
    text-shadow:
      0 1px 2px rgba(0, 0, 0, 0.85),
      0 0 8px rgba(0, 0, 0, 0.65),
      0 0 18px rgba(0, 0, 0, 0.4),
      0 0 16px rgba(255, 255, 255, 0.45) !important;
  }

  .sunset-countdown-hero .sunset-countdown-digits-wrap {
    position: relative;
    display: inline-block;
    margin: 0;
    padding: 0.15em 0.25em 0.3em;
  }

  .sunset-countdown-hero .sunset-countdown-glow-blob {
    position: absolute;
    left: 50%;
    top: 54%;
    transform: translate(-50%, -50%);
    width: min(96%, 30rem);
    aspect-ratio: 1.85 / 1;
    max-height: 9rem;
    border-radius: 50%;
    pointer-events: none;
    z-index: 0;
    background: radial-gradient(
      ellipse 78% 72% at 42% 38%,
      rgba(255, 255, 255, 0.95) 0%,
      rgba(255, 255, 255, 0.4) 28%,
      rgba(255, 255, 255, 0.12) 55%,
      transparent 78%
    );
    filter: blur(26px);
    opacity: 0.94;
    animation: sunsetCountdownGlobePulse 6s ease-in-out infinite;
  }

  @keyframes sunsetCountdownGlobePulse {
    0%, 100% { opacity: 0.84; transform: translate(-50%, -50%) scale(1); }
    50% { opacity: 1; transform: translate(-50%, -50%) scale(1.03); }
  }

  body.sottovoce-luxury .sunset-countdown-hero .sunset-countdown-digits {
    position: relative;
    z-index: 1;
    font-family: ui-sans-serif, system-ui, "Segoe UI", Roboto, sans-serif !important;
    font-weight: 400 !important;
    font-size: clamp(2.5rem, 9.5vw, 4.85rem) !important;
    line-height: 1.02 !important;
    letter-spacing: 0.12em !important;
    font-variant-numeric: tabular-nums !important;
    margin: 0 !important;
    padding: 0 !important;
    background: none !important;
    -webkit-background-clip: unset !important;
    background-clip: unset !important;
    color: #ffffff !important;
    -webkit-text-fill-color: #ffffff !important;
    text-shadow:
      0 0 8px rgba(255, 255, 255, 1),
      0 0 26px rgba(255, 255, 255, 0.98),
      0 0 52px rgba(255, 255, 255, 0.72),
      0 0 96px rgba(255, 255, 255, 0.45) !important;
  }

  body.sottovoce-luxury .sunset-countdown-hero.sunset-countdown--unavailable .sunset-countdown-digits {
    font-size: clamp(1.05rem, 3.2vw, 1.25rem) !important;
    font-weight: 400 !important;
    letter-spacing: 0.06em !important;
    background: none !important;
    -webkit-background-clip: unset !important;
    background-clip: unset !important;
    color: rgba(255, 255, 255, 0.92) !important;
    -webkit-text-fill-color: rgba(255, 255, 255, 0.92) !important;
    text-shadow:
      0 0 12px rgba(255, 255, 255, 0.6),
      0 0 28px rgba(255, 255, 255, 0.35) !important;
  }
</style>

<?php if ($targetIso !== ''): ?>
<section class="sunset-countdown-hero" aria-labelledby="sunset-countdown-title">
  <div class="sunset-countdown-inner">
    <p id="sunset-countdown-title" class="sunset-countdown-label"><?= htmlspecialchars(label('countdown.until_sunset', 'Al tramonto'), ENT_QUOTES, 'UTF-8') ?></p>
    <div class="sunset-countdown-digits-wrap">
      <span class="sunset-countdown-glow-blob" aria-hidden="true"></span>
      <p
        class="sunset-countdown-digits"
        id="sunsetCountdownDisplay"
        role="timer"
        aria-live="polite"
        aria-atomic="true"
        data-target="<?= htmlspecialchars($targetIso, ENT_QUOTES, 'UTF-8') ?>"
      >00 : 00 : 00</p>
    </div>
  </div>
</section>
<script>
(function () {
  var el = document.getElementById('sunsetCountdownDisplay');
  if (!el) return;
  var raw = el.getAttribute('data-target');
  if (!raw) return;
  var targetMs = Date.parse(raw);
  if (Number.isNaN(targetMs)) return;

  function pad(n) {
    return (n < 10 ? '0' : '') + n;
  }

  function tick() {
    var now = Date.now();
    var ms = targetMs - now;
    if (ms <= 0) {
      el.textContent = '00 : 00 : 00';
      window.setTimeout(function () { window.location.reload(); }, 2500);
      return;
    }
    var totalSec = Math.floor(ms / 1000);
    var h = Math.floor(totalSec / 3600);
    var m = Math.floor((totalSec % 3600) / 60);
    var s = totalSec % 60;
    el.textContent = pad(h) + ' : ' + pad(m) + ' : ' + pad(s);
  }

  tick();
  window.setInterval(tick, 1000);
})();
</script>
<?php else: ?>
<section class="sunset-countdown-hero sunset-countdown--unavailable" aria-label="<?= htmlspecialchars(label('countdown.unavailable', 'Conto alla rovescia non disponibile'), ENT_QUOTES, 'UTF-8') ?>">
  <div class="sunset-countdown-inner">
    <p class="sunset-countdown-digits"><?= htmlspecialchars(label('countdown.unavailable', 'Conto alla rovescia non disponibile'), ENT_QUOTES, 'UTF-8') ?></p>
  </div>
</section>
<?php endif; ?>
