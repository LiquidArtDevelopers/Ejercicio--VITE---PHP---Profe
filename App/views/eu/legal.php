<!doctype html>
<html lang="eu">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= e(app_url('/eu/lege-oharra')) ?>">
    <link rel="alternate" hreflang="es" href="<?= e(app_url('/es/legal')) ?>">
    <link rel="alternate" hreflang="eu" href="<?= e(app_url('/eu/lege-oharra')) ?>">
    <link rel="alternate" hreflang="x-default" href="<?= e(app_url('/es/legal')) ?>">
    <title>Lege-oharra, pribatutasuna eta cookieak | Patxi</title>
    <meta name="description" content="Patxiren pintura eta zaharberritze webguneko lege-oharrari, formularioaren datu-tratamenduari eta cookieen erabilerari buruzko informazioa.">
    <meta name="robots" content="noindex, follow">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="eu_ES">
    <meta property="og:site_name" content="Patxi">
    <meta property="og:title" content="Lege-oharra, pribatutasuna eta cookieak | Patxi">
    <meta property="og:description" content="Webgune honetatik bidalitako datuen lege-baldintzak eta tratamendua.">
    <meta property="og:url" content="<?= e(app_url('/eu/lege-oharra')) ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
    <?php require app_path('includes/cookielad.php'); ?>
  </head>
  <body>
    <?php require app_path('includes/eu/nav.php'); ?>

    <main class="legalPage">
      <header class="legalPage__hero">
        <p class="legalPage__eyebrow">Lege-informazioa</p>
        <h1>Lege-oharra, pribatutasuna eta cookieak</h1>
        <p class="legalPage__intro">Orrialde honek Patxiren webgunearen eta harremanetarako formularioaren egungo funtzionamendua azaltzen du. Titularraren identifikazio- eta harreman-datuak ez daude oraindik proiektuan; beraz, testu hau behin betiko lege-bertsio gisa argitaratu aurretik osatu behar dira.</p>
      </header>

      <nav class="legalPage__index" aria-label="Lege-informazioaren aurkibidea">
        <a href="#aviso-legal" title="Lege-oharraren atalera joan">Lege-oharra</a>
        <a href="#politica-privacidad" title="Pribatutasun-politikaren atalera joan">Pribatutasun-politika</a>
        <a href="#gestion-cookies" title="Cookieen kudeaketaren atalera joan">Cookieen kudeaketa</a>
      </nav>

      <section class="legalPage__section" id="aviso-legal">
        <h2>Lege-oharra</h2>
        <p>Zerbitzu-emailearen informazio orokorrak modu iraunkor, erraz, zuzen eta doakoan egon behar du eskuragarri. Ohar hau osatzeko benetako datu hauek behar dira:</p>
        <ul>
          <li>Titularra: [BETETZEKO: izen-abizenak edo sozietate-izena]</li>
          <li>IFZ/IFK: [BETETZEKO]</li>
          <li>Helbidea edo establezimendua: [BETETZEKO]</li>
          <li>Harremanetarako helbide elektronikoa: [BETETZEKO]</li>
          <li>Telefonoa edo zuzeneko beste komunikazio-bide bat: [BETETZEKO]</li>
          <li>Erregistro- edo lanbide-datuak, aplikagarriak badira: [BETETZEKO]</li>
        </ul>
        <p class="legalPage__notice">Egiaztatzeke: ez ordezkatu eremu hauek adibideko datuekin. Titularrak identitatea eta harreman-bideak baieztatu behar ditu.</p>

        <h3>Webgunearen xedea</h3>
        <p>Webguneak Patxiren barruko eta kanpoko pintura eta altzari-zaharberritze zerbitzuak aurkezten ditu, haren lan egiteko modua azaltzen du eta formulario baten bidez kontsultak bidaltzeko aukera ematen du. Webgunera sartzeak une bakoitzean argitaratutako ohar hau onartzea dakar.</p>

        <h3>Erabilera arduratsua</h3>
        <p>Erabiltzaileak webgunea modu zilegi eta arduratsuan erabiltzeko konpromisoa hartzen du: sistemak kaltetu gabe, eremu mugatuetan sartzen saiatu gabe, eduki kaltegarririk sartu gabe eta formularioa haren helburuarekin zerikusirik ez duten komunikazio iruzurrezkoetarako erabili gabe.</p>

        <h3>Jabetza intelektuala eta irudiak</h3>
        <p>Testuak, diseinua, kodea, ikus-identitatea eta gainerako edukiak dagozkien titularrenak dira edo dagokion lizentziapean erabiltzen dira. Giro eta lanbideko argazkiak Unsplash-etik datoz eta baliabide ilustratibo gisa erabiltzen dira; ez dira Patxik egindako lanen portfolio gisa ulertu behar.</p>

        <h3>Erantzukizuna eta kanpoko estekak</h3>
        <p>Informazioa eskuragarri eta eguneratuta mantentzen saiatzen da, baina akatsak edo eten teknikoak gerta daitezke. Kanpoko estekek beren baldintza eta politikak dituzten hirugarrenen zerbitzuetara eramaten dute, eta webgune honen titularrak ez du haien gaineko kontrolik.</p>
      </section>

      <section class="legalPage__section" id="politica-privacidad">
        <h2>Pribatutasun-politika</h2>
        <p>Politika hau hasierako orrian eta kontaktu-orrian dagoen kontsulta-formularioaren bidez bidalitako datuei dagokie.</p>

        <h3>Tratamenduaren arduraduna</h3>
        <p>Arduraduna: [BETETZEKO: izena edo sozietate-izena]. Pribatutasun-kontaktua: [BETETZEKO: helbide elektronikoa]. Helbidea: [BETETZEKO].</p>

        <h3>Tratatutako datuak</h3>
        <p>Formularioak izena, telefonoa, helbide elektronikoa eta mezua eskatzen ditu. Sistemak data, IP helbidea, hizkuntza eta jatorrizko URLa ere erregistra ditzake kontsulta kudeatu eta egiaztatzeko.</p>

        <h3>Helburua</h3>
        <p>Datuak informazio- edo aurrekontu-eskaerak jaso eta erantzuteko, kontsultaren barne-abisua bidaltzeko, interesdunari baieztapena helarazteko eta balizko enkarguari buruzko beharrezko komunikazioak mantentzeko erabiltzen dira.</p>

        <h3>Oinarri juridikoa</h3>
        <p>Tratamendua politika onartu eta formularioa bidaltzean adierazitako baimenean oinarritzen da. Kontsultaren helburua aurrekontua edo zerbitzua eskatzea bada, interesdunak eskatutako kontratu aurreko neurriak hartzea ere aplika daiteke.</p>

        <h3>Kontserbazioa</h3>
        <p>Datuak kontsultari erantzuteko behar den denboran gordeko dira eta, lan-harremanik sortzen bada, harreman horri eta balizko erantzukizunei aplikatu beharreko epeetan. Epe zehatza arduradunaren informazioa osatzean definitu behar da.</p>

        <h3>Hartzaileak eta hornitzaileak</h3>
        <p>Datuak webgunearen funtzionamendurako beharrezkoak diren hornitzaileek tratatu ahal izango dituzte, hala nola ostatatzeak, posta elektronikoak edo mantentze teknikoak, dagozkien datu-babeseko baldintzen pean. Behin betiko bertsioa argitaratu aurretik benetako hornitzaileak identifikatu eta berrikusi behar dira.</p>

        <h3>Eskubideak</h3>
        <p>Datuetara sartzea, zuzentzea, ezabatzea, tratamenduari aurka egitea edo hura mugatzea, eramangarritasuna edo baimena kentzea eska dezakezu [BETETZEKO: pribatutasun-helbidea] helbidera idatziz. Tratamendua araudiarekin bat ez datorrela uste baduzu, Datuak Babesteko Espainiako Agentzian erreklamazioa ere aurkez dezakezu.</p>

        <h3>Formularioaren ondoko oinarrizko informazioa</h3>
        <p>Bidali aurretik, formularioak politika honetara estekatzen du eta berariazko onarpena eskatzen du. Behin betiko bertsioak formularioaren ondoan arduradunaren identitatea eta kontaktua jaso behar ditu, bai eta helburuaren, legitimazioaren, kontserbazioaren, hartzaileen eta eskubideen laburpena ere.</p>
      </section>

      <section class="legalPage__section" id="gestion-cookies">
        <h2>Cookieen kudeaketa</h2>
        <p>Proiektuaren egungo kodeak ez du analitikarik, publizitaterik edo cookie ez-teknikoen kudeatzailerik. Txertatutako mapak, bideoak, neurketa, sare sozialak edo gailuan informazioa gorde edo irakur dezaketen beste zerbitzu batzuk gehitzen badira, atal hau berrikusi beharko da aktibatu aurretik.</p>

        <h3>Baimena</h3>
        <p>Behar-beharrezko cookie teknikoek ez dute baimenik behar. Baimena behar duten lehentasun-, analitika-, publizitate- edo hirugarrenen cookietarako, informazioa instalatu aurretik erakutsi behar da, eta onartu, baztertu edo konfiguratzeko aukera baliokideak eskaini.</p>

        <h3>Nola aldatu aukera</h3>
        <p>Etorkizunean kudeatzaile bat ezartzen bada, atal honek baimena berrikusi edo kentzeko kontrol irisgarria izan beharko du, baimena emateko bezain erraz.</p>

        <h3>Erreferentzia ofizialak</h3>
        <ul>
          <li><a href="https://www.boe.es/buscar/act.php?id=BOE-A-2002-13758" title="34/2002 Legea BOEn kontsultatu" target="_blank" rel="noopener noreferrer">Informazio-gizartearen zerbitzuei buruzko 34/2002 Legea</a></li>
          <li><a href="https://www.aepd.es/preguntas-frecuentes/2-tus-obligaciones-como-responsable-del-tratamiento/6-el-deber-de-informacion/FAQ-0247-como-debo-cumplir-con-el-deber-de-informar" title="AEPDren informatzeko betebeharra kontsultatu" target="_blank" rel="noopener noreferrer">AEPDren arabera informatzeko betebeharra</a></li>
          <li><a href="https://www.aepd.es/recurso-multimedia/guia-sobre-el-uso-de-las-cookies" title="AEPDren cookie-gida kontsultatu" target="_blank" rel="noopener noreferrer">AEPDren cookieen erabilerari buruzko gida</a></li>
        </ul>
        <p class="legalPage__notice">Edukiaren azken berrikuspena: 2026ko uztailaren 21a. Titularraren benetako datuekin osatu eta egiaztatzeke.</p>
      </section>
    </main>

    <?php require app_path('includes/eu/footer.php'); ?>
  </body>
</html>
