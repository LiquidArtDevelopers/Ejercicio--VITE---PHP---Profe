<!doctype html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= e(app_url('/es/servicios')) ?>">
    <link rel="alternate" hreflang="es" href="<?= e(app_url('/es/servicios')) ?>">
    <link rel="alternate" hreflang="eu" href="<?= e(app_url('/eu/zerbitzuak')) ?>">
    <link rel="alternate" hreflang="x-default" href="<?= e(app_url('/es/servicios')) ?>">
    <title>Servicios de pintura y restauración en Usurbil | Patxi</title>
    <meta name="description" content="Conoce los servicios de pintura interior y exterior y restauración de muebles que ofrece Patxi en Usurbil y su entorno próximo en Gipuzkoa.">
    <meta name="robots" content="index, follow">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="es_ES">
    <meta property="og:site_name" content="Patxi">
    <meta property="og:title" content="Servicios de pintura y restauración en Usurbil">
    <meta property="og:description" content="Dos servicios para renovar espacios y recuperar muebles con atención directa.">
    <meta property="og:url" content="<?= e(app_url('/es/servicios')) ?>">
    <meta property="og:image" content="<?= e(app_url('assets/img/views/pintura-brocha-puerta-1500.avif')) ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Pintura y restauración en Usurbil | Patxi">
    <meta name="twitter:description" content="Consulta los trabajos de pintura y restauración de muebles disponibles.">
    <meta name="twitter:image" content="<?= e(app_url('assets/img/views/pintura-brocha-puerta-1500.avif')) ?>">
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
        src="<?= asset('assets/img/views/pintura-brocha-puerta-1500.avif') ?>"
        srcset="<?= asset('assets/img/views/pintura-brocha-puerta-900.avif') ?> 900w, <?= asset('assets/img/views/pintura-brocha-puerta-1500.avif') ?> 1500w, <?= asset('assets/img/views/pintura-brocha-puerta-2560.avif') ?> 2560w"
        sizes="100vw"
        width="2560"
        height="1707"
        alt="Aplicación precisa de pintura blanca con brocha sobre una puerta"
        title="Detalle de un trabajo de pintura con brocha"
        fetchpriority="high"
        decoding="async"
      >
      <div class="header02__content">
        <p class="header02__eyebrow">Servicios · Usurbil y entorno próximo</p>
        <h1 class="header02__title">Servicios de pintura y restauración de muebles en Usurbil</h1>
        <p class="header02__text">Dos servicios distintos y una misma forma de trabajar: escuchar lo que necesitas, revisar el punto de partida y plantear un acabado adecuado para el uso real del espacio o la pieza.</p>
        <a href="<?= url('/es/contacto') ?>" class="boton" title="Pedir presupuesto para un servicio">Consultar un trabajo</a>
      </div>
    </header>

    <main>
      <section aria-labelledby="servicios-intro-es">
        <article class="art14">
          <div class="content">
            <div class="h2Especial">
              <span aria-hidden="true"></span>
              <h2 id="servicios-intro-es">Elige el servicio según lo que quieras mejorar</h2>
            </div>
            <p>Patxi trabaja desde Usurbil y atiende encargos en su entorno próximo de Gipuzkoa. Puedes contar con él para cambiar el aspecto de una estancia, proteger y actualizar superficies o devolver estabilidad, uso y presencia a un mueble que merece conservarse.</p>
            <p>Esta página resume las dos áreas de trabajo. En la ficha de cada servicio encontrarás aplicaciones, proceso y respuestas a dudas habituales. Así podrás llegar a la consulta con una idea clara y explicar mejor el resultado que buscas.</p>
            <img
              src="<?= asset('assets/img/views/interior-renovado-1500.avif') ?>"
              srcset="<?= asset('assets/img/views/interior-renovado-900.avif') ?> 900w, <?= asset('assets/img/views/interior-renovado-1500.avif') ?> 1500w"
              sizes="(max-width: 800px) 90vw, 65vw"
              width="1500"
              height="1000"
              alt="Salón luminoso con paredes en tonos claros y un paño verde"
              title="Ejemplo de combinación de color en un espacio interior"
              loading="lazy"
              decoding="async"
            >
          </div>
        </article>
      </section>

      <section aria-labelledby="servicios-detalle-es">
        <div class="h2Especial">
          <span aria-hidden="true"></span>
          <h2 id="servicios-detalle-es">Dos especialidades para espacios que quieres seguir disfrutando</h2>
        </div>

        <article class="art13" aria-labelledby="servicio-pintura-es">
          <img
            src="<?= asset('assets/img/views/pintor-rodillo-interior-1500.avif') ?>"
            srcset="<?= asset('assets/img/views/pintor-rodillo-interior-900.avif') ?> 900w, <?= asset('assets/img/views/pintor-rodillo-interior-1500.avif') ?> 1500w"
            sizes="(max-width: 1199px) 90vw, 48vw"
            width="1500"
            height="1000"
            alt="Pintor trabajando con un rodillo extensible junto a una escalera"
            title="Aplicación de pintura con rodillo en una superficie amplia"
            loading="lazy"
            decoding="async"
          >
          <div>
            <h2 id="servicio-pintura-es">Pintor para interiores y exteriores</h2>
            <p>Una opción para renovar paredes, techos y otras superficies pintadas en viviendas, comunidades y pequeños negocios. La preparación se adapta al estado del soporte y al acabado que quieres conseguir.</p>
            <p>Consulta el servicio si necesitas actualizar colores, reparar pequeñas imperfecciones antes de pintar o dar una imagen más cuidada a un espacio de uso diario.</p>
            <a href="<?= url('/es/servicios/pintor') ?>" class="boton" title="Conocer el servicio de pintor en detalle">Conocer el servicio de pintor</a>
          </div>
        </article>

        <article class="art13 upsidedown" aria-labelledby="servicio-restauracion-es">
          <img
            src="<?= asset('assets/img/views/mueble-madera-restaurado-1500.avif') ?>"
            srcset="<?= asset('assets/img/views/mueble-madera-restaurado-900.avif') ?> 900w, <?= asset('assets/img/views/mueble-madera-restaurado-1500.avif') ?> 1500w"
            sizes="(max-width: 1199px) 90vw, 48vw"
            width="1500"
            height="1000"
            alt="Detalle de una cajonera de madera con herrajes y acabado visible"
            title="Mueble de madera preparado para seguir en uso"
            loading="lazy"
            decoding="async"
          >
          <div>
            <h2 id="servicio-restauracion-es">Restaurador de muebles y elementos de madera</h2>
            <p>Un servicio para valorar muebles antiguos, piezas heredadas o mobiliario cotidiano afectado por el uso. Se revisan su estado, estabilidad y acabado antes de decidir cómo intervenir.</p>
            <p>La restauración busca recuperar presencia y funcionalidad sin convertir todas las piezas en algo idéntico. El carácter del mueble y el resultado que esperas forman parte de la decisión.</p>
            <a href="<?= url('/es/servicios/restaurador-muebles') ?>" class="boton" title="Conocer el servicio de restauración de muebles en detalle">Conocer la restauración</a>
          </div>
        </article>
      </section>

      <section aria-labelledby="servicios-galeria-es">
        <div class="h2Especial">
          <span aria-hidden="true"></span>
          <h2 id="servicios-galeria-es">Espacios y piezas que pueden volver a disfrutarse</h2>
        </div>
        <article class="artGrid" aria-label="Galería de aplicaciones de pintura y restauración">
          <div>
            <img
              src="<?= asset('assets/img/views/pisos-y-viviendas-particulares-1200.avif') ?>"
              width="1200"
              height="865"
              alt="Salón de una vivienda con paredes pintadas en tonos coordinados"
              title="Pintura para pisos y viviendas particulares"
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
              alt="Pintor aplicando pintura con rodillo en una pared interior"
              title="Trabajo de pintura interior con rodillo"
              loading="lazy"
              decoding="async"
            >
          </div>
          <div>
            <img
              src="<?= asset('assets/img/views/comunidades-zonas-comunes-1200.avif') ?>"
              width="1200"
              height="800"
              alt="Exterior de una comunidad residencial con zonas comunes cuidadas"
              title="Pintura para comunidades y zonas comunes"
              loading="lazy"
              decoding="async"
            >
          </div>
          <div>
            <img
              src="<?= asset('assets/img/views/grid-1.avif') ?>"
              width="1000"
              height="563"
              alt="Arcón antiguo de madera con frente tallado y acabado oscuro"
              title="Mueble antiguo de madera con detalles tallados"
              loading="lazy"
              decoding="async"
            >
          </div>
          <div>
            <img
              src="<?= asset('assets/img/views/grid-3.avif') ?>"
              width="1000"
              height="667"
              alt="Sillas y muebles sujetos con sargentos durante su reparación"
              title="Ajuste de piezas de mobiliario en el taller"
              loading="lazy"
              decoding="async"
            >
          </div>
          <div>
            <img
              src="<?= asset('assets/img/views/grid-7.avif') ?>"
              width="1000"
              height="667"
              alt="Tablas de madera con distintos tonos y acabados visibles"
              title="Muestras de acabado sobre superficies de madera"
              loading="lazy"
              decoding="async"
            >
          </div>
        </article>
      </section>

      <section aria-labelledby="servicios-proceso-es">
        <div class="h2Especial">
          <span aria-hidden="true"></span>
          <h2 id="servicios-proceso-es">Qué puedes esperar antes de empezar</h2>
        </div>
        <article class="art09">
          <h3>Un proceso comprensible para tomar buenas decisiones</h3>
          <div class="art09-content">
            <div class="contenedor-lista">
              <h4>Al valorar el encargo</h4>
              <ul>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Explicas el cambio que buscas y el uso del espacio o mueble.</span></li>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Se revisa el estado actual y la preparación necesaria.</span></li>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Se aclara qué parte del trabajo puede realizarse y con qué enfoque.</span></li>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>La propuesta se ajusta al encargo concreto, no a un paquete genérico.</span></li>
              </ul>
            </div>
            <div class="contenedor-lista">
              <h4>Al organizar el trabajo</h4>
              <ul>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Se acuerdan prioridades, acabado esperado y zona de actuación.</span></li>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Las fases se ordenan según la preparación que necesita el soporte.</span></li>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Tienes un interlocutor directo para resolver dudas sobre el encargo.</span></li>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>El resultado se revisa teniendo en cuenta el uso previsto.</span></li>
              </ul>
            </div>
          </div>
        </article>
      </section>

      <section aria-labelledby="servicios-consulta-es">
        <div class="h2Especial">
          <span aria-hidden="true"></span>
          <h2 id="servicios-consulta-es">¿No sabes qué opción necesita tu caso?</h2>
        </div>
        <article class="art16">
          <div>
            <h3>Describe el punto de partida y el resultado que buscas</h3>
            <p>No hace falta que conozcas la técnica o el producto adecuado. Explica si se trata de una pared, una estancia, una fachada o un mueble, cómo está ahora y qué te gustaría cambiar.</p>
            <p>Con esa información será más sencillo orientar la consulta hacia pintura, restauración o una revisión previa del encargo.</p>
            <a href="<?= url('/es/contacto') ?>" class="boton" title="Contactar con Patxi para explicar un trabajo">Explicar mi proyecto</a>
          </div>
          <div>
            <img
              src="<?= asset('assets/img/views/acabado-mueble-taller-1500.avif') ?>"
              srcset="<?= asset('assets/img/views/acabado-mueble-taller-900.avif') ?> 900w, <?= asset('assets/img/views/acabado-mueble-taller-1500.avif') ?> 1500w"
              sizes="(max-width: 799px) 100vw, 40vw"
              width="1500"
              height="1000"
              alt="Profesional revisando a mano el acabado de un mueble en el taller"
              title="Comprobación manual del acabado de una pieza de madera"
              loading="lazy"
              decoding="async"
            >
          </div>
        </article>
      </section>
    </main>

    <?php require app_path('includes/es/footer.php'); ?>
  </body>
</html>
