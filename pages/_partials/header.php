<?php
declare(strict_types=1);
if (!function_exists('label') && is_file(__DIR__ . '/../../config.php')) {
    require_once __DIR__ . '/../../config.php';
}
$requestPath = trim((string) parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH), '/');
$isOnePageHome = in_array($requestPath, ['', 'index.php'], true);
$homePrefix = $isOnePageHome ? '' : '/index.php';
$currentLocale = function_exists('appCurrentLocale') ? appCurrentLocale() : 'it';
$itUrl = '/';
$enUrl = '/en/';
$switchLocale = $currentLocale === 'en' ? 'it' : 'en';
$switchUrl = $switchLocale === 'en' ? $enUrl : $itUrl;
$navHome = function_exists('label') ? label('nav.home', 'Home') : 'Home';
$navServizi = function_exists('label') ? label('nav.servizi', 'Servizi') : 'Servizi';
$navOrari = function_exists('label') ? label('nav.orari', 'Orari') : 'Orari';
$navContatti = function_exists('label') ? label('nav.contatti', 'Contatti') : 'Contatti';
$navPrenota = function_exists('label') ? label('nav.prenota', 'Prenota') : 'Prenota';
$bookingUrl = trim((string) appEnv('MOBEE_PAGE_URL', ''));
$ariaMenuToggle = function_exists('label') ? label('nav.aria.menu_toggle', 'Menu') : 'Menu';
$ariaCloseOverlay = function_exists('label') ? label('nav.aria.close_overlay', 'Chiudi menu') : 'Chiudi menu';
$ariaScrollSun = function_exists('label') ? label('nav.aria.scroll_sun', 'Indicatore di scorrimento') : 'Indicatore di scorrimento';
$homeHref = $homePrefix !== '' ? $homePrefix : '/';
?>
<header id="masthead" class="site-header custom-navbar-page nav-individual more-dropdown-navbar">
  <div id="to-top"></div>
  <style>
    html { scroll-behavior: smooth; }
    #featured-offer, #events, #amenities, #contact-details, #faq {
      scroll-margin-top: 120px;
    }
    /* Su Sottovoce luxury lo scroll resta verde + voci bianche (css/sottovoce-luxury-shell.css) */
    body:not(.sottovoce-luxury) #nav-main.scrolled-nav {
      background-color: #fff !important;
    }
    body:not(.sottovoce-luxury) #nav-main.scrolled-nav .navbar-nav .nav-link,
    body:not(.sottovoce-luxury) #nav-main.scrolled-nav .wpml-ls-legacy-dropdown-click a {
      color: #25282d !important;
    }
    #nav-main #black_logo { display: none !important; }
    #nav-main #white_logo { display: block !important; }
    body:not(.sottovoce-luxury) #nav-main.scrolled-nav #black_logo { display: block !important; }
    body:not(.sottovoce-luxury) #nav-main.scrolled-nav #white_logo { display: none !important; }
    #nav-main .toggler-icon-animated .fa-times { display: none; }
    /* Luxury: solo hamburger nel header + X nell’overlay (nessun secondo “times” nel toggler) */
    body:not(.sottovoce-luxury) #nav-main.menu-open .toggler-icon-animated .fa-bars { display: none; }
    body:not(.sottovoce-luxury) #nav-main.menu-open .toggler-icon-animated .fa-times { display: inline-block; }
    .sottovoce-scroll-sun {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 14px;
      z-index: 1065;
      pointer-events: none;
      opacity: 1;
      transition: opacity .2s ease;
    }
    #nav-main.menu-open + .sottovoce-scroll-sun,
    #bootscore-navbar-collapsedd.show ~ .sottovoce-scroll-sun {
      opacity: 0;
    }
    .sottovoce-scroll-sun-track {
      position: absolute;
      top: 6px;
      left: 0;
      width: 100%;
      height: 2px;
      background: linear-gradient(90deg, rgba(227, 203, 165, 0.12), rgba(227, 203, 165, 0.5), rgba(227, 203, 165, 0.12));
    }
    .sottovoce-scroll-sun-dot {
      position: absolute;
      top: 0;
      left: 0;
      width: 14px;
      height: 14px;
      border-radius: 50%;
      background: radial-gradient(circle at 42% 36%, #ffffff 0%, #fffdf5 22%, #ffeabf 44%, #ffd48a 62%, #f5b35e 78%, #ce5516 100%);
      box-shadow:
        0 0 10px rgba(255, 255, 255, 0.95),
        0 0 24px rgba(255, 243, 212, 0.9),
        0 0 48px rgba(255, 224, 164, 0.72),
        0 0 84px rgba(206, 85, 22, 0.38);
      filter: saturate(1.1) brightness(1.08);
      transform: translateX(0);
      transition: transform 120ms linear;
    }
    @media (prefers-reduced-motion: reduce) {
      .sottovoce-scroll-sun-dot {
        transition: none;
      }
    }
  </style>

  <nav id="nav-main" class="navbar sottovoce-navbar-overlay-mode fixed-top top-0 start-0 w-100 px-0 px-lg-3 py-3 py-lg-4 align-items-center global-navbar internal-nav">

    <div class="custom-navigation-expandable container-fluid px-sm-3 mt-3 mt-lg-2 sottovoce-navbar-shell w-100">

      <div id="custom-sticky-itendifier" class="sottovoce-navbar-brand-wrap flex-shrink-0">
        <a class="navbar-brand pb-0 pl-3 px-lg-0 custom-width-navbar-brand d-flex justify-content-center" href="<?= htmlspecialchars($homeHref, ENT_QUOTES, 'UTF-8') ?>">
          <img width="141" height="34" id="black_logo" src="/img/logo_colored.png" alt="logo" class="logo" style="display:none">

          <img width="141" height="34" id="white_logo" src="/img/logo_white.png" alt="logo" class="logo">
        </a>
      </div>

      <button class="navbar-toggler ml-auto mr-2 pr-3 px-lg-3 border-0 bootstrap-collapse-navbar sottovoce-nav-toggler" type="button" data-toggle="collapse" data-target="#bootscore-navbar-collapsedd" aria-controls="bootscore-navbar-collapsedd" aria-expanded="false" aria-label="<?= htmlspecialchars($ariaMenuToggle, ENT_QUOTES, 'UTF-8') ?>">
        <div class="toggler-icon-animated">
          <i class="fal fa-bars" aria-hidden="true"></i>
          <i class="fal fa-times" aria-hidden="true"></i>
        </div>
      </button>
      <hr class="header-bottom-line-IBU d-none">

      <div class="collapse navbar-collapse custom-collapsed-items sottovoce-navbar-collapse sottovoce-navbar-overlay-panel p-0" id="bootscore-navbar-collapsedd">

        <button type="button" id="sottovoce-overlay-close" class="sottovoce-overlay-close" aria-label="<?= htmlspecialchars($ariaCloseOverlay, ENT_QUOTES, 'UTF-8') ?>">
          <span class="sottovoce-overlay-close-x" aria-hidden="true">×</span>
        </button>

        <div class="d-flex flex-column align-items-center justify-content-center w-100 sottovoce-nav-inner sottovoce-nav-overlay-inner" id="responsive-navbar-flex">
          <ul class="navbar-nav static-area sottovoce-primary-nav sottovoce-overlay-nav-list flex-column align-items-center text-center mb-0" role="menubar">
            <li class="nav-item" role="none">
              <a href="<?= htmlspecialchars($homeHref, ENT_QUOTES, 'UTF-8') ?>" class="nav-link" role="menuitem"><?= htmlspecialchars($navHome, ENT_QUOTES, 'UTF-8') ?></a>
            </li>
            <li class="nav-item" role="none">
              <a href="/servizi.php" class="nav-link" role="menuitem"><?= htmlspecialchars($navServizi, ENT_QUOTES, 'UTF-8') ?></a>
            </li>
            <li class="nav-item" role="none">
              <a href="/orari.php" class="nav-link" role="menuitem"><?= htmlspecialchars($navOrari, ENT_QUOTES, 'UTF-8') ?></a>
            </li>
            <li class="nav-item" role="none">
              <a href="/contatti.php" class="nav-link" role="menuitem"><?= htmlspecialchars($navContatti, ENT_QUOTES, 'UTF-8') ?></a>
            </li>
            <li class="nav-item" role="none">
              <a
                href="<?= htmlspecialchars($bookingUrl !== '' ? $bookingUrl : '#', ENT_QUOTES, 'UTF-8') ?>"
                class="nav-link sottovoce-nav-link-booking"
                role="menuitem"
                <?= $bookingUrl !== '' ? 'target="_blank" rel="noopener noreferrer"' : 'onclick="return false;"' ?>
              ><?= htmlspecialchars($navPrenota, ENT_QUOTES, 'UTF-8') ?></a>
            </li>
          </ul>

          <div class="d-flex flex-column align-items-center justify-content-center right-nav-container sottovoce-nav-overlay-lang mt-4 mt-md-5" id="right-side-elements">
            <ul class="navbar-nav rightlinks cntplink align-items-center fit-content mb-0">
              <li class="nav-item d-flex align-items-center justify-content-center language-selector language-individual-spacing">
                <a href="<?= htmlspecialchars($switchUrl, ENT_QUOTES) ?>" class="nav-link px-0 sottovoce-overlay-lang-link">
                  <?= htmlspecialchars(strtoupper($switchLocale), ENT_QUOTES, 'UTF-8') ?>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    
    <div class="global-home-link-dropdown-box dropdown d-none" aria-hidden="true">
      <a class="dropdown-toggle global-home-link-dropdown global-home-link /en/" id="dropdownMenuButton1" href="/en/"></a>
    </div>
  </nav>
  <div class="sottovoce-scroll-sun" aria-hidden="true">
    <span class="sr-only"><?= htmlspecialchars($ariaScrollSun, ENT_QUOTES, 'UTF-8') ?></span>
    <div class="sottovoce-scroll-sun-track"></div>
    <div id="sottovoceScrollSunDot" class="sottovoce-scroll-sun-dot"></div>
  </div>

  <script>
  document.addEventListener('DOMContentLoaded', function () {
    var collapseEl = document.getElementById('bootscore-navbar-collapsedd');
    var navMain = document.getElementById('nav-main');
    var closeBtn = document.getElementById('sottovoce-overlay-close');
    var sunDot = document.getElementById('sottovoceScrollSunDot');
    var reduceMotion =
      window.matchMedia &&
      window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    var exitMs = reduceMotion ? 0 : 400;

    function sottovoceCloseNavOverlay() {
      if (!collapseEl) return;
      if (typeof jQuery !== 'undefined' && jQuery.fn.collapse) {
        jQuery(collapseEl).collapse('hide');
      } else {
        collapseEl.classList.remove('show');
        collapseEl.classList.remove('sottovoce-overlay-exit');
        if (navMain) {
          navMain.classList.remove('menu-open');
          navMain.classList.remove('individual-home-navbar');
        }
        document.documentElement.classList.remove('overflow-hidden');
        document.body.classList.remove('overflow-hidden');
        var dd = document.getElementById('dropdownMenuButton1');
        if (dd) dd.classList.remove('darkgrey');
      }
    }

    if (closeBtn) {
      closeBtn.addEventListener('click', function (e) {
        e.preventDefault();
        sottovoceCloseNavOverlay();
      });
    }

    if (collapseEl && typeof jQuery !== 'undefined' && jQuery.fn.collapse) {
      var $c = jQuery(collapseEl);
      var navHideAllow = false;

      $c.on('hide.bs.collapse', function (e) {
        if (navHideAllow) {
          navHideAllow = false;
          return;
        }
        e.preventDefault();
        collapseEl.classList.add('sottovoce-overlay-exit');
        window.setTimeout(function () {
          navHideAllow = true;
          $c.collapse('hide');
        }, exitMs);
      });

      $c.on('hidden.bs.collapse', function () {
        collapseEl.classList.remove('sottovoce-overlay-exit');
        if (!navMain) return;
        navMain.classList.remove('menu-open');
        navMain.classList.remove('individual-home-navbar');
        document.documentElement.classList.remove('overflow-hidden');
        document.body.classList.remove('overflow-hidden');
        var dd = document.getElementById('dropdownMenuButton1');
        if (dd) dd.classList.remove('darkgrey');
      });
    }

    function syncScrollSun() {
      if (!sunDot) return;
      var sunWrap = sunDot.parentElement;
      var isMenuVisible = !!(collapseEl && collapseEl.classList.contains('show')) || !!(navMain && navMain.classList.contains('menu-open'));
      if (sunWrap) {
        sunWrap.style.opacity = isMenuVisible ? '0' : '1';
        sunWrap.style.visibility = isMenuVisible ? 'hidden' : 'visible';
      }
      var doc = document.documentElement;
      var maxScroll = Math.max(0, doc.scrollHeight - window.innerHeight);
      var progress = maxScroll > 0 ? (window.scrollY / maxScroll) : 0;
      var trackWidth = Math.max(0, window.innerWidth - sunDot.offsetWidth);
      var x = Math.round(trackWidth * Math.min(1, Math.max(0, progress)));
      sunDot.style.transform = 'translateX(' + x + 'px)';
    }

    window.addEventListener('scroll', syncScrollSun, { passive: true });
    window.addEventListener('resize', syncScrollSun);
    document.addEventListener('click', function () {
      window.setTimeout(syncScrollSun, 0);
    });

    if (collapseEl && typeof MutationObserver === 'function') {
      var observer = new MutationObserver(syncScrollSun);
      observer.observe(collapseEl, { attributes: true, attributeFilter: ['class'] });
    }
    if (navMain && typeof MutationObserver === 'function') {
      var observerNav = new MutationObserver(syncScrollSun);
      observerNav.observe(navMain, { attributes: true, attributeFilter: ['class'] });
    }
    syncScrollSun();
  });
  </script>

</header>