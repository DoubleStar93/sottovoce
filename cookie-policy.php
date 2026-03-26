<?php
declare(strict_types=1);
include __DIR__ . '/config.php';
$site = appEnv('SITE_NAME', 'Sito');
$email = appEnv('COOKIE_EMAIL', 'cookie@example.com');
$updated = appEnv('LAST_UPDATED', date('d/m/Y'));
?>
<!doctype html>
<html lang="it">
<?php include __DIR__ . '/pages/_partials/head.php'; ?>
<body class="page-template page-template-default page">
<?php include __DIR__ . '/pages/_partials/header.php'; ?>
<main class="site-main">
  <section class="subtitle-title-desc pt-5">
    <div class="container text-center">
      <h2 class="display-1-72 font-48-mobile mt-4 text-uppercase title-pink">Cookie policy</h2>
      <p class="body-2 description--text"><strong><?= htmlspecialchars($site) ?></strong> usa cookie tecnici e, previo consenso, cookie analitici. Contatto: <?= htmlspecialchars($email) ?> - Ultimo aggiornamento: <?= htmlspecialchars($updated) ?></p>
    </div>
  </section>
</main>
<?php include __DIR__ . '/pages/_partials/footer.php'; ?>
<?php include __DIR__ . '/pages/_partials/foot.php'; ?>
</body>
</html>
<?php
function envValueCookie(string $key, string $default): string {
  $path = __DIR__ . '/.env';
  if (!is_file($path)) return $default;
  $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
  if (!is_array($lines)) return $default;
  foreach ($lines as $line) {
    if (str_starts_with(trim($line), '#') || !str_contains($line, '=')) continue;
    [$k, $v] = explode('=', $line, 2);
    if (trim($k) === $key) return trim($v, " \t\n\r\0\x0B\"'");
  }
  return $default;
}
$site = envValueCookie('SITE_NAME', 'Sito');
$mail = envValueCookie('COOKIE_MANAGER_EMAIL', 'cookie@example.com');
$updated = envValueCookie('LAST_UPDATED', date('d/m/Y'));
?>
<!doctype html>
<html lang="it">
<head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Cookie policy</title><link rel="stylesheet" href="/site.css"></head>
<body>
<header class="topbar"><div class="nav-wrap"><a class="brand" href="/index.php">Sottovoce</a><button id="menuToggle" class="menu-toggle" type="button">Menu</button><nav id="navLinks" class="nav-links"><a href="/index.php">Home</a><a href="/menu.php">Menu</a><a href="/regolamento.php">Regolamento</a><a href="/tramonto.php">Tramonto</a><a href="/contattaci.php">Contattaci</a><a href="/privacy-policy.php">Privacy policy</a><a href="/cookie-policy.php">Cookie policy</a><span class="lang">EN | IT</span></nav></div></header>
<main class="container">
  <h1>Cookie policy</h1>
  <div class="card">
    <p><strong>Sito:</strong> <?= htmlspecialchars($site) ?></p>
    <p>Usiamo cookie tecnici per funzionalita del sito e, previo consenso, cookie analitici.</p>
    <p>Puoi aggiornare le preferenze cookie dal browser in qualsiasi momento.</p>
    <p><strong>Contatto cookie:</strong> <?= htmlspecialchars($mail) ?></p>
    <p><strong>Ultimo aggiornamento:</strong> <?= htmlspecialchars($updated) ?></p>
  </div>
</main>
<footer class="footer">Sottovoce Ristorante</footer><script>document.getElementById('menuToggle').onclick=()=>document.getElementById('navLinks').classList.toggle('open');</script>
</body></html>
