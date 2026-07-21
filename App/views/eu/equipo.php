<!doctype html>
<html lang="eu">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= e(app_url('/eu/nortzuk-gara')) ?>">
    <link rel="alternate" hreflang="es" href="<?= e(app_url('/es/quienes-somos')) ?>">
    <link rel="alternate" hreflang="eu" href="<?= e(app_url('/eu/nortzuk-gara')) ?>">
    <link rel="alternate" hreflang="x-default" href="<?= e(app_url('/es/quienes-somos')) ?>">
    <title>Patxi Usurbilen eta Lasarte-Orian | Pintura eta zaharberritzea</title>
    <meta name="description" content="Ezagutu Patxik nola planteatzen dituen pintura eta zaharberritze lanak Donostialdeko, Usurbilgo eta Lasarte-Oriako etxebizitza, komunitate eta negozioetan.">
    <meta name="robots" content="index, follow">
    <meta property="og:type" content="profile">
    <meta property="og:locale" content="eu_ES">
    <meta property="og:site_name" content="Patxi">
    <meta property="og:title" content="Patxi Usurbilen eta Lasarte-Orian | Pintura eta zaharberritzea">
    <meta property="og:description" content="Etxebizitza, komunitate eta negozio txikietarako zerbitzuak, zuzeneko tratuarekin.">
    <meta property="og:url" content="<?= e(app_url('/eu/nortzuk-gara')) ?>">
    <meta property="og:image" content="<?= e(app_url('assets/img/views/pintura-brocha-puerta-1500.avif')) ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Patxi | Sektorekako zerbitzuak Donostialdean">
    <meta name="twitter:description" content="Partikular, komunitate eta negozioetarako pintura eta zaharberritzea.">
    <meta name="twitter:image" content="<?= e(app_url('assets/img/views/pintura-brocha-puerta-1500.avif')) ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
  </head>
  <body>
    <?php require app_path('includes/eu/nav.php'); ?>

    <header class="header02">
      <img
        class="header02__media"
        src="<?= asset('assets/img/views/pintura-brocha-puerta-1500.avif') ?>"
        srcset="<?= asset('assets/img/views/pintura-brocha-puerta-900.avif') ?> 900w, <?= asset('assets/img/views/pintura-brocha-puerta-1500.avif') ?> 1500w, <?= asset('assets/img/views/pintura-brocha-puerta-2560.avif') ?> 2560w"
        sizes="100vw"
        width="2560"
        height="1707"
        alt="Esku bat brotxa zehaztasunez ate baten markoan gidatzen"
        title="Eskuz egindako lanbide baten xehetasuna"
        fetchpriority="high"
        decoding="async"
      >
      <div class="header02__content">
        <p class="header02__eyebrow">Nor naiz · Sektorekako zerbitzuak Donostialdean</p>
        <h1 class="header02__title">Patxi: etxebizitza, komunitate eta negozioetarako tratu zuzena</h1>
        <p class="header02__text">Pertsona bakarra espazio edo altzari bakoitzak zer behar duen entzuteko eta pintura nahiz zaharberritze lana hasieratik amaierara bideratzeko.</p>
        <a href="/eu/kontaktua" class="boton" title="Patxirekin proiektu bati buruz hitz egin">Azaldu zure proiektua</a>
      </div>
    </header>

    <main>
      <section aria-labelledby="equipo-intro-eu">
        <article class="art14">
          <div class="content">
            <div class="h2Especial">
              <span aria-hidden="true"></span>
              <h2 id="equipo-intro-eu">Donostialdeko partikularrentzako zuzeneko arreta</h2>
            </div>
            <h3>Etxebizitza eta eguneroko altzarietarako pintura eta zaharberritzea</h3>
            <p>Partikularrentzako zerbitzua behar zehatz batetik abiatzen da: gela bat berritzea, etxebizitza eguneratzea edo etxean tokia izaten jarraitzen duen altzaria berreskuratzea. Patxik zer aldatu nahi duzun entzun, abiapuntua berrikusi eta aukerak bitartekaririk gabe azaltzen ditu.</p>
            <p>Euskarri eta pieza guztiek ez dute lan bera behar. Enkargua planteatu aurretik eguneroko erabilera, begi-bistako egoera eta bilatzen duzun emaitza hartzen dira kontuan, esku-hartze ulergarria mugatzeko.</p>
            <img
              src="<?= asset('assets/img/views/pisos-y-viviendas-particulares-1200.avif') ?>"
              sizes="(max-width: 800px) 90vw, 55vw"
              width="1200"
              height="865"
              alt="Urdin tonuz margotutako hormak dituen etxebizitza baten barrualdea"
              title="Donostialdeko pisu eta etxebizitzetarako barruko pintura"
              loading="lazy"
              decoding="async"
            >
          </div>
        </article>
      </section>

      <section aria-labelledby="equipo-metodo-eu">
        <div class="h2Especial">
          <span aria-hidden="true"></span>
          <h2 id="equipo-metodo-eu">Usurbilgo komunitateetarako lanak</h2>
        </div>
        <article class="art09">
          <h3>Atari, eremu komun eta partekatutako elementuetarako pintura eta berreskuratzea</h3>
          <div class="art09-content">
            <div class="contenedor-lista">
              <h4>Komunitatea berrikustean</h4>
              <ul>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Partekatutako horma, sabai, ate eta igarobideen egoera aztertzea.</span></li>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Prestaketa behar duten urradurak, konponketa txikiak eta euskarriak hautematea.</span></li>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Gorde beharreko egurrezko elementuak edo komunitateko altzariak baloratzea.</span></li>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Espazio bakoitzaren erabilera eta joan-etorriak kontuan hartuta lehentasunak adostea.</span></li>
              </ul>
            </div>
            <div class="contenedor-lista">
              <h4>Esku-hartzea antolatzean</h4>
              <ul>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Faseak eraikinaren erabilerarekin bateragarriak izan daitezen ordenatzea.</span></li>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Gainazal bakoitza prestatzea adostutako akabera aplikatu aurretik.</span></li>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Enkarguko erabakiak argitzeko solaskide zuzena mantentzea.</span></li>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Emaitza ondorengo mantentze-lana kontuan hartuta berrikustea.</span></li>
              </ul>
            </div>
          </div>
        </article>
      </section>

      <section aria-labelledby="equipo-oficios-eu">
        <div class="h2Especial">
          <span aria-hidden="true"></span>
          <h2 id="equipo-oficios-eu">Lasarte-Oriako etxebizitza eta negozioetarako zerbitzuak</h2>
        </div>

        <article class="art16">
          <div>
            <h3>Lasarte-Oriako pisu, lokal eta bulegoetarako barruko pintura</h3>
            <p>Etxebizitza batean, pinturak giroa eguneratzen eta kolorea gela bakoitzaren erabilerara egokitzen laguntzen du. Lokal eta bulegoetan ere espazioaren irudia berritzeko balio du, eguneroko jarduera kontuan hartuta.</p>
            <p>Prestaketa hormak, sabaiak eta enkarguaren parte diren gainerako gainazalak berrikusi ondoren zehazten da.</p>
            <a href="/eu/zerbitzuak/margolaria" class="boton" title="Etxebizitza eta negozioetarako pintura-zerbitzua ezagutu">Pintura-zerbitzua ikusi</a>
          </div>
          <div>
            <img
              src="<?= asset('assets/img/views/locales-comerciales-oficinas-1200.avif') ?>"
              sizes="(max-width: 799px) 100vw, 40vw"
              width="1200"
              height="808"
              alt="Erabilera profesionalerako prestatutako bulego argitsua"
              title="Lasarte-Oriako lokal komertzial eta bulegoetarako pintura"
              loading="lazy"
              decoding="async"
            >
          </div>
        </article>

        <article class="art16 invert">
          <div>
            <h3>Etxeko altzarien eta merkataritza-altzarien zaharberritzea</h3>
            <p>Familiako komoda batek, eguneroko mahai batek edo negozio batean integratutako pieza batek doikuntzak, konponketa eta akaberaren berrikuspena behar izan ditzake. Balorazioa benetako egoeratik eta izango duen erabileratik abiatzen da.</p>
            <p>Fitxa espezifikoak irismena nola erabakitzen den azaltzen du, altzariari nortasuna ematen dioten ezaugarriak ezabatu gabe.</p>
            <a href="/eu/zerbitzuak/altzarien-zaharberritzea" class="boton" title="Etxe eta negozioetarako altzari-zaharberritzea ezagutu">Altzarien zaharberritzea ikusi</a>
          </div>
          <div>
            <img
              src="<?= asset('assets/img/views/muebles-vivienda-1500.avif') ?>"
              srcset="<?= asset('assets/img/views/muebles-vivienda-900.avif') ?> 900w, <?= asset('assets/img/views/muebles-vivienda-1500.avif') ?> 1500w"
              sizes="(max-width: 799px) 100vw, 40vw"
              width="1500"
              height="1000"
              alt="Zaharberritutako egurrezko arasak etxebizitza batean kokatuta"
              title="Etxe eta negozio txikietarako altzari-zaharberritzea"
              loading="lazy"
              decoding="async"
            >
          </div>
        </article>
      </section>
    </main>

    <?php require app_path('includes/eu/footer.php'); ?>
  </body>
</html>
