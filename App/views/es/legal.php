<!doctype html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= e(app_url('/es/legal')) ?>">
    <link rel="alternate" hreflang="es" href="<?= e(app_url('/es/legal')) ?>">
    <link rel="alternate" hreflang="eu" href="<?= e(app_url('/eu/lege-oharra')) ?>">
    <link rel="alternate" hreflang="x-default" href="<?= e(app_url('/es/legal')) ?>">
    <title>Aviso legal, privacidad y cookies | Patxi</title>
    <meta name="description" content="Información sobre el aviso legal, el tratamiento de datos del formulario y el uso de cookies en la web de pintura y restauración de Patxi.">
    <meta name="robots" content="noindex, follow">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="es_ES">
    <meta property="og:site_name" content="Patxi">
    <meta property="og:title" content="Aviso legal, privacidad y cookies | Patxi">
    <meta property="og:description" content="Condiciones legales y tratamiento de los datos enviados desde esta web.">
    <meta property="og:url" content="<?= e(app_url('/es/legal')) ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
  </head>
  <body>
    <?php require app_path('includes/es/nav.php'); ?>

    <main class="legalPage">
      <header class="legalPage__hero">
        <p class="legalPage__eyebrow">Información legal</p>
        <h1>Aviso legal, privacidad y cookies</h1>
        <p class="legalPage__intro">Esta página describe el funcionamiento actual de la web de Patxi y su formulario de contacto. Los datos identificativos y de contacto del titular todavía no constan en el proyecto, por lo que deben completarse antes de publicar este texto como versión legal definitiva.</p>
      </header>

      <nav class="legalPage__index" aria-label="Índice de información legal">
        <a href="#aviso-legal" title="Ir al apartado de aviso legal">Aviso legal</a>
        <a href="#politica-privacidad" title="Ir al apartado de política de privacidad">Política de privacidad</a>
        <a href="#gestion-cookies" title="Ir al apartado de gestión de cookies">Gestión de cookies</a>
      </nav>

      <section class="legalPage__section" id="aviso-legal">
        <h2>Aviso legal</h2>
        <p>La información general del prestador debe ser accesible de forma permanente, fácil, directa y gratuita. Para completar este aviso se necesitan los siguientes datos reales:</p>
        <ul>
          <li>Titular: [PENDIENTE: nombre completo o razón social]</li>
          <li>NIF/CIF: [PENDIENTE]</li>
          <li>Domicilio o establecimiento: [PENDIENTE]</li>
          <li>Correo electrónico de contacto: [PENDIENTE]</li>
          <li>Teléfono u otro medio de comunicación directa: [PENDIENTE]</li>
          <li>Datos registrales o profesionales, si resultan aplicables: [PENDIENTE]</li>
        </ul>
        <p class="legalPage__notice">Pendiente de validación: no sustituyas estos campos con datos de ejemplo. La identidad y los canales de contacto deben ser confirmados por el titular.</p>

        <h3>Objeto del sitio web</h3>
        <p>El sitio presenta los servicios de pintura interior y exterior y restauración de muebles de Patxi, explica su forma de trabajo y permite enviar consultas mediante un formulario. El acceso implica la aceptación de este aviso en la versión publicada en cada momento.</p>

        <h3>Uso responsable</h3>
        <p>La persona usuaria se compromete a utilizar la web de forma lícita y diligente, sin dañar sus sistemas, intentar acceder a áreas restringidas, introducir contenido malicioso ni emplear el formulario para comunicaciones fraudulentas o ajenas a su finalidad.</p>

        <h3>Propiedad intelectual e imágenes</h3>
        <p>Los textos, el diseño, el código, la identidad visual y los demás contenidos pertenecen a sus titulares o se utilizan bajo la licencia correspondiente. Las fotografías de ambiente y oficio proceden de Unsplash y se emplean como recursos ilustrativos; no deben interpretarse como un porfolio de trabajos ejecutados por Patxi.</p>

        <h3>Responsabilidad y enlaces externos</h3>
        <p>Se procura mantener la información disponible y actualizada, pero pueden producirse errores o interrupciones técnicas. Los enlaces externos llevan a servicios de terceros con sus propias condiciones y políticas, sobre las que el titular de esta web no tiene control.</p>
      </section>

      <section class="legalPage__section" id="politica-privacidad">
        <h2>Política de privacidad</h2>
        <p>Esta política se refiere a los datos enviados mediante el formulario de consulta disponible en la portada y en la página de contacto.</p>

        <h3>Responsable del tratamiento</h3>
        <p>Responsable: [PENDIENTE: nombre o razón social]. Contacto para privacidad: [PENDIENTE: correo electrónico]. Dirección: [PENDIENTE].</p>

        <h3>Datos tratados</h3>
        <p>El formulario solicita nombre, teléfono, correo electrónico y mensaje. El sistema también puede registrar la fecha, la dirección IP, el idioma y la URL de origen para gestionar y acreditar la consulta.</p>

        <h3>Finalidad</h3>
        <p>Los datos se utilizan para recibir y responder solicitudes de información o presupuesto, enviar el aviso interno de la consulta, remitir una confirmación a la persona interesada y mantener las comunicaciones necesarias sobre el posible encargo.</p>

        <h3>Base jurídica</h3>
        <p>El tratamiento se basa en el consentimiento manifestado al aceptar la política y enviar el formulario. Cuando la consulta se dirige a solicitar un presupuesto o servicio, también puede resultar aplicable la adopción de medidas precontractuales solicitadas por la persona interesada.</p>

        <h3>Conservación</h3>
        <p>Los datos se conservarán durante el tiempo necesario para atender la consulta y, si surge una relación profesional, durante los plazos aplicables a esa relación y a las posibles responsabilidades. El plazo concreto debe definirse al completar la información del responsable.</p>

        <h3>Destinatarios y proveedores</h3>
        <p>Los datos pueden ser tratados por proveedores necesarios para el funcionamiento de la web, como alojamiento, correo electrónico o mantenimiento técnico, bajo las condiciones de protección de datos que correspondan. Deben identificarse y revisarse los proveedores reales antes de publicar la versión definitiva.</p>

        <h3>Derechos</h3>
        <p>Puedes solicitar acceso, rectificación, supresión, oposición, limitación, portabilidad o retirada del consentimiento escribiendo a [PENDIENTE: correo de privacidad]. También puedes presentar una reclamación ante la Agencia Española de Protección de Datos si consideras que el tratamiento no se ajusta a la normativa.</p>

        <h3>Información básica junto al formulario</h3>
        <p>Antes del envío, el formulario enlaza esta política y exige una aceptación expresa. La versión definitiva debe incluir junto al formulario la identidad y el contacto del responsable, así como un resumen de finalidad, legitimación, conservación, destinatarios y derechos.</p>
      </section>

      <section class="legalPage__section" id="gestion-cookies">
        <h2>Gestión de cookies</h2>
        <p>El código actual del proyecto no incorpora analítica, publicidad ni un gestor de cookies no técnicas. Si se añaden mapas embebidos, vídeos, medición, redes sociales u otros servicios capaces de almacenar o leer información en el dispositivo, deberá revisarse esta sección antes de activarlos.</p>

        <h3>Consentimiento</h3>
        <p>Las cookies técnicas estrictamente necesarias no requieren consentimiento. Para las cookies de preferencias, analíticas, publicitarias o de terceros que sí lo requieran, la información debe mostrarse antes de su instalación y permitir aceptar, rechazar o configurar con opciones equivalentes.</p>

        <h3>Cómo cambiar la elección</h3>
        <p>Si en el futuro se implementa un gestor, esta sección deberá incluir un control accesible para revisar o retirar el consentimiento con la misma facilidad con la que fue otorgado.</p>

        <h3>Referencias oficiales</h3>
        <ul>
          <li><a href="https://www.boe.es/buscar/act.php?id=BOE-A-2002-13758" title="Consultar la Ley 34/2002 en el BOE" target="_blank" rel="noopener noreferrer">Ley 34/2002 de servicios de la sociedad de la información</a></li>
          <li><a href="https://www.aepd.es/preguntas-frecuentes/2-tus-obligaciones-como-responsable-del-tratamiento/6-el-deber-de-informacion/FAQ-0247-como-debo-cumplir-con-el-deber-de-informar" title="Consultar el deber de informar en la AEPD" target="_blank" rel="noopener noreferrer">Deber de informar según la AEPD</a></li>
          <li><a href="https://www.aepd.es/recurso-multimedia/guia-sobre-el-uso-de-las-cookies" title="Consultar la guía de cookies de la AEPD" target="_blank" rel="noopener noreferrer">Guía sobre el uso de cookies de la AEPD</a></li>
        </ul>
        <p class="legalPage__notice">Última revisión del contenido: 21 de julio de 2026. Pendiente de completar y validar con los datos reales del titular.</p>
      </section>
    </main>

    <?php require app_path('includes/es/footer.php'); ?>
  </body>
</html>
