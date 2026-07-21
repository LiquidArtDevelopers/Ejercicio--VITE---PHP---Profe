<!doctype html>
<html lang="eu">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= e(app_url('/eu/zerbitzuak/altzarien-zaharberritzea')) ?>">
    <link rel="alternate" hreflang="es" href="<?= e(app_url('/es/servicios/restaurador-muebles')) ?>">
    <link rel="alternate" hreflang="eu" href="<?= e(app_url('/eu/zerbitzuak/altzarien-zaharberritzea')) ?>">
    <link rel="alternate" hreflang="x-default" href="<?= e(app_url('/es/servicios/restaurador-muebles')) ?>">
    <title>Altzarien zaharberritzea Donostialdean | Patxi</title>
    <meta name="description" content="Enkarguzko altzari-zaharberritzea Donostialdean eta Orio inguruan. Berreskuratu egurrezko piezak, haien egoera, erabilera eta izaera baloratuz.">
    <meta name="robots" content="index, follow">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="eu_ES">
    <meta property="og:site_name" content="Patxi">
    <meta property="og:title" content="Altzarien zaharberritzea Donostialdean | Patxi">
    <meta property="og:description" content="Gorde nahi dituzun altzari eta egurrezko piezak enkarguz berreskuratzea.">
    <meta property="og:url" content="<?= e(app_url('/eu/zerbitzuak/altzarien-zaharberritzea')) ?>">
    <meta property="og:image" content="<?= e(app_url('assets/img/views/reparacion-mueble-taller-1500.avif')) ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Altzarien zaharberritzea Donostialdean | Patxi">
    <meta name="twitter:description" content="Kontsultatu zure altzariak egonkortasuna, erabilera eta presentzia berreskura ditzakeen.">
    <meta name="twitter:image" content="<?= e(app_url('assets/img/views/reparacion-mueble-taller-1500.avif')) ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
  </head>
  <body>
    <?php require app_path('includes/eu/nav.php'); ?>

    <header class="header02">
      <img
        class="header02__media"
        src="<?= asset('assets/img/views/reparacion-mueble-taller-1500.avif') ?>"
        srcset="<?= asset('assets/img/views/reparacion-mueble-taller-900.avif') ?> 900w, <?= asset('assets/img/views/reparacion-mueble-taller-1500.avif') ?> 1500w, <?= asset('assets/img/views/reparacion-mueble-taller-2560.avif') ?> 2560w"
        sizes="100vw"
        width="2560"
        height="1707"
        alt="Profesional bat tailerrean egurrezko altzari baten egitura konpontzen"
        title="Egurrezko altzari baten eskuzko konponketa-lana"
        fetchpriority="high"
        decoding="async"
      >
      <div class="header02__content">
        <p class="header02__eyebrow">Enkarguzko zerbitzua · Altzariak eta egurrezko piezak</p>
        <h1 class="header02__title">Altzarien zaharberritzea Donostialdean</h1>
        <p class="header02__text">Gorde nahi duzun pieza bat berreskuratzeko, haren erabilera hobetzeko eta esku-hartzea erabaki aurretik bereizgarri dituen ezaugarriak zaintzeko.</p>
        <a href="/eu/kontaktua" class="boton" title="Altzari baten zaharberritzea kontsultatu">Nire altzaria kontsultatu</a>
      </div>
    </header>

    <main>
      <section aria-labelledby="restauracion-intro-eu">
        <article class="art14">
          <div class="content">
            <div class="h2Especial">
              <span aria-hidden="true"></span>
              <h2 id="restauracion-intro-eu">Pieza bere izaera ezabatu gabe berreskuratzea</h2>
            </div>
            <p><strong>Donostialdean altzariak zaharberritzeko zerbitzua</strong> Gipuzkoako eremu honetako enkargu partikularretarako eta Orio bezalako inguruko herrietarako pentsatuta dago. Esku hartu aurretik, Patxik egoera ikusgarria, egonkortasuna, aurreko akabera eta piezak berriro izango duen erabilera baloratzen ditu.</p>
            <p>Zaharberritzeak ez du esan nahi altzari guztiei itxura bera ematea. Oinordetzan jasotako pieza batek, altzari zahar batek edo higatutako eguneroko elementu batek erabaki desberdinak behar dituzte. Helburua esku-hartzearen norainokoa adostea da, haren presentzia eta erabilgarritasuna hobetzeko, gorde nahi duzuna ezabatu gabe.</p>
            <img
              src="<?= asset('assets/img/views/mueble-madera-restaurado-1500.avif') ?>"
              srcset="<?= asset('assets/img/views/mueble-madera-restaurado-900.avif') ?> 900w, <?= asset('assets/img/views/mueble-madera-restaurado-1500.avif') ?> 1500w"
              sizes="(max-width: 800px) 90vw, 65vw"
              width="1500"
              height="1000"
              alt="Zaina eta burdineria agerian dituen egurrezko komoda baten aurrealdea"
              title="Egurrezko altzari baten izaera eta akaberaren xehetasuna"
              loading="lazy"
              decoding="async"
            >
          </div>
        </article>
      </section>

      <section aria-labelledby="restauracion-piezas-eu">
        <div class="h2Especial">
          <span aria-hidden="true"></span>
          <h2 id="restauracion-piezas-eu">Altzari bat zaharberritu aurretik zer baloratzen den</h2>
        </div>
        <article class="art09">
          <h3>Esku-hartzea piezaren araberakoa da, ez soilik haren itxuraren araberakoa</h3>
          <div class="art09-content">
            <div class="contenedor-lista">
              <h4>Egoera eta eraikuntza</h4>
              <ul>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Egonkortasun orokorra eta berrikusi beharreko loturak.</span></li>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Kolpeak, urradurak, higadura eta aurreko konponketen arrastoak.</span></li>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Ikus daitekeen akabera mota eta gainazalaren erantzuna.</span></li>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Altzariaren izaeraren parte diren elementuak.</span></li>
              </ul>
            </div>
            <div class="contenedor-lista">
              <h4>Erabilera eta espero den emaitza</h4>
              <ul>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Eguneroko erabilera edo batez ere erabilera apaingarria izango duen.</span></li>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Zein marka mantendu nahi dituzun eta zein zuzendu nahi dituzun.</span></li>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Zure espazioan egokitzen jarraitzeko gorde behar duen itxura.</span></li>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Pieza aztertu ondoren zentzuzkoa den lanaren irismena.</span></li>
              </ul>
            </div>
          </div>
        </article>
      </section>

      <section aria-labelledby="restauracion-proceso-eu">
        <div class="h2Especial">
          <span aria-hidden="true"></span>
          <h2 id="restauracion-proceso-eu">Diagnostikotik abiatuta zehaztutako prozesua</h2>
        </div>

        <article class="art16">
          <div>
            <h3>1. Erabileraren historia ezagutu eta egoera aztertu</h3>
            <p>Lehen elkarrizketak altzaria zergatik gorde nahi duzun, non erabiltzen den eta zer arazo ikusi dituzun jakiteko balio du. Ondoren, gainazalak, egitura eta pieza mugikorrak edo loturak berrikusten dira.</p>
            <p>Diagnostiko horrek bideragarritasuna orientatzen du eta multzoaren beharrak ulertu aurretik akabera erabakitzea saihesten du.</p>
          </div>
          <div>
            <img
              src="<?= asset('assets/img/views/reparacion-mueble-taller-1500.avif') ?>"
              srcset="<?= asset('assets/img/views/reparacion-mueble-taller-900.avif') ?> 900w, <?= asset('assets/img/views/reparacion-mueble-taller-1500.avif') ?> 1500w"
              sizes="(max-width: 799px) 100vw, 40vw"
              width="1500"
              height="1000"
              alt="Altzari baten oinarria eta loturak eskuz berrikusten"
              title="Egurrezko altzari baten egituraren diagnostikoa"
              loading="lazy"
              decoding="async"
            >
          </div>
        </article>

        <article class="art16 invert">
          <div>
            <h3>2. Egonkortu eta gainazala landu</h3>
            <p>Egoerak hala eskatzen badu, lehenik alderdi funtzionala planteatzen da: doikuntzak, loturak edo piezarekin bateragarriak diren konponketa txikiak. Ondoren, gainazala aurreko akaberak eskatzen duen arretarekin lantzen da.</p>
            <p>Fase zehatzak altzari horretarako erabakitzen dira; ez da sekuentzia itxi bat aplikatzen aurrez aztertu gabe.</p>
          </div>
          <div>
            <img
              src="<?= asset('assets/img/views/tratamiento-madera-1500.avif') ?>"
              srcset="<?= asset('assets/img/views/tratamiento-madera-900.avif') ?> 900w, <?= asset('assets/img/views/tratamiento-madera-1500.avif') ?> 1500w"
              sizes="(max-width: 799px) 100vw, 40vw"
              width="1500"
              height="2000"
              alt="Esku bat egurrezko taula baten gainean tratamendua zapi batez zabaltzen"
              title="Egurraren gainean tratamendua eskuz aplikatzen"
              loading="lazy"
              decoding="async"
            >
          </div>
        </article>

        <article class="art16">
          <div>
            <h3>3. Akabera piezak izango duen erabilerara egokitu</h3>
            <p>Azken itxura funtzioarekin batera baloratzen da. Eguneroko erabilerako altzari batek eta batez ere apaingarria den pieza batek lehentasun desberdinak izan ditzakete erresistentzian, ukimenean eta presentzia bisualean.</p>
            <p>Hasi aurretik, zuretzat zein ezaugarri diren garrantzitsuak eta altzaria bere lekura itzultzean zer aldaketa ikusi nahi duzun azaldu ahal izango duzu.</p>
            <a href="/eu/kontaktua" class="boton" title="Altzari baten egoera Patxiri azaldu">Balorazioa eskatu</a>
          </div>
          <div>
            <img
              src="<?= asset('assets/img/views/acabado-mueble-taller-1500.avif') ?>"
              srcset="<?= asset('assets/img/views/acabado-mueble-taller-900.avif') ?> 900w, <?= asset('assets/img/views/acabado-mueble-taller-1500.avif') ?> 1500w"
              sizes="(max-width: 799px) 100vw, 40vw"
              width="1500"
              height="1000"
              alt="Profesional bat amaitutako egurrezko gainazala eskuz egiaztatzen"
              title="Altzari baten ukimenaren eta akaberaren berrikuspena"
              loading="lazy"
              decoding="async"
            >
          </div>
        </article>
      </section>

      <section aria-labelledby="restauracion-decision-eu">
        <div class="h2Especial">
          <span aria-hidden="true"></span>
          <h2 id="restauracion-decision-eu">Merezi al du zure altzaria zaharberritzea?</h2>
        </div>
        <article class="art09">
          <h3>Erantzuna zuretzat duen balioaren eta egoeraren araberakoa da</h3>
          <div class="art09-content">
            <div class="contenedor-lista">
              <h4>Balorazioa eskatzeko arrazoiak</h4>
              <ul>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Piezak balio pertsonala edo familiarra du, edo zure espazioaren parte da.</span></li>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Neurriak, eraikuntza edo diseinua oraindik erabilgarriak zaizkizu.</span></li>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Zein kalte zuzendu daitezkeen jakin nahi duzu, izaera aldatu gabe.</span></li>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Benetako egoera aztertu ondoren erabaki nahi duzu.</span></li>
              </ul>
            </div>
            <div class="contenedor-lista">
              <h4>Lehen kontsultan laguntzen duena</h4>
              <ul>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Altzari mota eta gutxi gorabeherako neurriak.</span></li>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Hauteman dituzun kalteak, lasaierak edo higadura.</span></li>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Pieza zein herritan dagoen.</span></li>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Berreskuratu nahi dituzun erabilera eta itxura.</span></li>
              </ul>
            </div>
          </div>
        </article>
      </section>
    </main>

    <?php require app_path('includes/eu/footer.php'); ?>
  </body>
</html>
