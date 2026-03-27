<div class="container-fluid position-relative fullscreen-hero-banner-booking-widget">
  <div class="row">
    <div id="video-overlay"></div>

    <style>
      @media (min-width: 768px) {
        #hero-vid {
          background-image: url('https://placehold.co/1920x1080/png?text=Sottovoce+Hero+Placeholder');
          background-size: cover;
          background-position: center;
        }
      }

      @media (max-width: 767px) {
        video#hero-vid:-webkit-full-screen {
          width: 100%;
          height: 100%;
          max-height: 100%;
          object-fit: cover;
        }

        video#hero-vid {
          width: 100%;
          max-height: 100%;
          object-fit: cover;
        }

        #hero-vid {
          background-image: url('https://placehold.co/1080x1920/png?text=Sottovoce+Hero+Placeholder');
          background-size: cover;
          background-position: center;
        }

        #nav-main {
          top: 0 !important;
        }
      }
    </style>

    <video class="visible-desktop individual-homepage-video" id="hero-vid" autoplay="" loop="" muted="" playsinline="">
      <source type="video/mp4" media="all and (min-width: 768px)" src="/dependencies/media/wp-content/uploads/2023/08/WEB-Wide-1_2.mp4">
      <source type="video/mp4" media="all and (max-width: 767px)" src="/dependencies/media/wp-content/uploads/2023/08/WEB-Mobile-1_2.mp4">
    </video>

    <div class="container-fluid individual-homepage-content-section hero-home-bottom">
      <div class="container mx-auto">
        <h1 class="sr-only"><?= htmlspecialchars(label('hero.title', 'Sottovoce Ravenna'), ENT_QUOTES) ?></h1>
        <?php include __DIR__ . '/sunset_countdown_hero.php'; ?>
        <p class="mb-2 homepage-content-description text-white d-none"></p>
        <div class="hero-prenota-cta">
          <button class="home-prenota-btn home-prenota-btn-hero" type="button" onclick="if (typeof MOBEE_PAGE_URL !== 'undefined' && MOBEE_PAGE_URL) { window.open(MOBEE_PAGE_URL, '_blank', 'noopener,noreferrer'); }">
            <?= htmlspecialchars(label('cta.book', 'Prenota'), ENT_QUOTES) ?>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
