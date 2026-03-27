<?php
declare(strict_types=1);
require_once __DIR__ . '/config.php';

$locale = appCurrentLocale();

$footerPhone = appEnv('FOOTER_PHONE', '+39 331 125 3525');
$footerEmail = appEnv('FOOTER_EMAIL', 'info@valentinoravenna.com');
$footerAddressLine1 = appEnv('FOOTER_ADDRESS_LINE1', 'Via Ponte Marino, 17');
$footerAddressLine2 = appEnv('FOOTER_ADDRESS_LINE2', '48121 Ravenna RA');
?>
<!doctype html>
<html lang="<?= htmlspecialchars($locale, ENT_QUOTES) ?>">
<?php include __DIR__ . '/pages/_partials/head.php'; ?>
<body class="page-template page-template-default page sottovoce-luxury">
<div id="page" class="site">
<?php include __DIR__ . '/pages/_partials/header.php'; ?>
<main class="site-main">
  <section class="sottovoce-legal-page">
    <div class="container">
      <h2 class="display-1-72 font-48-mobile mb-4"><?= htmlspecialchars(label('privacy.title', 'Informativa Privacy'), ENT_QUOTES) ?></h2>
      <p class="body-2">
        <?= htmlspecialchars(label('privacy.intro', 'La presente informativa descrive come vengono trattati i dati personali quando navighi su questo sito, richiedi informazioni o invii una richiesta di prenotazione. Il trattamento e svolto nel rispetto del Regolamento (UE) 2016/679 (GDPR) e della normativa italiana applicabile.'), ENT_QUOTES) ?>
      </p>

      <h3 class="mt-4 mb-2"><?= htmlspecialchars(label('privacy.section1.title', '1) Titolare del trattamento'), ENT_QUOTES) ?></h3>
      <p class="body-2">
        <?= htmlspecialchars(label('privacy.section1.body', 'Il titolare del trattamento e il soggetto giuridico che gestisce il locale Sottovoce a Ravenna.'), ENT_QUOTES) ?>
        <?= htmlspecialchars(label('privacy.section1.contacts', ' Recapiti: '), ENT_QUOTES) ?>
        <a href="mailto:<?= htmlspecialchars($footerEmail, ENT_QUOTES) ?>"><?= htmlspecialchars($footerEmail, ENT_QUOTES) ?></a>
        <?= htmlspecialchars(label('privacy.separator', ' - '), ENT_QUOTES) ?>
        <a href="tel:<?= htmlspecialchars(preg_replace('/\s+/', '', $footerPhone), ENT_QUOTES) ?>"><?= htmlspecialchars($footerPhone, ENT_QUOTES) ?></a>.
      </p>

      <h3 class="mt-4 mb-2"><?= htmlspecialchars(label('privacy.section2.title', '2) Categorie di dati trattati'), ENT_QUOTES) ?></h3>
      <p class="body-2">
        <?= htmlspecialchars(label('privacy.section2.body', 'Possiamo trattare: dati identificativi e di contatto forniti dall\'utente (nome, email, telefono), dati legati alle prenotazioni (data, fascia oraria, note o richieste), dati tecnici di navigazione (indirizzo IP, user agent, log) e dati relativi alle preferenze espresse per il consenso cookie.'), ENT_QUOTES) ?>
      </p>

      <h3 class="mt-4 mb-2"><?= htmlspecialchars(label('privacy.section3.title', '3) Finalita e basi giuridiche'), ENT_QUOTES) ?></h3>
      <p class="body-2">
        <?= htmlspecialchars(label('privacy.section3.body', 'I dati personali sono trattati per: (a) gestire richieste di informazioni e richieste di prenotazione, sulla base di misure precontrattuali o contrattuali; (b) adempiere ad obblighi di legge, sulla base dell\'obbligo legale; (c) tutelare i diritti del titolare, sulla base del legittimo interesse; (d) trattare eventuali cookie analitici/marketing opzionali solo in presenza di consenso.'), ENT_QUOTES) ?>
      </p>

      <h3 class="mt-4 mb-2"><?= htmlspecialchars(label('privacy.section4.title', '4) Natura del conferimento'), ENT_QUOTES) ?></h3>
      <p class="body-2">
        <?= htmlspecialchars(label('privacy.section4.body', 'Il conferimento dei dati contrassegnati come necessari nei moduli e indispensabile per gestire la richiesta. Il mancato conferimento puo impedire l\'erogazione del servizio richiesto. I campi opzionali restano facoltativi.'), ENT_QUOTES) ?>
      </p>

      <h3 class="mt-4 mb-2"><?= htmlspecialchars(label('privacy.section5.title', '5) Modalita di trattamento e tempi di conservazione'), ENT_QUOTES) ?></h3>
      <p class="body-2">
        <?= htmlspecialchars(label('privacy.section5.body', 'I dati sono trattati con strumenti elettronici e, ove necessario, cartacei, secondo i principi di minimizzazione e sicurezza. I dati sono conservati per il tempo strettamente necessario al raggiungimento delle finalita indicate, all\'adempimento degli obblighi di legge e alla tutela dei diritti del titolare. I tempi di conservazione dei cookie sono indicati nella Cookie Policy.'), ENT_QUOTES) ?>
      </p>

      <h3 class="mt-4 mb-2"><?= htmlspecialchars(label('privacy.section6.title', '6) Destinatari dei dati'), ENT_QUOTES) ?></h3>
      <p class="body-2">
        <?= htmlspecialchars(label('privacy.section6.body', 'I dati possono essere trattati da personale autorizzato e da fornitori di servizi che operano in qualita di responsabili del trattamento (es. hosting, manutenzione IT, fornitori tecnici di prenotazione), con adeguate garanzie contrattuali. I dati non sono diffusi al pubblico, salvo obblighi normativi.'), ENT_QUOTES) ?>
      </p>

      <h3 class="mt-4 mb-2"><?= htmlspecialchars(label('privacy.section7.title', '7) Trasferimenti extra UE'), ENT_QUOTES) ?></h3>
      <p class="body-2">
        <?= htmlspecialchars(label('privacy.section7.body', 'Qualora servizi di terze parti comportino trasferimenti di dati al di fuori dello SEE, tali trasferimenti avvengono nel rispetto delle regole GDPR (es. decisioni di adeguatezza o clausole contrattuali standard).'), ENT_QUOTES) ?>
      </p>

      <h3 class="mt-4 mb-2"><?= htmlspecialchars(label('privacy.section8.title', '8) Diritti dell\'interessato'), ENT_QUOTES) ?></h3>
      <p class="body-2">
        <?= htmlspecialchars(label('privacy.section8.body', 'Puoi esercitare i diritti di accesso, rettifica, cancellazione, limitazione, portabilita e opposizione nei casi previsti, nonche revocare il consenso in qualsiasi momento senza pregiudicare la liceita del trattamento precedente. Resta salvo il diritto di proporre reclamo al Garante per la Protezione dei Dati Personali.'), ENT_QUOTES) ?>
      </p>

      <h3 class="mt-4 mb-2"><?= htmlspecialchars(label('privacy.section9.title', '9) Contatti e aggiornamenti'), ENT_QUOTES) ?></h3>
      <p class="body-2">
        <?= htmlspecialchars(label('privacy.section9.contact_prefix', 'Per richieste privacy: '), ENT_QUOTES) ?>
        <a href="mailto:<?= htmlspecialchars($footerEmail, ENT_QUOTES) ?>"><?= htmlspecialchars($footerEmail, ENT_QUOTES) ?></a>.
        <?= htmlspecialchars(label('privacy.section9.address_prefix', ' Sede/indirizzo: '), ENT_QUOTES) ?>
        <?= htmlspecialchars($footerAddressLine1, ENT_QUOTES) ?>, <?= htmlspecialchars($footerAddressLine2, ENT_QUOTES) ?>.
        <?= htmlspecialchars(label('privacy.section9.body_suffix', ' La presente informativa puo essere aggiornata in funzione di evoluzioni normative o dei servizi offerti.'), ENT_QUOTES) ?>
      </p>
    </div>
  </section>
</main>
<?php include __DIR__ . '/pages/_partials/footer.php'; ?>
</div>
<?php include __DIR__ . '/pages/_partials/foot.php'; ?>
</body>
</html>
