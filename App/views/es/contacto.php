<!doctype html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= e(app_url('/es/contacto')) ?>">
    <link rel="alternate" hreflang="es" href="<?= e(app_url('/es/contacto')) ?>">
    <link rel="alternate" hreflang="eu" href="<?= e(app_url('/eu/kontaktua')) ?>">
    <link rel="alternate" hreflang="x-default" href="<?= e(app_url('/es/contacto')) ?>">
    <title>Presupuesto de pintura y restauración en Donostialdea</title>
    <meta name="description" content="Cuéntale a Patxi qué trabajo de pintura o restauración necesitas en Donostialdea. Indica el estado, la ubicación y el resultado que buscas.">
    <meta name="robots" content="index, follow">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="es_ES">
    <meta property="og:site_name" content="Patxi">
    <meta property="og:title" content="Presupuesto de pintura y restauración en Donostialdea">
    <meta property="og:description" content="Explica tu trabajo y solicita una primera valoración a Patxi.">
    <meta property="og:url" content="<?= e(app_url('/es/contacto')) ?>">
    <meta property="og:image" content="<?= e(app_url('assets/img/views/interior-renovado-1500.avif')) ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Pide presupuesto a Patxi en Donostialdea">
    <meta name="twitter:description" content="Formulario para consultas de pintura y restauración de muebles.">
    <meta name="twitter:image" content="<?= e(app_url('assets/img/views/interior-renovado-1500.avif')) ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
  </head>
  <body>
    <?php require app_path('includes/es/nav.php'); ?>

    <header class="header02">
      <img
        class="header02__media"
        src="<?= asset('assets/img/views/interior-renovado-1500.avif') ?>"
        srcset="<?= asset('assets/img/views/interior-renovado-900.avif') ?> 900w, <?= asset('assets/img/views/interior-renovado-1500.avif') ?> 1500w, <?= asset('assets/img/views/interior-renovado-2560.avif') ?> 2560w"
        sizes="100vw"
        width="2560"
        height="1707"
        alt="Interior luminoso con paredes pintadas en tonos claros y verdes"
        title="Espacio interior preparado para disfrutar de un ambiente renovado"
        fetchpriority="high"
        decoding="async"
      >
      <div class="header02__content">
        <p class="header02__eyebrow">Contacto · Consultas sin compromiso</p>
        <h1 class="header02__title">Pide presupuesto para tu trabajo en Donostialdea</h1>
        <p class="header02__text">Describe el espacio o el mueble, su estado y el cambio que tienes en mente. Con esos datos Patxi podrá orientar mejor la primera respuesta.</p>
        <a href="#formulario-presupuesto-es" class="boton" title="Ir al formulario para pedir presupuesto">Ir al formulario</a>
      </div>
    </header>

    <main>
      <section aria-labelledby="contacto-preparar-es">
        <article class="art03">
          <div class="h2Especial">
            <span aria-hidden="true"></span>
            <h2 id="contacto-preparar-es">Cómo preparar una consulta útil</h2>
          </div>
          <p>Patxi atiende solicitudes de pintura y restauración en Donostialdea y otras localidades próximas de Gipuzkoa, incluido el entorno de Hernani. Para saber si el encargo encaja, no necesitas conocer la solución técnica: basta con explicar el punto de partida y lo que te gustaría conseguir.</p>
          <p>Indica la localidad, el tipo de espacio o pieza y las señales de desgaste que observas. Si se trata de pintura, ayuda saber qué superficies quieres renovar. Si es un mueble, comenta su uso, tamaño aproximado y qué rasgos deseas conservar.</p>
          <img
            src="<?= asset('assets/img/views/pintura-brocha-puerta-1500.avif') ?>"
            srcset="<?= asset('assets/img/views/pintura-brocha-puerta-900.avif') ?> 900w, <?= asset('assets/img/views/pintura-brocha-puerta-1500.avif') ?> 1500w"
            sizes="(max-width: 799px) 100vw, 65vw"
            width="1500"
            height="1000"
            alt="Aplicación detallada de pintura blanca con una brocha"
            title="Detalle que ayuda a valorar el acabado de un trabajo de pintura"
            loading="lazy"
            decoding="async"
          >
        </article>
      </section>

      <section aria-labelledby="contacto-informacion-es">
        <div class="h2Especial">
          <span aria-hidden="true"></span>
          <h2 id="contacto-informacion-es">La información que ayuda a valorar cada servicio</h2>
        </div>
        <article class="art09">
          <h3>Cuatro datos sencillos pueden aclarar mucho el encargo</h3>
          <div class="art09-content">
            <div class="contenedor-lista">
              <h4>Para un trabajo de pintura</h4>
              <ul>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Localidad y tipo de inmueble.</span></li>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Interiores, exteriores o zonas comunes que quieres pintar.</span></li>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Estado visible de paredes, techos o superficies.</span></li>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Color, ambiente o acabado que buscas.</span></li>
              </ul>
            </div>
            <div class="contenedor-lista">
              <h4>Para restaurar un mueble</h4>
              <ul>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Tipo de pieza y dimensiones aproximadas.</span></li>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Daños, holguras, roces o desgaste que has detectado.</span></li>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Uso que volverá a tener una vez recuperado.</span></li>
                <li><img src="<?= asset('assets/img/icons/checkmark-circle.svg') ?>" alt="" title="" aria-hidden="true"><span>Aspectos de su historia o apariencia que deseas conservar.</span></li>
              </ul>
            </div>
          </div>
        </article>
      </section>

      <section aria-labelledby="contacto-faq-es">
        <div class="h2Especial">
          <span aria-hidden="true"></span>
          <h2 id="contacto-faq-es">Preguntas antes de contactar</h2>
        </div>
        <article class="artAcordeon01">
          <div class="cabecera">
            <div>
              <h3>Resuelve lo básico antes de enviar tu consulta</h3>
              <p>Estas respuestas sirven como orientación inicial. El alcance definitivo depende de la ubicación, del estado real de la superficie o del mueble y del resultado que quieras conseguir.</p>
              <p>Si tu duda no aparece aquí, inclúyela en el mensaje para poder responderla dentro del contexto de tu encargo.</p>
            </div>
            <img
              src="<?= asset('assets/img/views/reparacion-mueble-taller-1500.avif') ?>"
              srcset="<?= asset('assets/img/views/reparacion-mueble-taller-900.avif') ?> 900w, <?= asset('assets/img/views/reparacion-mueble-taller-1500.avif') ?> 1500w"
              sizes="(max-width: 799px) 100vw, 38vw"
              width="1500"
              height="1000"
              alt="Profesional revisando un mueble de madera antes de intervenir"
              title="Revisión previa de un encargo de restauración"
              loading="lazy"
              decoding="async"
            >
          </div>
          <div class="contenedor">
            <div class="ficha">
              <h4>¿En qué zona trabaja Patxi?</h4>
              <p class="respuesta">El área de trabajo se centra en Usurbil, Donostialdea y localidades próximas. Indica tu municipio en el formulario para confirmar si el desplazamiento encaja con el encargo.</p>
              <span class="mostrar boton" role="button" tabindex="0">Mostrar más</span>
            </div>
            <div class="ficha">
              <h4>¿Puedo consultar pintura interior y exterior?</h4>
              <p class="respuesta">Sí. Describe si se trata de una vivienda, una comunidad, un pequeño negocio o una superficie exterior y señala el estado que observas.</p>
              <span class="mostrar boton" role="button" tabindex="0">Mostrar más</span>
            </div>
            <div class="ficha">
              <h4>¿Qué muebles puedo consultar?</h4>
              <p class="respuesta">Puedes preguntar por muebles antiguos, piezas heredadas o mobiliario de uso diario. La posibilidad y el alcance de la restauración se valoran después de conocer su estado.</p>
              <span class="mostrar boton" role="button" tabindex="0">Mostrar más</span>
            </div>
            <div class="ficha">
              <h4>¿Tengo que saber qué producto o acabado necesito?</h4>
              <p class="respuesta">No. Explica el uso, el aspecto actual y el cambio que buscas. La elección técnica se orienta a partir de esa información y de la revisión del soporte.</p>
              <span class="mostrar boton" role="button" tabindex="0">Mostrar más</span>
            </div>
            <div class="ficha">
              <h4>¿Qué debo escribir en el primer mensaje?</h4>
              <p class="respuesta">Incluye la localidad, el tipo de trabajo, el estado visible y el resultado esperado. El formulario admite un mensaje breve, así que prioriza esos datos.</p>
              <span class="mostrar boton" role="button" tabindex="0">Mostrar más</span>
            </div>
            <div class="ficha">
              <h4>¿Cuándo recibiré respuesta?</h4>
              <p class="respuesta">No se publica un plazo fijo porque cada consulta necesita una revisión diferente. Patxi responderá tan pronto como sea posible con la orientación disponible.</p>
              <span class="mostrar boton" role="button" tabindex="0">Mostrar más</span>
            </div>
          </div>
        </article>
      </section>

      <section id="formulario-presupuesto-es" aria-labelledby="contacto-formulario-es">
        <article class="artForm02">
          <h2 id="contacto-formulario-es">Solicita una primera valoración</h2>
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
              <h3>Consulta el servicio antes de escribir</h3>
              <p>Si quieres ampliar información sobre aplicaciones y proceso, revisa la ficha del servicio correspondiente. Después vuelve al formulario y resume los datos esenciales de tu caso.</p>
              <ul>
                <li>
                  <a href="/es/servicios/pintor" title="Leer la información del servicio de pintor">
                    <img src="<?= asset('assets/img/icons/brush-1.svg') ?>" alt="" title="" aria-hidden="true">
                    <span>Servicio de pintor</span>
                  </a>
                </li>
                <li>
                  <a href="/es/servicios/restaurador-muebles" title="Leer la información sobre restauración de muebles">
                    <img src="<?= asset('assets/img/icons/mueble.svg') ?>" alt="" title="" aria-hidden="true">
                    <span>Restauración de muebles</span>
                  </a>
                </li>
                <li>
                  <a href="/es/quienes-somos" title="Conocer la forma de trabajar de Patxi">
                    <img src="<?= asset('assets/img/icons/person.svg') ?>" alt="" title="" aria-hidden="true">
                    <span>Conoce a Patxi</span>
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
