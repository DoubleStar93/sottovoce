<?php declare(strict_types=1);
require_once __DIR__ . '/config.php';
?>
<!doctype html>
<html lang="<?= htmlspecialchars(appCurrentLocale(), ENT_QUOTES) ?>">
<?php include __DIR__ . '/pages/_partials/head.php'; ?>
<body id="page-top" class="sottovoce-luxury page-template page-template-default page sottovoce-services-page">
<div id="bgHalosHome" class="bg-halos-home" aria-hidden="true"></div>
<div id="page" class="site">
<?php include __DIR__ . '/pages/_partials/header.php'; ?>
<main class="site-main">
  <section class="sottovoce-services-heading">
    <div class="container text-center">
      <h1 class="display-1-72 font-48-mobile mb-0 sottovoce-services-title-glow">Servizi</h1>
    </div>
  </section>
  <div id="amenities" class="wp-block-group container-fluid white-bg mb-5 pb-5">
    <div class="wp-block-group__inner-container is-layout-flow wp-block-group-is-layout-flow">
      <div class="container-fluid pt-5">
        <div class="row position-relative">
          <div class="col-12 p-0 px-lg-3">
            <img width="1284" height="375" decoding="async" src="/dependencies/img/wp-content/uploads/2020/10/INFINITY-POOL-DAY-ADDRESS-SKY-VIEW-copy.jpg" alt="Infinity pool at Address Sky View" class="img-fluid amenities-large-img p-0 px-lg-3">
          </div>
          <div class="amenities-title-box">
            <h2 class="display-2-48">Infinity Pool</h2>
          </div>
        </div>
        <div class="row justify-content-center text-center">
          <div class="col-12 col-lg-8 amenities-list-col">
            <p class="text-center mt-5 mb-4 body-4">Relax in style at our breathtaking infinity pool. A large sun-lounging deck, private cabanas, a bar with both pool and dry deck seating - the Address Sky View pool deck is all of that and more.</p>
            <ul class="amenities-list text-left body-4">
              <li class="d-flex align-items-center mb-2"><span class="generic-icon px-2"></span>Located on the iconic Sky Deck</li>
              <li class="d-flex align-items-center mb-2"><span class="generic-icon px-2"></span>Access to 18 years and above.</li>
              <li class="d-flex align-items-center mb-2"><span class="generic-icon px-2"></span>Timing: 9:00 AM till Sunset</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="container-fluid pt-5">
        <div class="row position-relative">
          <div class="col-12 p-0 px-lg-3">
            <img width="1284" height="375" decoding="async" src="/dependencies/img/wp-content/uploads/2020/10/KIDS-CLUB-ADDRESS-SKY-VIEW-copy.jpg" alt="Qix Kids Club at Address Sky View" class="img-fluid amenities-large-img p-0 px-lg-3">
          </div>
          <div class="amenities-title-box">
            <h2 class="display-2-48">Qix Kids Club</h2>
          </div>
        </div>
        <div class="row justify-content-center text-center">
          <div class="col-12 col-lg-8 amenities-list-col">
            <p class="text-center mt-5 mb-4 body-4">Enjoy a well-earned moment for yourself and leave your little ones to us. Our qualified team of childcare professionals will spark their imagination with educational games, fun activities and craft sessions they will love.</p>
            <ul class="amenities-list text-left body-4">
              <li class="d-flex align-items-center mb-2"><span class="generic-icon px-2"></span>For children between the ages of 4 and 12</li>
              <li class="d-flex align-items-center mb-2"><span class="generic-icon px-2"></span>Babysitting services to be booked 24 hours in advance.</li>
              <li class="d-flex align-items-center mb-2"><span class="generic-icon px-2"></span>Timing: 10am to 7pm</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
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

  .sottovoce-services-heading {
    padding-top: clamp(7rem, 17vh, 10rem);
    padding-bottom: 1.25rem;
  }

  .sottovoce-services-title-glow {
    text-shadow:
      0 0 10px rgba(255, 255, 255, 0.72),
      0 0 28px rgba(255, 215, 180, 0.46),
      0 0 56px rgba(206, 85, 22, 0.26);
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
