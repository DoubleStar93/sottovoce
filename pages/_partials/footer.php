<?php
declare(strict_types=1);
require_once dirname(__DIR__, 2) . '/config.php';

$footerAddressLine1 = appEnv('FOOTER_ADDRESS_LINE1', 'Via Ponte Marino, 17');
$footerAddressLine2 = appEnv('FOOTER_ADDRESS_LINE2', '48121 Ravenna RA');
$footerHoursLinkUrl = appEnv('FOOTER_HOURS_LINK_URL', '/index.php#contact-details');
$footerPhone = appEnv('FOOTER_PHONE', '+39 331 125 3525');
$footerEmail = appEnv('FOOTER_EMAIL', 'info@valentinoravenna.com');
$footerPiva = appEnv('FOOTER_PIVA', '');
$currentLocale = appCurrentLocale();
$homeHref = $currentLocale === 'en' ? '/en/' : '/';
$cookieText = [
  'manage' => label('cookie.manage', 'Gestisci cookie'),
  'title' => label('cookie.title', 'Utilizziamo cookie'),
  'description' => label('cookie.description', 'Usiamo cookie necessari per il funzionamento del sito e cookie opzionali per migliorare performance e personalizzazione. Puoi accettare tutti, rifiutare gli opzionali o impostare le preferenze.'),
  'privacy' => label('cookie.privacy', 'Privacy Policy'),
  'policy' => label('cookie.policy', 'Cookie Policy'),
  'acceptAll' => label('cookie.accept_all', 'Accetta tutti'),
  'rejectAll' => label('cookie.reject_all', 'Rifiuta opzionali'),
  'customize' => label('cookie.customize', 'Personalizza'),
  'save' => label('cookie.save', 'Salva preferenze'),
  'close' => label('cookie.close', 'Chiudi'),
  'necessaryTitle' => label('cookie.necessary_title', 'Cookie necessari'),
  'necessaryBody' => label('cookie.necessary_body', 'Sempre attivi. Necessari per navigazione, sicurezza, lingua e flusso prenotazione.'),
  'analyticsTitle' => label('cookie.analytics_title', 'Cookie analitici'),
  'analyticsBody' => label('cookie.analytics_body', 'Ci aiutano a capire il traffico aggregato e migliorare la qualita del sito.'),
  'marketingTitle' => label('cookie.marketing_title', 'Cookie marketing'),
  'marketingBody' => label('cookie.marketing_body', 'Abilitano personalizzazione e misurazione promozionale di terze parti.'),
  'switchOn' => label('cookie.switch_on', 'On'),
];
?>
<footer class="site-footer-minimal">
  <style>
    .site-footer-minimal {
      background: #e3cba5 !important;
      color: #000000 !important;
      padding: 44px 0 26px;
      position: relative;
      z-index: 10;
      margin-bottom: -25px !important;
    }

    body.sottovoce-luxury .site-footer-minimal,
    body.sottovoce-luxury .site-footer-minimal .container,
    body.sottovoce-luxury .site-footer-minimal .row,
    body.sottovoce-luxury .site-footer-minimal [class*="col-"],
    body.sottovoce-luxury .site-footer-minimal .footer-bottom {
      background: #e3cba5 !important;
    }

    body.sottovoce-luxury .site-footer-minimal,
    body.sottovoce-luxury .site-footer-minimal *,
    .site-footer-minimal,
    .site-footer-minimal * {
      color: #000000 !important;
    }

    body.sottovoce-luxury .site-footer-minimal *,
    .site-footer-minimal * {
      background: transparent !important;
    }

    .site-footer-minimal .footer-logo {
      max-width: 205px;
      height: auto;
      display: block;
      margin-bottom: 18px;
    }

    .site-footer-minimal .footer-title {
      font-size: 13px;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      font-weight: 700;
      margin: 0 0 10px;
    }

    .site-footer-minimal p,
    .site-footer-minimal a {
      font-size: 15px;
      line-height: 1.6;
      margin: 0;
      text-decoration: none;
    }

    .site-footer-minimal a:hover {
      text-decoration: underline;
    }

    .site-footer-minimal .footer-col {
      margin-bottom: 24px;
    }

    .site-footer-minimal .footer-bottom {
      margin-top: 8px;
      padding-top: 18px;
      border-top: 1px solid rgba(0, 0, 0, 0.2);
      display: flex;
      flex-wrap: wrap;
      gap: 8px 18px;
      align-items: center;
      justify-content: center;
      text-align: center;
    }

    @media (max-width: 767.98px) {
      .site-footer-minimal {
        padding: 32px 0 20px;
      }
    }
  </style>

  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-4 footer-col">
        <a href="<?= htmlspecialchars($homeHref, ENT_QUOTES) ?>">
          <img src="/img/logo_nero.png" alt="Sottovoce logo" class="footer-logo">
        </a>
      </div>

      <div class="col-12 col-lg-4 footer-col">
        <h3 class="footer-title"><?= htmlspecialchars(label('footer.where', 'Dove siamo'), ENT_QUOTES) ?></h3>
        <p><?= htmlspecialchars($footerAddressLine1, ENT_QUOTES) ?></p>
        <p><?= htmlspecialchars($footerAddressLine2, ENT_QUOTES) ?></p>
      </div>

      <div class="col-12 col-lg-4 footer-col">
        <h3 class="footer-title"><?= htmlspecialchars(label('footer.contacts', 'Contatti'), ENT_QUOTES) ?></h3>
        <p><a href="tel:<?= htmlspecialchars(preg_replace('/\s+/', '', $footerPhone), ENT_QUOTES) ?>"><?= htmlspecialchars($footerPhone, ENT_QUOTES) ?></a></p>
        <p><a href="mailto:<?= htmlspecialchars($footerEmail, ENT_QUOTES) ?>"><?= htmlspecialchars($footerEmail, ENT_QUOTES) ?></a></p>
      </div>
    </div>

    <div class="footer-bottom">
      <span><?= htmlspecialchars(label('footer.vat', 'P.IVA'), ENT_QUOTES) ?> <?= htmlspecialchars($footerPiva, ENT_QUOTES) ?></span>
      <a href="/privacy-policy.php"><?= htmlspecialchars(label('footer.privacy', 'Privacy Policy'), ENT_QUOTES) ?></a>
      <a href="/cookie-policy.php"><?= htmlspecialchars(label('footer.cookies', 'Cookie Policy'), ENT_QUOTES) ?></a>
      <button type="button" class="sottovoce-cookie-manage-link" data-open-cookie-preferences="true"><?= htmlspecialchars($cookieText['manage'], ENT_QUOTES) ?></button>
    </div>
  </div>
</footer>

<section class="sottovoce-cookie-banner" id="sottovoce-cookie-banner" hidden>
  <div class="sottovoce-cookie-banner__content">
    <h3><?= htmlspecialchars($cookieText['title'], ENT_QUOTES) ?></h3>
    <p>
      <?= htmlspecialchars($cookieText['description'], ENT_QUOTES) ?>
      <a href="/privacy-policy.php"><?= htmlspecialchars($cookieText['privacy'], ENT_QUOTES) ?></a> ·
      <a href="/cookie-policy.php"><?= htmlspecialchars($cookieText['policy'], ENT_QUOTES) ?></a>
    </p>
    <div class="sottovoce-cookie-banner__actions">
      <button type="button" class="secondary-btn" data-cookie-action="reject-all"><?= htmlspecialchars($cookieText['rejectAll'], ENT_QUOTES) ?></button>
      <button type="button" class="secondary-btn" data-cookie-action="customize"><?= htmlspecialchars($cookieText['customize'], ENT_QUOTES) ?></button>
      <button type="button" class="primary-btn" data-cookie-action="accept-all"><?= htmlspecialchars($cookieText['acceptAll'], ENT_QUOTES) ?></button>
    </div>
  </div>
</section>

<section class="sottovoce-cookie-panel" id="sottovoce-cookie-panel" hidden>
  <div class="sottovoce-cookie-panel__box" role="dialog" aria-modal="true" aria-labelledby="sottovoce-cookie-panel-title">
    <button type="button" class="sottovoce-cookie-panel__close" data-cookie-action="close-panel" aria-label="<?= htmlspecialchars($cookieText['close'], ENT_QUOTES) ?>">×</button>
    <h3 id="sottovoce-cookie-panel-title"><?= htmlspecialchars($cookieText['manage'], ENT_QUOTES) ?></h3>
    <div class="sottovoce-cookie-row">
      <div>
        <strong><?= htmlspecialchars($cookieText['necessaryTitle'], ENT_QUOTES) ?></strong>
        <p><?= htmlspecialchars($cookieText['necessaryBody'], ENT_QUOTES) ?></p>
      </div>
      <label class="sottovoce-cookie-switch">
        <input type="checkbox" checked disabled>
        <span><?= htmlspecialchars($cookieText['switchOn'], ENT_QUOTES) ?></span>
      </label>
    </div>
    <div class="sottovoce-cookie-row">
      <div>
        <strong><?= htmlspecialchars($cookieText['analyticsTitle'], ENT_QUOTES) ?></strong>
        <p><?= htmlspecialchars($cookieText['analyticsBody'], ENT_QUOTES) ?></p>
      </div>
      <label class="sottovoce-cookie-switch">
        <input type="checkbox" id="sottovoce-cookie-analytics">
        <span><?= htmlspecialchars($cookieText['switchOn'], ENT_QUOTES) ?></span>
      </label>
    </div>
    <div class="sottovoce-cookie-row">
      <div>
        <strong><?= htmlspecialchars($cookieText['marketingTitle'], ENT_QUOTES) ?></strong>
        <p><?= htmlspecialchars($cookieText['marketingBody'], ENT_QUOTES) ?></p>
      </div>
      <label class="sottovoce-cookie-switch">
        <input type="checkbox" id="sottovoce-cookie-marketing">
        <span><?= htmlspecialchars($cookieText['switchOn'], ENT_QUOTES) ?></span>
      </label>
    </div>
    <div class="sottovoce-cookie-panel__actions">
      <button type="button" class="secondary-btn" data-cookie-action="reject-all"><?= htmlspecialchars($cookieText['rejectAll'], ENT_QUOTES) ?></button>
      <button type="button" class="primary-btn" data-cookie-action="save-preferences"><?= htmlspecialchars($cookieText['save'], ENT_QUOTES) ?></button>
    </div>
  </div>
</section>

<script>
  (function () {
    var STORAGE_KEY = 'sottovoce_cookie_consent_v1';
    var VERSION = 1;
    var banner = document.getElementById('sottovoce-cookie-banner');
    var panel = document.getElementById('sottovoce-cookie-panel');
    var analyticsToggle = document.getElementById('sottovoce-cookie-analytics');
    var marketingToggle = document.getElementById('sottovoce-cookie-marketing');

    function parseStored() {
      try {
        var raw = window.localStorage.getItem(STORAGE_KEY);
        if (!raw) {
          return null;
        }
        var parsed = JSON.parse(raw);
        if (!parsed || typeof parsed !== 'object') {
          return null;
        }
        return parsed;
      } catch (err) {
        return null;
      }
    }

    function applyConsent(consent) {
      var root = document.documentElement;
      var analytics = !!(consent && consent.analytics);
      var marketing = !!(consent && consent.marketing);
      root.setAttribute('data-consent-analytics', analytics ? 'granted' : 'denied');
      root.setAttribute('data-consent-marketing', marketing ? 'granted' : 'denied');
      window.dispatchEvent(new CustomEvent('sottovoce:consent-updated', { detail: consent || {} }));
    }

    function saveConsent(next) {
      var payload = {
        version: VERSION,
        necessary: true,
        analytics: !!next.analytics,
        marketing: !!next.marketing,
        timestamp: new Date().toISOString()
      };
      window.localStorage.setItem(STORAGE_KEY, JSON.stringify(payload));
      applyConsent(payload);
      closeBanner();
      closePanel();
      return payload;
    }

    function openBanner() {
      if (!banner) {
        return;
      }
      banner.hidden = false;
      banner.classList.add('is-visible');
    }

    function closeBanner() {
      if (!banner) {
        return;
      }
      banner.classList.remove('is-visible');
      banner.hidden = true;
    }

    function openPanel() {
      if (!panel) {
        return;
      }
      var current = parseStored();
      analyticsToggle.checked = !!(current && current.analytics);
      marketingToggle.checked = !!(current && current.marketing);
      panel.hidden = false;
      panel.classList.add('is-visible');
    }

    function closePanel() {
      if (!panel) {
        return;
      }
      panel.classList.remove('is-visible');
      panel.hidden = true;
    }

    function handleAction(action) {
      if (action === 'accept-all') {
        saveConsent({ analytics: true, marketing: true });
        return;
      }
      if (action === 'reject-all') {
        saveConsent({ analytics: false, marketing: false });
        return;
      }
      if (action === 'customize') {
        closeBanner();
        openPanel();
        return;
      }
      if (action === 'save-preferences') {
        saveConsent({ analytics: analyticsToggle.checked, marketing: marketingToggle.checked });
        return;
      }
      if (action === 'close-panel') {
        closePanel();
      }
    }

    document.addEventListener('click', function (event) {
      var actionBtn = event.target.closest('[data-cookie-action]');
      if (actionBtn) {
        handleAction(actionBtn.getAttribute('data-cookie-action'));
        return;
      }

      var openBtn = event.target.closest('[data-open-cookie-preferences]');
      if (openBtn) {
        event.preventDefault();
        closeBanner();
        openPanel();
      }
    });

    var existing = parseStored();
    if (!existing) {
      openBanner();
      applyConsent({ analytics: false, marketing: false });
    } else {
      applyConsent(existing);
    }

    window.SottovoceConsent = {
      get: parseStored,
      openPreferences: openPanel,
      acceptAll: function () { return saveConsent({ analytics: true, marketing: true }); },
      rejectOptional: function () { return saveConsent({ analytics: false, marketing: false }); }
    };
  })();
</script>