<!doctype html>
<html lang="eu">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= e(app_url('/eu/kontaktua')) ?>">
    <link rel="alternate" hreflang="es" href="<?= e(app_url('/es/contacto')) ?>">
    <link rel="alternate" hreflang="eu" href="<?= e(app_url('/eu/kontaktua')) ?>">
    <link rel="alternate" hreflang="x-default" href="<?= e(app_url('/es/contacto')) ?>">
    <title>Pintura eta zaharberritze aurrekontua Donostialdean</title>
    <meta name="description" content="Azaldu Patxiri zer pintura- edo zaharberritze-lan behar duzun Donostialdean. Adierazi egoera, kokapena eta lortu nahi duzun emaitza.">
    <meta name="robots" content="index, follow">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="eu_ES">
    <meta property="og:site_name" content="Patxi">
    <meta property="og:title" content="Pintura eta zaharberritze aurrekontua Donostialdean">
    <meta property="og:description" content="Azaldu zure lana eta eskatu Patxiri lehen balorazioa.">
    <meta property="og:url" content="<?= e(app_url('/eu/kontaktua')) ?>">
    <meta property="og:image" content="<?= e(app_url('assets/img/views/interior-renovado-1500.avif')) ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Eskatu aurrekontua Patxiri Donostialdean">
    <meta name="twitter:description" content="Pintura eta altzari-zaharberritze kontsultetarako formularioa.">
    <meta name="twitter:image" content="<?= e(app_url('assets/img/views/interior-renovado-1500.avif')) ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
  </head>
  <body>
    <?php require app_path('includes/eu/nav.php'); ?>

    <header class="header02">
      <img
        class="header02__media"
        src="<?= asset('assets/img/views/interior-renovado-1500.avif') ?>"
        srcset="<?= asset('assets/img/views/interior-renovado-900.avif') ?> 900w, <?= asset('assets/img/views/interior-renovado-1500.avif') ?> 1500w, <?= asset('assets/img/views/interior-renovado-2560.avif') ?> 2560w"
        sizes="100vw"
        width="2560"
        height="1707"
        alt="Tonu argi eta berdez margotutako hormak dituen barrualde argitsua"
        title="Giro berrituaz gozatzeko prestatutako barruko espazioa"
        fetchpriority="high"
        decoding="async"
      >
      <div class="header02__content">
        <p class="header02__eyebrow">Kontaktua · Konpromisorik gabeko kontsultak</p>
        <h1 class="header02__title">Eskatu aurrekontua Donostialdeko zure lanerako</h1>
        <p class="header02__text">Deskribatu espazioa edo altzaria, haren egoera eta buruan duzun aldaketa. Datu horiekin Patxik hobeto bideratu ahal izango du lehen erantzuna.</p>
        <a href="#formulario-presupuesto-eu" class="boton" title="Aurrekontua eskatzeko formulariora joan">Formularioara joan</a>
      </div>
    </header>

    <main>
      <section aria-labelledby="contacto-preparar-eu">
        <article class="art03">
          <div class="h2Especial">
            <span aria-hidden="true"></span>
            <h2 id="contacto-preparar-eu">Nola prestatu kontsulta erabilgarria</h2>
          </div>
          <p>Patxik Donostialdean eta Gipuzkoako inguruko beste herri batzuetan hartzen ditu pintura eta zaharberritze eskaerak, Hernani ingurua barne. Enkargua egokia den jakiteko, ez duzu konponbide teknikoa ezagutu behar: nahikoa da abiapuntua eta lortu nahi duzuna azaltzea.</p>
          <p>Adierazi herria, espazio edo pieza mota eta ikusten dituzun higadura-zantzuak. Pintura bada, zer gainazal berritu nahi dituzun jakiteak laguntzen du. Altzaria bada, azaldu haren erabilera, gutxi gorabeherako neurria eta zer ezaugarri gorde nahi dituzun.</p>
          <img
            src="<?= asset('assets/img/views/pintura-brocha-puerta-1500.avif') ?>"
            srcset="<?= asset('assets/img/views/pintura-brocha-puerta-900.avif') ?> 900w, <?= asset('assets/img/views/pintura-brocha-puerta-1500.avif') ?> 1500w"
            sizes="(max-width: 799px) 100vw, 65vw"
            width="1500"
            height="1000"
            alt="Pintura zuria brotxa batekin xehetasunez aplikatzen"
            title="Pintura-lan baten akabera baloratzen laguntzen duen xehetasuna"
            loading="lazy"
            decoding="async"
          >
        </article>
      </section>

      <section aria-labelledby="contacto-informacion-eu">
        <div class="h2Especial">
          <span aria-hidden="true"></span>
          <h2 id="contacto-informacion-eu">Zerbitzu bakoitza baloratzen laguntzen duen informazioa</h2>
        </div>
        <article class="art09">
          <h3>Lau datu errazek enkargua asko argitu dezakete</h3>
          <div class="art09-content">
            <div class="contenedor-lista">
              <h4>Pintura-lan baterako</h4>
              <ul>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Herria eta higiezin mota.</span></li>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Margotu nahi dituzun barruak, kanpoaldeak edo eremu komunak.</span></li>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Hormen, sabaien edo gainazalen egoera ikusgarria.</span></li>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Bilatzen duzun kolorea, giroa edo akabera.</span></li>
              </ul>
            </div>
            <div class="contenedor-lista">
              <h4>Altzari bat zaharberritzeko</h4>
              <ul>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Pieza mota eta gutxi gorabeherako neurriak.</span></li>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Hauteman dituzun kalteak, lasaierak, urradurak edo higadura.</span></li>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Berreskuratu ondoren izango duen erabilera.</span></li>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Gorde nahi dituzun historiaren edo itxuraren ezaugarriak.</span></li>
              </ul>
            </div>
          </div>
        </article>
      </section>

      <section aria-labelledby="contacto-faq-eu">
        <div class="h2Especial">
          <span aria-hidden="true"></span>
          <h2 id="contacto-faq-eu">Harremanetan jarri aurreko galderak</h2>
        </div>
        <article class="artAcordeon01">
          <div class="cabecera">
            <div>
              <h3>Argitu oinarrizko zalantzak kontsulta bidali aurretik</h3>
              <p>Erantzun hauek hasierako orientazio gisa balio dute. Azken irismena kokapenaren, gainazalaren edo altzariaren benetako egoeraren eta lortu nahi duzun emaitzaren araberakoa da.</p>
              <p>Zure zalantza hemen agertzen ez bada, sartu mezuan, enkarguaren testuinguruan erantzun ahal izateko.</p>
            </div>
            <img
              src="<?= asset('assets/img/views/reparacion-mueble-taller-1500.avif') ?>"
              srcset="<?= asset('assets/img/views/reparacion-mueble-taller-900.avif') ?> 900w, <?= asset('assets/img/views/reparacion-mueble-taller-1500.avif') ?> 1500w"
              sizes="(max-width: 799px) 100vw, 38vw"
              width="1500"
              height="1000"
              alt="Profesional bat esku hartu aurretik egurrezko altzari bat aztertzen"
              title="Zaharberritze-enkargu baten aurretiazko berrikuspena"
              loading="lazy"
              decoding="async"
            >
          </div>
          <div class="contenedor">
            <div class="ficha">
              <h4>Zein eremutan egiten du lan Patxik?</h4>
              <p class="respuesta">Lan-eremua Usurbilen, Donostialdean eta inguruko herrietan biltzen da. Adierazi zure udalerria formularioan, desplazamendua enkarguarekin bat datorren egiaztatzeko.</p>
              <span class="mostrar boton" role="button" tabindex="0">Gehiago erakutsi</span>
            </div>
            <div class="ficha">
              <h4>Barruko eta kanpoko pintura kontsulta dezaket?</h4>
              <p class="respuesta">Bai. Azaldu etxebizitza, komunitatea, negozio txikia edo kanpoko gainazala den, eta adierazi zer egoera ikusten duzun.</p>
              <span class="mostrar boton" role="button" tabindex="0">Gehiago erakutsi</span>
            </div>
            <div class="ficha">
              <h4>Zer altzari kontsulta ditzaket?</h4>
              <p class="respuesta">Altzari zaharrak, oinordetzan jasotako piezak edo eguneroko erabilerako altzariak kontsulta ditzakezu. Zaharberritzearen aukera eta irismena egoera ezagutu ondoren baloratzen dira.</p>
              <span class="mostrar boton" role="button" tabindex="0">Gehiago erakutsi</span>
            </div>
            <div class="ficha">
              <h4>Zer produktu edo akabera behar dudan jakin behar al dut?</h4>
              <p class="respuesta">Ez. Azaldu erabilera, egungo itxura eta bilatzen duzun aldaketa. Aukera teknikoa informazio horretatik eta euskarriaren berrikuspenetik abiatuta bideratzen da.</p>
              <span class="mostrar boton" role="button" tabindex="0">Gehiago erakutsi</span>
            </div>
            <div class="ficha">
              <h4>Zer idatzi behar dut lehen mezuan?</h4>
              <p class="respuesta">Sartu herria, lan mota, egoera ikusgarria eta espero den emaitza. Formularioak mezu laburra onartzen duenez, lehenetsi datu horiek.</p>
              <span class="mostrar boton" role="button" tabindex="0">Gehiago erakutsi</span>
            </div>
            <div class="ficha">
              <h4>Noiz jasoko dut erantzuna?</h4>
              <p class="respuesta">Ez da epe finkorik argitaratzen, kontsulta bakoitzak berrikuspen desberdina behar baitu. Patxik ahalik eta azkarren erantzungo du eskuragarri dagoen orientazioarekin.</p>
              <span class="mostrar boton" role="button" tabindex="0">Gehiago erakutsi</span>
            </div>
          </div>
        </article>
      </section>

      <section id="formulario-presupuesto-eu" aria-labelledby="contacto-formulario-eu">
        <article class="artForm02">
          <h2 id="contacto-formulario-eu">Eskatu lehen balorazioa</h2>
          <div>
            <div class="contenedor-form">
              <img src="<?= asset('assets/img/icons/mail-solid.svg') ?>" alt="" title="" aria-hidden="true">

              <div id="modal_envio" aria-live="polite">
                <h3 id="h3_modal_envio">Kontsulta bidali da</h3>
                <p id="p_modal_envio">Zure mezua behar bezala jaso da.</p>
                <div class="boton" id="boton_modal_envio" role="button" tabindex="0">Beste kontsulta bat idatzi</div>
              </div>

              <form id="idForAjax" action="/app/artForm02" method="post" aria-label="Aurrekontua eskatzeko formularioa">
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
                  <label for="terminosAjax"><a href="/eu/lege-oharra#politica-privacidad" title="Pribatutasun-politika irakurri">Pribatutasun-politika</a> onartzen dut *</label>
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
              <h3>Kontsultatu zerbitzua idatzi aurretik</h3>
              <p>Aplikazioei eta prozesuari buruzko informazio gehiago nahi baduzu, berrikusi dagokion zerbitzuaren fitxa. Ondoren, itzuli formulariora eta laburbildu zure kasuaren funtsezko datuak.</p>
              <ul>
                <li>
                  <a href="/eu/zerbitzuak/margolaria" title="Margolari-zerbitzuaren informazioa irakurri">
                    <img src="<?= asset('assets/img/icons/brush-1.svg') ?>" alt="" title="" aria-hidden="true">
                    <span>Margolari-zerbitzua</span>
                  </a>
                </li>
                <li>
                  <a href="/eu/zerbitzuak/altzarien-zaharberritzea" title="Altzarien zaharberritzeari buruzko informazioa irakurri">
                    <img src="<?= asset('assets/img/icons/mueble.svg') ?>" alt="" title="" aria-hidden="true">
                    <span>Altzarien zaharberritzea</span>
                  </a>
                </li>
                <li>
                  <a href="/eu/nortzuk-gara" title="Patxiren lan egiteko modua ezagutu">
                    <img src="<?= asset('assets/img/icons/person.svg') ?>" alt="" title="" aria-hidden="true">
                    <span>Patxi ezagutu</span>
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
