<!doctype html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= e(app_url('/es/servicios/restaurador-muebles')) ?>">
    <link rel="alternate" hreflang="es" href="<?= e(app_url('/es/servicios/restaurador-muebles')) ?>">
    <link rel="alternate" hreflang="eu" href="<?= e(app_url('/eu/zerbitzuak/altzarien-zaharberritzea')) ?>">
    <link rel="alternate" hreflang="x-default" href="<?= e(app_url('/es/servicios/restaurador-muebles')) ?>">
    <title>Restauración de muebles en Donostialdea | Patxi</title>
    <meta name="description" content="Servicio de restauración de muebles por encargo en Donostialdea y el entorno de Orio. Recupera piezas de madera valorando su estado, uso y carácter.">
    <meta name="robots" content="index, follow">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="es_ES">
    <meta property="og:site_name" content="Patxi">
    <meta property="og:title" content="Restauración de muebles en Donostialdea | Patxi">
    <meta property="og:description" content="Recuperación por encargo de muebles y piezas de madera que quieres conservar.">
    <meta property="og:url" content="<?= e(app_url('/es/servicios/restaurador-muebles')) ?>">
    <meta property="og:image" content="<?= e(app_url('assets/img/views/reparacion-mueble-taller-1500.avif')) ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Restauración de muebles en Donostialdea | Patxi">
    <meta name="twitter:description" content="Consulta si tu mueble puede recuperar estabilidad, uso y presencia.">
    <meta name="twitter:image" content="<?= e(app_url('assets/img/views/reparacion-mueble-taller-1500.avif')) ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
    <?php require app_path('includes/cookielad.php'); ?>
  </head>
  <body>
    <?php require app_path('includes/es/nav.php'); ?>

    <header class="header02">
      <img
        class="header02__media"
        src="<?= asset('assets/img/views/reparacion-mueble-taller-1500.avif') ?>"
        srcset="<?= asset('assets/img/views/reparacion-mueble-taller-900.avif') ?> 900w, <?= asset('assets/img/views/reparacion-mueble-taller-1500.avif') ?> 1500w, <?= asset('assets/img/views/reparacion-mueble-taller-2560.avif') ?> 2560w"
        sizes="100vw"
        width="2560"
        height="1707"
        alt="Profesional reparando la estructura de un mueble de madera en un taller"
        title="Trabajo manual de reparación sobre un mueble de madera"
        fetchpriority="high"
        decoding="async"
      >
      <div class="header02__content">
        <p class="header02__eyebrow">Servicio por encargo · Muebles y piezas de madera</p>
        <h1 class="header02__title">Restauración de muebles en Donostialdea</h1>
        <p class="header02__text">Para recuperar una pieza que quieres conservar, mejorar su uso y cuidar los rasgos que la hacen reconocible antes de decidir cualquier intervención.</p>
        <a href="<?= url('/es/contacto') ?>" class="boton" title="Consultar la restauración de un mueble">Consultar mi mueble</a>
      </div>
    </header>

    <main>
      <section aria-labelledby="restauracion-intro-es">
        <article class="art14">
          <div class="content">
            <div class="h2Especial">
              <span aria-hidden="true"></span>
              <h2 id="restauracion-intro-es">Recuperar la pieza sin borrar su carácter</h2>
            </div>
            <p>El servicio de <strong>restauración de muebles en Donostialdea</strong> está pensado para encargos particulares en esta zona de Gipuzkoa y localidades próximas como Orio. Antes de actuar, Patxi valora el estado visible, la estabilidad, el acabado existente y el uso que volverá a tener la pieza.</p>
            <p>Restaurar no significa dejar todos los muebles con el mismo aspecto. Una pieza heredada, un mueble antiguo o un elemento cotidiano desgastado requieren decisiones diferentes. La finalidad es acordar hasta dónde intervenir para mejorar su presencia y funcionalidad sin eliminar aquello que quieres conservar.</p>
            <img
              src="<?= asset('assets/img/views/mueble-madera-restaurado-1500.avif') ?>"
              srcset="<?= asset('assets/img/views/mueble-madera-restaurado-900.avif') ?> 900w, <?= asset('assets/img/views/mueble-madera-restaurado-1500.avif') ?> 1500w"
              sizes="(max-width: 800px) 90vw, 65vw"
              width="1500"
              height="1000"
              alt="Frente de una cajonera de madera con veta y herrajes visibles"
              title="Detalle del carácter y acabado de un mueble de madera"
              loading="lazy"
              decoding="async"
            >
          </div>
        </article>
      </section>

      <section aria-labelledby="restauracion-piezas-es">
        <div class="h2Especial">
          <span aria-hidden="true"></span>
          <h2 id="restauracion-piezas-es">Qué se valora antes de restaurar un mueble</h2>
        </div>
        <article class="art09">
          <h3>La intervención depende de la pieza, no solo de su aspecto</h3>
          <div class="art09-content">
            <div class="contenedor-lista">
              <h4>Estado y construcción</h4>
              <ul>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Estabilidad general y uniones que necesitan revisión.</span></li>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Golpes, roces, desgaste y señales de reparaciones anteriores.</span></li>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Tipo de acabado visible y respuesta de la superficie.</span></li>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Elementos que forman parte del carácter del mueble.</span></li>
              </ul>
            </div>
            <div class="contenedor-lista">
              <h4>Uso y resultado esperado</h4>
              <ul>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Si volverá a tener un uso diario o principalmente decorativo.</span></li>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Qué marcas quieres mantener y cuáles deseas corregir.</span></li>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>El aspecto que debe conservar para seguir encajando en tu espacio.</span></li>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>El alcance razonable después de revisar la pieza.</span></li>
              </ul>
            </div>
          </div>
        </article>
      </section>

      <section aria-labelledby="restauracion-proceso-es">
        <div class="h2Especial">
          <span aria-hidden="true"></span>
          <h2 id="restauracion-proceso-es">Un proceso definido a partir del diagnóstico</h2>
        </div>

        <article class="art16">
          <div>
            <h3>1. Conocer la historia de uso y revisar el estado</h3>
            <p>La primera conversación sirve para saber por qué quieres conservar el mueble, dónde se utiliza y qué problemas has observado. Después se revisan sus superficies, estructura y piezas móviles o de unión.</p>
            <p>Este diagnóstico orienta la viabilidad y evita decidir el acabado antes de comprender las necesidades del conjunto.</p>
          </div>
          <div>
            <img
              src="<?= asset('assets/img/views/reparacion-mueble-taller-1500.avif') ?>"
              srcset="<?= asset('assets/img/views/reparacion-mueble-taller-900.avif') ?> 900w, <?= asset('assets/img/views/reparacion-mueble-taller-1500.avif') ?> 1500w"
              sizes="(max-width: 799px) 100vw, 40vw"
              width="1500"
              height="1000"
              alt="Revisión manual de la base y las uniones de un mueble"
              title="Diagnóstico de la estructura de un mueble de madera"
              loading="lazy"
              decoding="async"
            >
          </div>
        </article>

        <article class="art16 invert">
          <div>
            <h3>2. Estabilizar y trabajar la superficie</h3>
            <p>Si el estado lo requiere, se plantea primero la parte funcional: ajustes, uniones o pequeñas reparaciones compatibles con la pieza. Después se aborda la superficie con el cuidado que demande el acabado existente.</p>
            <p>Las fases concretas se deciden para ese mueble; no se aplica una secuencia cerrada sin haberlo revisado.</p>
          </div>
          <div>
            <img
              src="<?= asset('assets/img/views/tratamiento-madera-1500.avif') ?>"
              srcset="<?= asset('assets/img/views/tratamiento-madera-900.avif') ?> 900w, <?= asset('assets/img/views/tratamiento-madera-1500.avif') ?> 1500w"
              sizes="(max-width: 799px) 100vw, 40vw"
              width="1500"
              height="2000"
              alt="Mano extendiendo un tratamiento con un paño sobre una tabla de madera"
              title="Aplicación manual de un tratamiento sobre madera"
              loading="lazy"
              decoding="async"
            >
          </div>
        </article>

        <article class="art16">
          <div>
            <h3>3. Ajustar el acabado al uso que tendrá la pieza</h3>
            <p>El aspecto final se valora junto con la función. Un mueble de uso diario y una pieza principalmente decorativa pueden pedir prioridades distintas en resistencia, tacto y presencia visual.</p>
            <p>Antes de comenzar, podrás explicar qué rasgos son importantes para ti y qué cambio esperas ver cuando el mueble vuelva a su espacio.</p>
            <a href="<?= url('/es/contacto') ?>" class="boton" title="Contar a Patxi el estado de un mueble">Solicitar una valoración</a>
          </div>
          <div>
            <img
              src="<?= asset('assets/img/views/acabado-mueble-taller-1500.avif') ?>"
              srcset="<?= asset('assets/img/views/acabado-mueble-taller-900.avif') ?> 900w, <?= asset('assets/img/views/acabado-mueble-taller-1500.avif') ?> 1500w"
              sizes="(max-width: 799px) 100vw, 40vw"
              width="1500"
              height="1000"
              alt="Profesional comprobando con la mano una superficie de madera acabada"
              title="Revisión del tacto y el acabado de un mueble"
              loading="lazy"
              decoding="async"
            >
          </div>
        </article>
      </section>

      <section aria-labelledby="restauracion-decision-es">
        <div class="h2Especial">
          <span aria-hidden="true"></span>
          <h2 id="restauracion-decision-es">¿Merece la pena restaurar tu mueble?</h2>
        </div>
        <article class="art09">
          <h3>La respuesta depende del valor que tiene para ti y de su estado</h3>
          <div class="art09-content">
            <div class="contenedor-lista">
              <h4>Razones para pedir una valoración</h4>
              <ul>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>La pieza tiene valor personal, familiar o forma parte de tu espacio.</span></li>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Sus medidas, construcción o diseño siguen resultando útiles.</span></li>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Quieres conocer qué daños pueden corregirse sin desvirtuarla.</span></li>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Prefieres decidir después de revisar su situación real.</span></li>
              </ul>
            </div>
            <div class="contenedor-lista">
              <h4>Qué ayuda en la primera consulta</h4>
              <ul>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Tipo de mueble y dimensiones aproximadas.</span></li>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Daños, holguras o desgaste que has detectado.</span></li>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Localidad en la que se encuentra la pieza.</span></li>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Uso y aspecto que te gustaría recuperar.</span></li>
              </ul>
            </div>
          </div>
        </article>
      </section>
    </main>

    <?php require app_path('includes/es/footer.php'); ?>
  </body>
</html>
