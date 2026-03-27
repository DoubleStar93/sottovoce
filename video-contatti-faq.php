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
  <section class="sottovoce-legal-page">
    <div class="container text-center">
      <h1 class="display-1-72 font-48-mobile mb-2 sottovoce-contact-title-glow"><?= htmlspecialchars(label('contact.title', 'Contatti'), ENT_QUOTES) ?></h1>
    </div>
  </section>
  <?php $showContactSectionTitle = false; ?>
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

  .sottovoce-contact-title-glow {
    text-shadow:
      0 0 10px rgba(255, 255, 255, 0.7),
      0 0 28px rgba(255, 215, 180, 0.45),
      0 0 54px rgba(206, 85, 22, 0.24);
  }

  body.sottovoce-contact-page .sottovoce-legal-page {
    padding-bottom: 1rem;
  }

  body.sottovoce-contact-page #contact-details.individual-homepage-contact-map-section {
    padding-top: 0.75rem !important;
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
