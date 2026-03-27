<?php declare(strict_types=1);
require_once __DIR__ . '/config.php';
?>
<!doctype html>
<html lang="<?= htmlspecialchars(appCurrentLocale(), ENT_QUOTES) ?>">
<?php include __DIR__ . '/pages/_partials/head.php'; ?>
<body id="page-top" class="sottovoce-luxury page-template page-template-default page sottovoce-contact-page">
<div id="bgHalosHome" class="bg-halos-home" aria-hidden="true"></div>
<div id="page" class="site">
<?php include __DIR__ . '/pages/_partials/header.php'; ?>
<main class="site-main">
  <?php $showContactSectionTitle = false; ?>
  <?php $showContactTitleAfterMap = true; ?>
  <?php include __DIR__ . '/pages/_partials/contact_faq_section.php'; ?>
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

  #page {
    position: relative;
    z-index: 1;
  }

  body.sottovoce-contact-page .sottovoce-legal-page {
    padding-bottom: 1rem;
  }

  body.sottovoce-contact-page #contact-details.individual-homepage-contact-map-section {
    padding-top: clamp(2rem, 5vh, 3rem) !important;
  }

  body.sottovoce-contact-page #contact-details .contact-map-wrap {
    height: clamp(320px, 52vh, 520px);
    filter: grayscale(1) contrast(1.06) !important;
    -webkit-filter: grayscale(1) contrast(1.06) !important;
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 10px 34px rgba(0, 0, 0, 0.24);
  }

  body.sottovoce-contact-page #contact-details .row.g-0 {
    justify-content: center !important;
  }

  body.sottovoce-contact-page #contact-details .individual-homepage-contact-map.container {
    max-width: 100% !important;
    width: 100% !important;
    padding-left: 0 !important;
    padding-right: 0 !important;
  }

  body.sottovoce-contact-page #contact-details .sottovoce-contact-map {
    max-width: 100% !important;
    width: 100% !important;
    margin-left: auto !important;
    margin-right: auto !important;
  }

  body.sottovoce-contact-page #contact-details .contact-map-wrap iframe {
    opacity: 1;
    width: 100%;
    display: block;
  }

  body.sottovoce-contact-page #contact-details .contact-map-wrap {
    border-radius: 0;
    box-shadow: none;
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
