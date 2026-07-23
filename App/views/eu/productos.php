<!doctype html>
<html lang="eu">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= e(app_url('/eu/zerbitzuak')) ?>">
    <link rel="alternate" hreflang="es" href="<?= e(app_url('/es/servicios')) ?>">
    <link rel="alternate" hreflang="eu" href="<?= e(app_url('/eu/zerbitzuak')) ?>">
    <link rel="alternate" hreflang="x-default" href="<?= e(app_url('/es/servicios')) ?>">
    <title>Pintura eta altzari-zaharberritzea Usurbilen | Patxi</title>
    <meta name="description" content="Ezagutu Patxik Usurbilen eta Gipuzkoako inguruko herrietan eskaintzen dituen barruko eta kanpoko pintura eta altzari-zaharberritze zerbitzuak.">
    <meta name="robots" content="index, follow">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="eu_ES">
    <meta property="og:site_name" content="Patxi">
    <meta property="og:title" content="Pintura eta altzari-zaharberritze zerbitzuak Usurbilen">
    <meta property="og:description" content="Espazioak berritzeko eta altzariak berreskuratzeko bi zerbitzu, zuzeneko arretarekin.">
    <meta property="og:url" content="<?= e(app_url('/eu/zerbitzuak')) ?>">
    <meta property="og:image" content="<?= e(app_url('assets/img/views/pintura-brocha-puerta-1500.avif')) ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Pintura eta zaharberritzea Usurbilen | Patxi">
    <meta name="twitter:description" content="Kontsultatu eskuragarri dauden pintura eta altzari-zaharberritze lanak.">
    <meta name="twitter:image" content="<?= e(app_url('assets/img/views/pintura-brocha-puerta-1500.avif')) ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
    <?php require app_path('includes/cookielad.php'); ?>
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
        alt="Ate batean pintura zuria zehaztasunez brotxaz aplikatzen"
        title="Brotxaz egindako pintura-lan baten xehetasuna"
        fetchpriority="high"
        decoding="async"
      >
      <div class="header02__content">
        <p class="header02__eyebrow">Zerbitzuak · Usurbil eta inguruko herriak</p>
        <h1 class="header02__title">Pintura eta altzari-zaharberritze zerbitzuak Usurbilen</h1>
        <p class="header02__text">Bi zerbitzu desberdin eta lan egiteko modu bera: behar duzuna entzun, abiapuntua aztertu eta espazioaren edo piezaren benetako erabilerarako akabera egokia proposatu.</p>
        <a href="<?= url('/eu/kontaktua') ?>" class="boton" title="Zerbitzu baterako aurrekontua eskatu">Lan bat kontsultatu</a>
      </div>
    </header>

    <main>
      <section aria-labelledby="servicios-intro-eu">
        <article class="art14">
          <div class="content">
            <div class="h2Especial">
              <span aria-hidden="true"></span>
              <h2 id="servicios-intro-eu">Aukeratu zerbitzua hobetu nahi duzunaren arabera</h2>
            </div>
            <p>Patxik Usurbildik lan egiten du eta Gipuzkoako inguruko herrietako enkarguak hartzen ditu. Gela baten itxura aldatzeko, gainazalak babestu eta eguneratzeko edo gordetzea merezi duen altzari bati egonkortasuna, erabilera eta presentzia itzultzeko aukera duzu.</p>
            <p>Orrialde honek bi lan-arloak laburbiltzen ditu. Zerbitzu bakoitzaren fitxan aplikazioak, prozesua eta ohiko zalantzen erantzunak aurkituko dituzu. Horrela, kontsultara ideia argi batekin iritsi eta bilatzen duzun emaitza hobeto azaldu ahal izango duzu.</p>
            <img
              src="<?= asset('assets/img/views/interior-renovado-1500.avif') ?>"
              srcset="<?= asset('assets/img/views/interior-renovado-900.avif') ?> 900w, <?= asset('assets/img/views/interior-renovado-1500.avif') ?> 1500w"
              sizes="(max-width: 800px) 90vw, 65vw"
              width="1500"
              height="1000"
              alt="Tonu argiko hormak eta horma-atal berde bat dituen egongela argitsua"
              title="Barruko espazio batean kolorea konbinatzeko adibidea"
              loading="lazy"
              decoding="async"
            >
          </div>
        </article>
      </section>

      <section aria-labelledby="servicios-detalle-eu">
        <div class="h2Especial">
          <span aria-hidden="true"></span>
          <h2 id="servicios-detalle-eu">Gozatzen jarraitu nahi duzun espazioetarako bi espezialitate</h2>
        </div>

        <article class="art13" aria-labelledby="servicio-pintura-eu">
          <img
            src="<?= asset('assets/img/views/pintor-rodillo-interior-1500.avif') ?>"
            srcset="<?= asset('assets/img/views/pintor-rodillo-interior-900.avif') ?> 900w, <?= asset('assets/img/views/pintor-rodillo-interior-1500.avif') ?> 1500w"
            sizes="(max-width: 1199px) 90vw, 48vw"
            width="1500"
            height="1000"
            alt="Margolaria arrabol luzagarri batekin lanean, eskailera baten ondoan"
            title="Gainazal handi batean arrabolarekin pintura aplikatzen"
            loading="lazy"
            decoding="async"
          >
          <div>
            <h2 id="servicio-pintura-eu">Barrualde eta kanpoaldeetarako margolaria</h2>
            <p>Etxebizitzetako, komunitateetako eta negozio txikietako hormak, sabaiak eta margotutako beste gainazal batzuk berritzeko aukera. Prestaketa euskarriaren egoerara eta lortu nahi duzun akaberara egokitzen da.</p>
            <p>Kontsultatu zerbitzua koloreak eguneratu, margotu aurretik akats txikiak konpondu edo eguneroko erabilerako espazio bati itxura zainduagoa eman behar badiozu.</p>
            <a href="<?= url('/eu/zerbitzuak/margolaria') ?>" class="boton" title="Margolari-zerbitzua xehetasunez ezagutu">Margolari-zerbitzua ezagutu</a>
          </div>
        </article>

        <article class="art13 upsidedown" aria-labelledby="servicio-restauracion-eu">
          <img
            src="<?= asset('assets/img/views/mueble-madera-restaurado-1500.avif') ?>"
            srcset="<?= asset('assets/img/views/mueble-madera-restaurado-900.avif') ?> 900w, <?= asset('assets/img/views/mueble-madera-restaurado-1500.avif') ?> 1500w"
            sizes="(max-width: 1199px) 90vw, 48vw"
            width="1500"
            height="1000"
            alt="Burdineria eta akabera agerian dituen egurrezko komoda baten xehetasuna"
            title="Erabiltzen jarraitzeko prestatutako egurrezko altzaria"
            loading="lazy"
            decoding="async"
          >
          <div>
            <h2 id="servicio-restauracion-eu">Altzarien eta egurrezko elementuen zaharberritzailea</h2>
            <p>Altzari zaharrak, oinordetzan jasotako piezak edo erabilerak kaltetutako eguneroko altzariak baloratzeko zerbitzua. Esku-hartzea erabaki aurretik egoera, egonkortasuna eta akabera aztertzen dira.</p>
            <p>Zaharberritzeak presentzia eta erabilgarritasuna berreskuratu nahi ditu, pieza guztiak berdin bihurtu gabe. Altzariaren izaerak eta zuk espero duzun emaitzak erabakian parte hartzen dute.</p>
            <a href="<?= url('/eu/zerbitzuak/altzarien-zaharberritzea') ?>" class="boton" title="Altzarien zaharberritzea xehetasunez ezagutu">Zaharberritzea ezagutu</a>
          </div>
        </article>
      </section>

      <section aria-labelledby="servicios-galeria-eu">
        <div class="h2Especial">
          <span aria-hidden="true"></span>
          <h2 id="servicios-galeria-eu">Berriro gozatzeko moduko espazioak eta piezak</h2>
        </div>
        <article class="artGrid" aria-label="Pintura eta zaharberritze aplikazioen galeria">
          <div>
            <img
              src="<?= asset('assets/img/views/pisos-y-viviendas-particulares-1200.avif') ?>"
              width="1200"
              height="865"
              alt="Kolore koordinatuz margotutako hormak dituen etxebizitzako egongela"
              title="Pisu eta etxebizitza partikularretarako pintura"
              loading="lazy"
              decoding="async"
            >
          </div>
          <div>
            <img
              src="<?= asset('assets/img/views/pintor-rodillo-interior-1500.avif') ?>"
              srcset="<?= asset('assets/img/views/pintor-rodillo-interior-900.avif') ?> 900w, <?= asset('assets/img/views/pintor-rodillo-interior-1500.avif') ?> 1500w"
              sizes="(max-width: 799px) 100vw, 40vw"
              width="1500"
              height="1000"
              alt="Margolaria barruko horma batean arrabolarekin pintura aplikatzen"
              title="Arrabolarekin egindako barruko pintura-lana"
              loading="lazy"
              decoding="async"
            >
          </div>
          <div>
            <img
              src="<?= asset('assets/img/views/comunidades-zonas-comunes-1200.avif') ?>"
              width="1200"
              height="800"
              alt="Eremu komunak zainduta dituen bizitegi-komunitate baten kanpoaldea"
              title="Komunitate eta eremu komunetarako pintura"
              loading="lazy"
              decoding="async"
            >
          </div>
          <div>
            <img
              src="<?= asset('assets/img/views/grid-1.avif') ?>"
              width="1000"
              height="563"
              alt="Aurrealde landua eta akabera iluna dituen egurrezko kutxa zaharra"
              title="Xehetasun landuak dituen egurrezko altzari zaharra"
              loading="lazy"
              decoding="async"
            >
          </div>
          <div>
            <img
              src="<?= asset('assets/img/views/grid-3.avif') ?>"
              width="1000"
              height="667"
              alt="Konponketan zehar baraila bidez lotutako aulkiak eta altzariak"
              title="Tailerrean altzari-piezak doitzen"
              loading="lazy"
              decoding="async"
            >
          </div>
          <div>
            <img
              src="<?= asset('assets/img/views/grid-7.avif') ?>"
              width="1000"
              height="667"
              alt="Tonu eta akabera desberdinak agerian dituzten egurrezko oholak"
              title="Egurrezko gainazaletako akabera-laginak"
              loading="lazy"
              decoding="async"
            >
          </div>
        </article>
      </section>

      <section aria-labelledby="servicios-proceso-eu">
        <div class="h2Especial">
          <span aria-hidden="true"></span>
          <h2 id="servicios-proceso-eu">Hasi aurretik zer espero dezakezun</h2>
        </div>
        <article class="art09">
          <h3>Erabaki egokiak hartzeko prozesu ulergarria</h3>
          <div class="art09-content">
            <div class="contenedor-lista">
              <h4>Enkargua baloratzean</h4>
              <ul>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Lortu nahi duzun aldaketa eta espazioaren edo altzariaren erabilera azaltzen dituzu.</span></li>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Uneko egoera eta beharrezko prestaketa aztertzen dira.</span></li>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Zer lan egin daitekeen eta zein ikuspegirekin argitzen da.</span></li>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Proposamena enkargu zehatzera egokitzen da, ez pakete orokor batera.</span></li>
              </ul>
            </div>
            <div class="contenedor-lista">
              <h4>Lana antolatzean</h4>
              <ul>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Lehentasunak, espero den akabera eta jarduketa-eremua adosten dira.</span></li>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Faseak euskarriak behar duen prestaketaren arabera antolatzen dira.</span></li>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Enkarguari buruzko zalantzak argitzeko zuzeneko solaskidea duzu.</span></li>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Emaitza aurreikusitako erabilera kontuan hartuta berrikusten da.</span></li>
              </ul>
            </div>
          </div>
        </article>
      </section>

      <section aria-labelledby="servicios-consulta-eu">
        <div class="h2Especial">
          <span aria-hidden="true"></span>
          <h2 id="servicios-consulta-eu">Ez dakizu zein aukera behar duen zure kasuak?</h2>
        </div>
        <article class="art16">
          <div>
            <h3>Azaldu abiapuntua eta bilatzen duzun emaitza</h3>
            <p>Ez duzu teknika edo produktu egokia ezagutu behar. Azaldu horma, gela, fatxada edo altzaria den, nola dagoen orain eta zer aldatu nahi duzun.</p>
            <p>Informazio horrekin errazagoa izango da kontsulta pinturara, zaharberritzera edo enkarguaren aurretiazko berrikuspenera bideratzea.</p>
            <a href="<?= url('/eu/kontaktua') ?>" class="boton" title="Patxirekin harremanetan jarri lana azaltzeko">Nire proiektua azaldu</a>
          </div>
          <div>
            <img
              src="<?= asset('assets/img/views/acabado-mueble-taller-1500.avif') ?>"
              srcset="<?= asset('assets/img/views/acabado-mueble-taller-900.avif') ?> 900w, <?= asset('assets/img/views/acabado-mueble-taller-1500.avif') ?> 1500w"
              sizes="(max-width: 799px) 100vw, 40vw"
              width="1500"
              height="1000"
              alt="Profesional bat tailerrean altzari baten akabera eskuz berrikusten"
              title="Egurrezko pieza baten akabera eskuz egiaztatzen"
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
