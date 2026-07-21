<!doctype html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= e(app_url('/es')) ?>">
    <link rel="alternate" hreflang="es" href="<?= e(app_url('/es')) ?>">
    <link rel="alternate" hreflang="eu" href="<?= e(app_url('/eu')) ?>">
    <link rel="alternate" hreflang="x-default" href="<?= e(app_url('/es')) ?>">
    <title>Patxi, pintor y restaurador de muebles en Donostialdea</title>
    <meta name="description" content="Pintura interior y exterior y restauración de muebles con atención directa en Usurbil, Donostialdea y localidades próximas. Cuéntale tu proyecto a Patxi.">
    <meta name="robots" content="index, follow">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="es_ES">
    <meta property="og:site_name" content="Patxi">
    <meta property="og:title" content="Patxi, pintor y restaurador de muebles en Donostialdea">
    <meta property="og:description" content="Pintura y restauración de muebles con atención directa en Usurbil y Donostialdea.">
    <meta property="og:url" content="<?= e(app_url('/es')) ?>">
    <meta property="og:image" content="<?= e(app_url('assets/img/views/pintor-rodillo-interior-1500.avif')) ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Patxi, pintor y restaurador en Donostialdea">
    <meta name="twitter:description" content="Renueva tus espacios o recupera un mueble con un servicio cercano y profesional.">
    <meta name="twitter:image" content="<?= e(app_url('assets/img/views/pintor-rodillo-interior-1500.avif')) ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
  </head>
  <body>
    <?php require app_path('includes/es/nav.php'); ?>

    <header class="header01">
      <img
        class="header01__media"
        src="<?= asset('assets/img/views/pintor-rodillo-interior-1500.avif') ?>"
        srcset="<?= asset('assets/img/views/pintor-rodillo-interior-900.avif') ?> 900w, <?= asset('assets/img/views/pintor-rodillo-interior-1500.avif') ?> 1500w, <?= asset('assets/img/views/pintor-rodillo-interior-2560.avif') ?> 2560w"
        sizes="100vw"
        width="2560"
        height="1707"
        alt="Profesional aplicando pintura con rodillo en una pared interior"
        title="Trabajo profesional de pintura interior"
        fetchpriority="high"
        decoding="async"
      >
      <div class="header01__content">
        <p class="header01__eyebrow">Pintura y restauración · Usurbil y Donostialdea</p>
        <h1>Patxi, pintor y restaurador de muebles en Donostialdea</h1>
        <p class="header01__text">Renueva una vivienda, una comunidad o un pequeño negocio, o recupera ese mueble que quieres seguir disfrutando. Trato directo y un trabajo planteado según lo que realmente necesita cada encargo.</p>
        <a href="/es/contacto" class="boton" title="Pedir presupuesto a Patxi">Pedir presupuesto</a>
      </div>
    </header>

    <main>
      <section aria-labelledby="inicio-presentacion-es">
        <article class="art14">
          <div class="content">
            <div class="h2Especial">
              <span aria-hidden="true"></span>
              <h2 id="inicio-presentacion-es">Un mismo profesional para renovar espacios y muebles</h2>
            </div>
            <p>Desde Usurbil, Patxi atiende trabajos en Donostialdea y localidades próximas. La propuesta reúne dos oficios complementarios: <strong>pintura interior y exterior</strong> para poner al día tus espacios y <strong>restauración de muebles</strong> para recuperar piezas de madera con valor práctico o personal.</p>
            <p>Cada proyecto comienza entendiendo el uso del espacio o el estado de la pieza. Así es posible valorar la preparación, el acabado y el alcance adecuados, explicarte las opciones con claridad y evitar soluciones genéricas que no encajan con tu caso.</p>
            <img
              src="<?= asset('assets/img/views/interior-renovado-1500.avif') ?>"
              srcset="<?= asset('assets/img/views/interior-renovado-900.avif') ?> 900w, <?= asset('assets/img/views/interior-renovado-1500.avif') ?> 1500w"
              sizes="(max-width: 800px) 90vw, 60vw"
              width="1500"
              height="1000"
              alt="Interior luminoso con paredes pintadas en tonos claros y verdes"
              title="Ejemplo de interior renovado mediante pintura"
              loading="lazy"
              decoding="async"
            >
          </div>
        </article>
      </section>

      <section aria-labelledby="inicio-servicios-es">
        <div class="h2Especial">
          <span aria-hidden="true"></span>
          <h2 id="inicio-servicios-es">Servicios para cuidar tu espacio de principio a fin</h2>
        </div>

        <article class="art13">
          <img
            src="<?= asset('assets/img/views/pintura-pared-color-1500.avif') ?>"
            srcset="<?= asset('assets/img/views/pintura-pared-color-900.avif') ?> 900w, <?= asset('assets/img/views/pintura-pared-color-1500.avif') ?> 1500w"
            sizes="(max-width: 1199px) 90vw, 48vw"
            width="1500"
            height="1001"
            alt="Pintor cubriendo una pared interior con pintura amarilla"
            title="Aplicación de pintura de color en una pared interior"
            loading="lazy"
            decoding="async"
          >
          <div>
            <h3>Trabajos de pintura interior y exterior</h3>
            <p>Pintura para viviendas, portales, zonas comunes y pequeños locales. Antes de aplicar el acabado se valora el soporte y la preparación que requiere para conseguir una superficie uniforme.</p>
            <p>Si buscas cambiar el ambiente de una estancia, actualizar un inmueble o sanear paredes con pequeñas imperfecciones, puedes consultar el servicio de pintor y contar qué resultado tienes en mente.</p>
            <a href="/es/servicios/pintor" class="boton" title="Ver el servicio de pintor profesional">Ver servicio de pintura</a>
          </div>
        </article>

        <article class="art13 upsidedown">
          <img
            src="<?= asset('assets/img/views/reparacion-mueble-taller-1500.avif') ?>"
            srcset="<?= asset('assets/img/views/reparacion-mueble-taller-900.avif') ?> 900w, <?= asset('assets/img/views/reparacion-mueble-taller-1500.avif') ?> 1500w"
            sizes="(max-width: 1199px) 90vw, 48vw"
            width="1500"
            height="1000"
            alt="Profesional ajustando la estructura de un mueble de madera en un taller"
            title="Revisión y reparación de un mueble de madera"
            loading="lazy"
            decoding="async"
          >
          <div>
            <h3>Restauración de muebles y piezas de madera</h3>
            <p>Recuperación de muebles antiguos o de uso diario que merecen una segunda vida. El trabajo se decide después de revisar el desgaste, la estabilidad, el acabado existente y el uso que tendrá la pieza.</p>
            <p>La finalidad no es borrar su historia, sino mejorar su aspecto y funcionalidad respetando el carácter del mueble y acordando contigo el resultado buscado.</p>
            <a href="/es/servicios/restaurador-muebles" class="boton" title="Ver el servicio de restauración de muebles">Ver restauración de muebles</a>
          </div>
        </article>
      </section>

      <section aria-labelledby="inicio-forma-trabajo-es">
        <article class="art14">
          <div class="content">
            <div class="h2Especial">
              <span aria-hidden="true"></span>
              <h2 id="inicio-forma-trabajo-es">Una atención cercana, con decisiones explicadas</h2>
            </div>
            <p>Un buen resultado empieza antes de abrir un bote de pintura o intervenir un mueble. Patxi escucha qué quieres conseguir, revisa el punto de partida y plantea una solución comprensible. Tendrás un interlocutor directo para comentar materiales, colores, acabados y prioridades.</p>
            <p>El área de trabajo se concentra en Usurbil, Donostialdea y sus localidades próximas. Si no sabes si tu ubicación o tu encargo encajan, utiliza el formulario: describe el trabajo y recibirás una valoración inicial de la consulta.</p>
            <img
              src="<?= asset('assets/img/views/pintura-brocha-puerta-1500.avif') ?>"
              srcset="<?= asset('assets/img/views/pintura-brocha-puerta-900.avif') ?> 900w, <?= asset('assets/img/views/pintura-brocha-puerta-1500.avif') ?> 1500w"
              sizes="(max-width: 800px) 90vw, 60vw"
              width="1500"
              height="1000"
              alt="Mano aplicando pintura blanca con brocha en el marco de una puerta"
              title="Detalle de pintura con brocha en carpintería interior"
              loading="lazy"
              decoding="async"
            >
          </div>
        </article>
      </section>

      <section aria-labelledby="inicio-contacto-es">
        <article class="artForm02">
          <h2 id="inicio-contacto-es">Cuéntame qué necesitas renovar</h2>
          <div>
            <div class="contenedor-form">
              <img src="<?= asset('assets/img/icons/mail-solid.svg') ?>" alt="" title="" aria-hidden="true">

              <div id="modal_envio" aria-live="polite">
                <h3 id="h3_modal_envio">Consulta enviada</h3>
                <p id="p_modal_envio">Tu mensaje se ha recibido correctamente.</p>
                <div class="boton" id="boton_modal_envio" role="button" tabindex="0">Escribir otra consulta</div>
              </div>

              <form id="idForAjax" action="/app/artForm02" method="post" aria-label="Formulario para pedir presupuesto">
                <p class="error" id="errorForm02" aria-live="assertive"></p>

                <label for="nombreAjax">Nombre *</label>
                <input type="text" id="nombreAjax" name="nombre" placeholder="Escribe tu nombre" minlength="3" maxlength="40" autocomplete="name" required>

                <label for="telefonoAjax">Teléfono *</label>
                <input type="tel" id="telefonoAjax" name="telefono" placeholder="Indica un teléfono de contacto" autocomplete="tel" required>

                <label for="emailAjax">Correo electrónico *</label>
                <input type="email" id="emailAjax" name="email" placeholder="Escribe tu correo electrónico" autocomplete="email" required>

                <label for="mensajeAjax">¿Qué trabajo necesitas? *</label>
                <textarea name="mensaje" id="mensajeAjax" placeholder="Describe el espacio o el mueble, su estado y la zona" minlength="4" maxlength="200" required></textarea>

                <div class="horizontal">
                  <label for="terminosAjax">Acepto la <a href="/es/legal#politica-privacidad" title="Leer la política de privacidad">política de privacidad</a> *</label>
                  <input type="checkbox" name="terminos" id="terminosAjax" required>
                </div>

                <label for="respuestaajax">Resuelve esta operación *</label>
                <div class="horizontal">
                  <span id="num1ajax"></span>
                  <span id="operadorajax"></span>
                  <span id="num2ajax"></span>
                  <input type="text" name="respUser" id="respuestaajax" placeholder="Resultado" inputmode="numeric" autocomplete="off" required>
                  <input type="hidden" name="respSystem" id="respSystemajax" value="">
                </div>

                <input type="hidden" name="url" value="<?= e($url) ?>">
                <input type="hidden" name="lang" value="<?= e($lang) ?>">
                <input type="submit" class="boton" value="Enviar consulta" id="botonEnviarAjax" title="Enviar la consulta a Patxi">
              </form>

              <div class="moduloLoader01" id="moduloLoader01" role="status" aria-label="Enviando consulta">
                <svg viewBox="0 0 50 50" aria-hidden="true">
                  <circle cx="25" cy="25" r="20" fill="none" stroke="currentColor" stroke-width="5" stroke-linecap="round" stroke-dasharray="90 40">
                    <animateTransform attributeName="transform" type="rotate" from="0 25 25" to="360 25 25" dur="1s" repeatCount="indefinite" />
                  </circle>
                </svg>
              </div>
            </div>

            <div class="contenedor-info">
              <h3>Información útil antes de escribir</h3>
              <p>Indica si se trata de pintura o restauración, dónde se encuentra el trabajo y qué cambio te gustaría conseguir. Cuanto más concreto sea el mensaje, mejor podrá orientarse la primera respuesta.</p>
              <ul>
                <li>
                  <a href="/es/servicios/pintor" title="Consultar los trabajos de pintura disponibles">
                    <img src="<?= asset('assets/img/icons/brush-1.svg') ?>" alt="" title="" aria-hidden="true">
                    <span>Pintura interior y exterior</span>
                  </a>
                </li>
                <li>
                  <a href="/es/servicios/restaurador-muebles" title="Consultar el servicio de restauración de muebles">
                    <img src="<?= asset('assets/img/icons/mueble.svg') ?>" alt="" title="" aria-hidden="true">
                    <span>Restauración de muebles</span>
                  </a>
                </li>
                <li>
                  <a href="/es/contacto" title="Ir a la página de contacto y presupuesto">
                    <img src="<?= asset('assets/img/icons/location.svg') ?>" alt="" title="" aria-hidden="true">
                    <span>Usurbil, Donostialdea y alrededores</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </article>
      </section>
    </main>

    <?php require app_path('includes/es/footer.php'); ?>
  </body>
</html>
