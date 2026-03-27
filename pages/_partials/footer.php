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
    </div>
  </div>
</footer>