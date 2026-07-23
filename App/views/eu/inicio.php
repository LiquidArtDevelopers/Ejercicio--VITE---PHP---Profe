<!doctype html>
<html lang="eu">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= e(app_url('/eu')) ?>">
    <link rel="alternate" hreflang="es" href="<?= e(app_url('/es')) ?>">
    <link rel="alternate" hreflang="eu" href="<?= e(app_url('/eu')) ?>">
    <link rel="alternate" hreflang="x-default" href="<?= e(app_url('/es')) ?>">
    <title>Patxi, Donostialdeko margolaria eta altzari-zaharberritzailea</title>
    <meta name="description" content="Barruko eta kanpoko pintura eta altzarien zaharberritzea, zuzeneko arretarekin Usurbilen, Donostialdean eta inguruko herrietan. Azaldu zure proiektua.">
    <meta name="robots" content="index, follow">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="eu_ES">
    <meta property="og:site_name" content="Patxi">
    <meta property="og:title" content="Patxi, Donostialdeko margolaria eta altzari-zaharberritzailea">
    <meta property="og:description" content="Pintura eta altzarien zaharberritzea, zuzeneko arretarekin Usurbilen eta Donostialdean.">
    <meta property="og:url" content="<?= e(app_url('/eu')) ?>">
    <meta property="og:image" content="<?= e(app_url('assets/img/views/pintor-rodillo-interior-1500.avif')) ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Patxi, Donostialdeko margolaria eta zaharberritzailea">
    <meta name="twitter:description" content="Berritu zure espazioak edo berreskuratu altzari bat, zerbitzu hurbil eta profesionalarekin.">
    <meta name="twitter:image" content="<?= e(app_url('assets/img/views/pintor-rodillo-interior-1500.avif')) ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
    <?php require app_path('includes/cookielad.php'); ?>
  </head>
  <body>
    <?php require app_path('includes/eu/nav.php'); ?>

    <header class="header01">
      <img
        class="header01__media"
        src="<?= asset('assets/img/views/pintor-rodillo-interior-1500.avif') ?>"
        srcset="<?= asset('assets/img/views/pintor-rodillo-interior-900.avif') ?> 900w, <?= asset('assets/img/views/pintor-rodillo-interior-1500.avif') ?> 1500w, <?= asset('assets/img/views/pintor-rodillo-interior-2560.avif') ?> 2560w"
        sizes="100vw"
        width="2560"
        height="1707"
        alt="Profesional bat barruko horma bat arrabolarekin margotzen"
        title="Barrualdeko pintura-lan profesionala"
        fetchpriority="high"
        decoding="async"
      >
      <div class="header01__content">
        <p class="header01__eyebrow">Pintura eta zaharberritzea · Usurbil eta Donostialdea</p>
        <h1>Patxi, Donostialdeko margolaria eta altzari-zaharberritzailea</h1>
        <p class="header01__text">Berritu etxebizitza, komunitate edo negozio txiki bat, edo berreskuratu gordetzen jarraitu nahi duzun altzaria. Tratu zuzena eta enkargu bakoitzak benetan behar duenaren arabera planteatutako lana.</p>
        <a href="<?= url('/eu/kontaktua') ?>" class="boton" title="Patxiri aurrekontua eskatu">Aurrekontua eskatu</a>
      </div>
    </header>

    <main>
      <section aria-labelledby="inicio-presentacion-eu">
        <article class="art14">
          <div class="content">
            <div class="h2Especial">
              <span aria-hidden="true"></span>
              <h2 id="inicio-presentacion-eu">Espazioak eta altzariak berritzeko profesional bakarra</h2>
            </div>
            <p>Usurbildik, Patxik Donostialdean eta inguruko herrietan egiten ditu lanak. Eskaintzak elkarren osagarri diren bi lanbide biltzen ditu: espazioak eguneratzeko <strong>barrualdeko eta kanpoaldeko pintura</strong>, eta balio praktikoa edo pertsonala duten egurrezko piezak berreskuratzeko <strong>altzarien zaharberritzea</strong>.</p>
            <p>Proiektu bakoitza espazioaren erabilera edo piezaren egoera ulertuz hasten da. Horri esker, prestaketa, akabera eta lanaren irismena modu egokian baloratu, aukerak argi azaldu eta zure kasuarekin bat ez datozen konponbide orokorrak saihestu daitezke.</p>
            <img
              src="<?= asset('assets/img/views/interior-renovado-1500.avif') ?>"
              srcset="<?= asset('assets/img/views/interior-renovado-900.avif') ?> 900w, <?= asset('assets/img/views/interior-renovado-1500.avif') ?> 1500w"
              sizes="(max-width: 800px) 90vw, 60vw"
              width="1500"
              height="1000"
              alt="Tonu argi eta berdez margotutako hormak dituen barrualde argitsua"
              title="Pinturaren bidez berritutako barrualde baten adibidea"
              loading="lazy"
              decoding="async"
            >
          </div>
        </article>
      </section>

      <section aria-labelledby="inicio-servicios-eu">
        <div class="h2Especial">
          <span aria-hidden="true"></span>
          <h2 id="inicio-servicios-eu">Zure espazioa hasieratik amaierara zaintzeko zerbitzuak</h2>
        </div>

        <article class="art13">
          <img
            src="<?= asset('assets/img/views/pintura-pared-color-1500.avif') ?>"
            srcset="<?= asset('assets/img/views/pintura-pared-color-900.avif') ?> 900w, <?= asset('assets/img/views/pintura-pared-color-1500.avif') ?> 1500w"
            sizes="(max-width: 1199px) 90vw, 48vw"
            width="1500"
            height="1001"
            alt="Margolari bat barruko horma bat pintura horiz estaltzen"
            title="Barruko horma batean koloretako pintura aplikatzen"
            loading="lazy"
            decoding="async"
          >
          <div>
            <h3>Barrualdeko eta kanpoaldeko pintura-lanak</h3>
            <p>Etxebizitzak, atariak, eremu komunak eta lokal txikiak margotzeko zerbitzua. Akabera aplikatu aurretik, euskarria eta behar duen prestaketa baloratzen dira, gainazal uniformea lortzeko.</p>
            <p>Gela baten giroa aldatu, higiezin bat eguneratu edo akats txikiak dituzten hormak txukundu nahi badituzu, margolari-zerbitzua kontsulta dezakezu eta buruan duzun emaitza azaldu.</p>
            <a href="<?= url('/eu/zerbitzuak/margolaria') ?>" class="boton" title="Etxe-margolari profesionalaren zerbitzua ikusi">Pintura-zerbitzua ikusi</a>
          </div>
        </article>

        <article class="art13 upsidedown">
          <img
            src="<?= asset('assets/img/views/reparacion-mueble-taller-1500.avif') ?>"
            srcset="<?= asset('assets/img/views/reparacion-mueble-taller-900.avif') ?> 900w, <?= asset('assets/img/views/reparacion-mueble-taller-1500.avif') ?> 1500w"
            sizes="(max-width: 1199px) 90vw, 48vw"
            width="1500"
            height="1000"
            alt="Profesional bat tailerrean egurrezko altzari baten egitura doitzen"
            title="Egurrezko altzari baten berrikuspena eta konponketa"
            loading="lazy"
            decoding="async"
          >
          <div>
            <h3>Altzarien eta egurrezko piezen zaharberritzea</h3>
            <p>Bigarren bizitza merezi duten altzari zaharrak edo eguneroko erabilerakoak berreskuratzea. Lana higadura, egonkortasuna, aurreko akabera eta piezak izango duen erabilera aztertu ondoren erabakitzen da.</p>
            <p>Helburua ez da haren historia ezabatzea, baizik eta itxura eta erabilgarritasuna hobetzea, altzariaren izaera errespetatuz eta bilatzen duzun emaitza zurekin adostuz.</p>
            <a href="<?= url('/eu/zerbitzuak/altzarien-zaharberritzea') ?>" class="boton" title="Altzariak zaharberritzeko zerbitzua ikusi">Zaharberritzea ikusi</a>
          </div>
        </article>
      </section>

      <section aria-labelledby="inicio-forma-trabajo-eu">
        <article class="art14">
          <div class="content">
            <div class="h2Especial">
              <span aria-hidden="true"></span>
              <h2 id="inicio-forma-trabajo-eu">Arreta hurbila eta erabaki argiak</h2>
            </div>
            <p>Emaitza ona pintura-potoa ireki edo altzari batean esku hartu aurretik hasten da. Patxik lortu nahi duzuna entzuten du, abiapuntua aztertzen du eta ulertzeko erraza den konponbidea planteatzen du. Materialak, koloreak, akaberak eta lehentasunak zuzenean komentatzeko solaskide bakarra izango duzu.</p>
            <p>Lan-eremua Usurbilen, Donostialdean eta inguruko herrietan biltzen da. Zure kokapena edo enkargua egokia den zalantzarik baduzu, erabili formularioa: azaldu lana, eta kontsultaren lehen balorazioa jasoko duzu.</p>
            <img
              src="<?= asset('assets/img/views/pintura-brocha-puerta-1500.avif') ?>"
              srcset="<?= asset('assets/img/views/pintura-brocha-puerta-900.avif') ?> 900w, <?= asset('assets/img/views/pintura-brocha-puerta-1500.avif') ?> 1500w"
              sizes="(max-width: 800px) 90vw, 60vw"
              width="1500"
              height="1000"
              alt="Esku bat ate baten markoan pintura zuria brotxaz ematen"
              title="Barruko zurgintzan brotxaz egindako pintura-xehetasuna"
              loading="lazy"
              decoding="async"
            >
          </div>
        </article>
      </section>

      <section aria-labelledby="inicio-contacto-eu">
        <article class="artForm02">
          <h2 id="inicio-contacto-eu">Azaldu zer berritu nahi duzun</h2>
          <div>
            <div class="contenedor-form">
              <img src="<?= asset('assets/img/icons/mail-solid.svg') ?>" alt="" title="" aria-hidden="true">

              <div id="modal_envio" aria-live="polite">
                <h3 id="h3_modal_envio">Kontsulta bidali da</h3>
                <p id="p_modal_envio">Zure mezua behar bezala jaso da.</p>
                <div class="boton" id="boton_modal_envio" role="button" tabindex="0">Beste kontsulta bat idatzi</div>
              </div>

              <form id="idForAjax" action="<?= e(app_url('/app/artForm02')) ?>" method="post" aria-label="Aurrekontua eskatzeko formularioa">
                <p class="error" id="errorForm02" aria-live="assertive"></p>

                <label for="nombreAjax">Izena *</label>
                <input type="text" id="nombreAjax" name="nombre" placeholder="Idatzi zure izena" minlength="3" maxlength="40" autocomplete="name" required>

                <label for="telefonoAjax">Telefonoa *</label>
                <input type="tel" id="telefonoAjax" name="telefono" placeholder="Adierazi harremanetarako telefonoa" autocomplete="tel" required>

                <label for="emailAjax">Helbide elektronikoa *</label>
                <input type="email" id="emailAjax" name="email" placeholder="Idatzi zure helbide elektronikoa" autocomplete="email" required>

                <label for="mensajeAjax">Zer lan behar duzu? *</label>
                <textarea name="mensaje" id="mensajeAjax" placeholder="Azaldu espazioa edo altzaria, haren egoera eta kokapena" minlength="4" maxlength="200" required></textarea>

                <div class="horizontal">
                  <label for="terminosAjax"><a href="<?= url('/eu/lege-oharra#politica-privacidad') ?>" title="Pribatutasun-politika irakurri">Pribatutasun-politika</a> onartzen dut *</label>
                  <input type="checkbox" name="terminos" id="terminosAjax" required>
                </div>

                <label for="respuestaajax">Ebatzi eragiketa hau *</label>
                <div class="horizontal">
                  <span id="num1ajax"></span>
                  <span id="operadorajax"></span>
                  <span id="num2ajax"></span>
                  <input type="text" name="respUser" id="respuestaajax" placeholder="Emaitza" inputmode="numeric" autocomplete="off" required>
                  <input type="hidden" name="respSystem" id="respSystemajax" value="">
                </div>

                <input type="hidden" name="url" value="<?= e($url) ?>">
                <input type="hidden" name="lang" value="<?= e($lang) ?>">
                <input type="submit" class="boton" value="Kontsulta bidali" id="botonEnviarAjax" title="Kontsulta Patxiri bidali">
              </form>

              <div class="moduloLoader01" id="moduloLoader01" role="status" aria-label="Kontsulta bidaltzen">
                <svg viewBox="0 0 50 50" aria-hidden="true">
                  <circle cx="25" cy="25" r="20" fill="none" stroke="currentColor" stroke-width="5" stroke-linecap="round" stroke-dasharray="90 40">
                    <animateTransform attributeName="transform" type="rotate" from="0 25 25" to="360 25 25" dur="1s" repeatCount="indefinite" />
                  </circle>
                </svg>
              </div>
            </div>

            <div class="contenedor-info">
              <h3>Idatzi aurretik lagungarria den informazioa</h3>
              <p>Adierazi pintura edo zaharberritzea den, lana non dagoen eta zer aldaketa lortu nahi duzun. Mezua zenbat eta zehatzagoa izan, orduan eta hobeto bideratu ahal izango da lehen erantzuna.</p>
              <ul>
                <li>
                  <a href="<?= url('/eu/zerbitzuak/margolaria') ?>" title="Eskuragarri dauden pintura-lanak kontsultatu">
                    <img src="<?= asset('assets/img/icons/brush-1.svg') ?>" alt="" title="" aria-hidden="true">
                    <span>Barrualdeko eta kanpoaldeko pintura</span>
                  </a>
                </li>
                <li>
                  <a href="<?= url('/eu/zerbitzuak/altzarien-zaharberritzea') ?>" title="Altzariak zaharberritzeko zerbitzua kontsultatu">
                    <img src="<?= asset('assets/img/icons/mueble.svg') ?>" alt="" title="" aria-hidden="true">
                    <span>Altzarien zaharberritzea</span>
                  </a>
                </li>
                <li>
                  <a href="<?= url('/eu/kontaktua') ?>" title="Kontaktu eta aurrekontu orrira joan">
                    <img src="<?= asset('assets/img/icons/location.svg') ?>" alt="" title="" aria-hidden="true">
                    <span>Usurbil, Donostialdea eta inguruak</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </article>
      </section>
    </main>

    <?php require app_path('includes/eu/footer.php'); ?>
  </body>
</html>
