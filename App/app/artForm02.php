<?php

$basePath = dirname(__DIR__, 2);
require_once $basePath . '/vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable($basePath);
$dotenv->load();

require_once $basePath . '/App/config/helpers.php';

// 1. Recoger los datos enviados por el formulario.
$nombre = trim((string) ($_POST['nombre'] ?? ''));
$telefono = trim((string) ($_POST['telefono'] ?? ''));
$email = trim((string) ($_POST['email'] ?? ''));
$mensaje = trim((string) ($_POST['mensaje'] ?? ''));
$terminos = (string) ($_POST['terminos'] ?? '');
$respUser = trim((string) ($_POST['respUser'] ?? ''));
$respSystem = trim((string) ($_POST['respSystem'] ?? ''));
$url = ruta_interna($_POST['url'] ?? '/showroom');
$langRecibido = (string) ($_POST['lang'] ?? 'es');
$lang = in_array($langRecibido, ['es', 'eu'], true) ? $langRecibido : 'es';
$ip = $_SERVER['REMOTE_ADDR'] ?? '';
$fecha = date('Y-m-d H:i:s');

$copys = [
    'es' => [
        'consentimiento' => 'Debes aceptar las condiciones de consentimiento.',
        'captcha_vacio' => 'Debes completar la comprobación de seguridad.',
        'captcha_incorrecto' => 'Debes resolver la operación correctamente.',
        'nombre_vacio' => 'Debes rellenar el campo nombre.',
        'nombre_longitud' => 'El nombre debe tener entre 3 y 40 caracteres.',
        'telefono_vacio' => 'Debes rellenar el campo teléfono.',
        'email_vacio' => 'Debes indicar el correo electrónico.',
        'email_invalido' => 'El correo electrónico no tiene un formato válido.',
        'mensaje_vacio' => 'El mensaje no puede quedar vacío.',
        'mensaje_longitud' => 'El mensaje debe tener entre 4 y 200 caracteres.',
        'correo_preparacion' => 'No se ha podido preparar el correo. Inténtalo de nuevo más tarde.',
        'correo_envio' => 'No se ha podido enviar el correo. Inténtalo de nuevo más tarde.',
        'admin_asunto' => 'Nueva consulta desde la web de Patxi: %s',
        'admin_aviso' => 'Se ha recibido una nueva consulta desde la web de Patxi.',
        'admin_explicacion' => 'Se ha recibido una consulta desde el formulario de la web.',
        'admin_contexto' => 'Nueva consulta de',
        'admin_razon' => 'Puedes responder directamente al correo facilitado por esta persona.',
        'admin_responder' => 'Responde en cuanto te sea posible.',
        'admin_texto' => "Nueva consulta de %s\nTeléfono: %s\nEmail: %s\nMensaje: %s\nFecha: %s\nURL: %s",
        'usuario_asunto' => '%s, hemos recibido tu consulta | Patxi',
        'usuario_aviso' => 'Tu consulta se ha recibido correctamente.',
        'usuario_explicacion' => 'Gracias por contactar con Patxi. Hemos recibido correctamente tu consulta.',
        'usuario_contexto' => 'Gracias por escribir,',
        'usuario_razon' => 'Estos son los datos que nos has enviado.',
        'usuario_responder' => 'Responderemos lo antes posible.',
        'usuario_texto' => "Hola %s, hemos recibido tu consulta.\nTeléfono: %s\nEmail: %s\nMensaje: %s\nFecha: %s",
        'respuesta_final' => 'Gracias por escribir, %s.',
        'logo_alt' => 'Patxi, pintor y restaurador de muebles',
        'automatico' => 'Notificación automática',
        'etiqueta_consulta' => 'Consulta web',
        'etiqueta_web' => 'Web',
        'etiqueta_nombre' => 'Nombre',
        'etiqueta_telefono' => 'Teléfono',
        'etiqueta_email' => 'Correo electrónico',
        'etiqueta_mensaje' => 'Consulta',
        'etiqueta_fecha' => 'Fecha',
        'etiqueta_url' => 'URL de origen',
        'ir_web' => 'Ir a la web',
        'despedida' => 'Un saludo,',
        'firma' => 'Patxi',
        'aviso_automatico' => 'Este correo se ha generado automáticamente. Si no esperabas este mensaje, puedes ignorarlo.',
    ],
    'eu' => [
        'consentimiento' => 'Baimen-baldintzak onartu behar dituzu.',
        'captcha_vacio' => 'Segurtasun-egiaztapena bete behar duzu.',
        'captcha_incorrecto' => 'Eragiketa zuzen ebatzi behar duzu.',
        'nombre_vacio' => 'Izena bete behar duzu.',
        'nombre_longitud' => 'Izenak 3 eta 40 karaktere artean izan behar ditu.',
        'telefono_vacio' => 'Telefonoaren eremua bete behar duzu.',
        'email_vacio' => 'Helbide elektronikoa adierazi behar duzu.',
        'email_invalido' => 'Helbide elektronikoaren formatua ez da zuzena.',
        'mensaje_vacio' => 'Mezua ezin da hutsik utzi.',
        'mensaje_longitud' => 'Mezuak 4 eta 200 karaktere artean izan behar ditu.',
        'correo_preparacion' => 'Ezin izan da mezu elektronikoa prestatu. Saiatu berriro geroago.',
        'correo_envio' => 'Ezin izan da mezu elektronikoa bidali. Saiatu berriro geroago.',
        'admin_asunto' => 'Kontsulta berria Patxiren webgunetik: %s',
        'admin_aviso' => 'Patxiren webgunetik kontsulta berria jaso da.',
        'admin_explicacion' => 'Webguneko formularioaren bidez kontsulta bat jaso da.',
        'admin_contexto' => 'Kontsulta berri bat bidali du',
        'admin_razon' => 'Pertsona honek emandako helbide elektronikora zuzenean erantzun dezakezu.',
        'admin_responder' => 'Erantzun ahalik eta lasterren.',
        'admin_texto' => "Kontsulta berria: %s\nTelefonoa: %s\nHelbide elektronikoa: %s\nMezua: %s\nData: %s\nURLa: %s",
        'usuario_asunto' => '%s, zure kontsulta jaso dugu | Patxi',
        'usuario_aviso' => 'Zure kontsulta behar bezala jaso dugu.',
        'usuario_explicacion' => 'Eskerrik asko Patxirekin harremanetan jartzeagatik. Zure kontsulta behar bezala jaso dugu.',
        'usuario_contexto' => 'Eskerrik asko idazteagatik,',
        'usuario_razon' => 'Hauek dira bidali dizkiguzun datuak.',
        'usuario_responder' => 'Ahal bezain laster erantzungo dizugu.',
        'usuario_texto' => "Kaixo %s, zure kontsulta jaso dugu.\nTelefonoa: %s\nHelbide elektronikoa: %s\nMezua: %s\nData: %s",
        'respuesta_final' => 'Eskerrik asko idazteagatik, %s.',
        'logo_alt' => 'Patxi, margolaria eta altzari-zaharberritzailea',
        'automatico' => 'Jakinarazpen automatikoa',
        'etiqueta_consulta' => 'Web-kontsulta',
        'etiqueta_web' => 'Webgunea',
        'etiqueta_nombre' => 'Izena',
        'etiqueta_telefono' => 'Telefonoa',
        'etiqueta_email' => 'Helbide elektronikoa',
        'etiqueta_mensaje' => 'Kontsulta',
        'etiqueta_fecha' => 'Data',
        'etiqueta_url' => 'Jatorrizko URLa',
        'ir_web' => 'Webgunera joan',
        'despedida' => 'Agur bero bat,',
        'firma' => 'Patxi',
        'aviso_automatico' => 'Mezu hau automatikoki sortu da. Ez bazenuen espero, ez ikusi egin diezaiokezu.',
    ],
];
$copy = $copys[$lang];

// 2. Validar los datos antes de intentar enviar correos.
if (comprobarVacio($terminos)) {
    enviarRespuestaAsincrona($copy['consentimiento'], true, 'condiciones');
}

if ($respUser === '' || $respSystem === '') {
    enviarRespuestaAsincrona($copy['captcha_vacio'], true, 'captcha');
}

if ($respUser !== $respSystem) {
    enviarRespuestaAsincrona($copy['captcha_incorrecto'], true, 'captcha');
}

if (comprobarVacio($nombre)) {
    enviarRespuestaAsincrona($copy['nombre_vacio'], true, 'nombre');
}

if (comprobarCaracteres($nombre, 3, 40)) {
    enviarRespuestaAsincrona($copy['nombre_longitud'], true, 'nombre');
}

if (comprobarVacio($telefono)) {
    enviarRespuestaAsincrona($copy['telefono_vacio'], true, 'telefono');
}

if (comprobarVacio($email)) {
    enviarRespuestaAsincrona($copy['email_vacio'], true, 'email');
}

if (!comprobarEmailSintaxis($email)) {
    enviarRespuestaAsincrona($copy['email_invalido'], true, 'email');
}

if (comprobarVacio($mensaje)) {
    enviarRespuestaAsincrona($copy['mensaje_vacio'], true, 'mensaje');
}

if (comprobarCaracteres($mensaje, 4, 200)) {
    enviarRespuestaAsincrona($copy['mensaje_longitud'], true, 'mensaje');
}

// 3. Cargar una sola vez la plantilla usada por los dos correos.
$templatePath = $basePath . '/App/app/templates/artForm02.html';
$html = file_get_contents($templatePath);

if (!is_string($html)) {
    error_log('artForm02: no se ha podido leer la plantilla de correo.');
    enviarRespuestaAsincrona($copy['correo_preparacion'], true, 'envio');
}

$web = app_url($url);
$nombreAsunto = str_replace(["\r", "\n"], ' ', $nombre);

// Los valores insertados en el correo HTML deben ir escapados.
$valoresHtml = [
    'web' => e($web),
    'url' => e($url),
    'nombre' => e($nombre),
    'telefono' => e($telefono),
    'email' => e($email),
    'mensaje' => nl2br(e($mensaje)),
    'fecha' => e($fecha),
];

$varsComunes = [
    '{lang}' => e($lang),
    '{logo_alt}' => e($copy['logo_alt']),
    '{automatico}' => e($copy['automatico']),
    '{etiqueta_consulta}' => e($copy['etiqueta_consulta']),
    '{etiqueta_web}' => e($copy['etiqueta_web']),
    '{etiqueta_nombre}' => e($copy['etiqueta_nombre']),
    '{etiqueta_telefono}' => e($copy['etiqueta_telefono']),
    '{etiqueta_email}' => e($copy['etiqueta_email']),
    '{etiqueta_mensaje}' => e($copy['etiqueta_mensaje']),
    '{etiqueta_fecha}' => e($copy['etiqueta_fecha']),
    '{etiqueta_url}' => e($copy['etiqueta_url']),
    '{ir_web}' => e($copy['ir_web']),
    '{despedida}' => e($copy['despedida']),
    '{firma}' => e($copy['firma']),
    '{aviso_automatico}' => e($copy['aviso_automatico']),
];

// 4. Correo de aviso a la administración.
$correoEmisor = env('EMAIL_WEB', '');
$nombreEmisor = 'Patxi';
$correoDestinatario = env('EMAIL_ADMIN', '');
$nombreDestinatario = 'Patxi';
$correoResponderA = $email;
$nombreResponderA = $nombreAsunto;
$asunto = sprintf($copy['admin_asunto'], $nombreAsunto);

$vars = array_merge($varsComunes, [
    '{web}' => $valoresHtml['web'],
    '{url}' => $valoresHtml['url'],
    '{asunto}' => e($asunto),
    '{aviso}' => e($copy['admin_aviso']),
    '{explicacion}' => e($copy['admin_explicacion']),
    '{contexto}' => e($copy['admin_contexto']),
    '{razon}' => e($copy['admin_razon']),
    '{nombre}' => $valoresHtml['nombre'],
    '{telefono}' => $valoresHtml['telefono'],
    '{email}' => $valoresHtml['email'],
    '{mensaje}' => $valoresHtml['mensaje'],
    '{responder}' => e($copy['admin_responder']),
    '{fecha}' => $valoresHtml['fecha'],
]);

$cuerpo = str_replace(array_keys($vars), array_values($vars), $html);
$cuerpoTexto = sprintf($copy['admin_texto'], $nombre, $telefono, $email, $mensaje, $fecha, $web);
include $basePath . '/App/app/envioPhpMailer.php';
$correoAdminEnviado = $envioCorreoOk;
$errorCorreoAdmin = $envioCorreoError;

// Si no llega el aviso principal, no intentamos un segundo correo con la misma
// conexion SMTP. Asi evitamos agotar el tiempo maximo de ejecucion de PHP.
if (!$correoAdminEnviado) {
    error_log('artForm02: no se ha enviado el aviso a administracion. ' . ($errorCorreoAdmin ?? 'Sin detalle.'));
    enviarRespuestaAsincrona($copy['correo_envio'], true, 'envio');
}

// 5. Correo de confirmación a la persona que ha escrito.
$correoEmisor = env('EMAIL_WEB', '');
$nombreEmisor = 'Patxi';
$correoDestinatario = $email;
$nombreDestinatario = $nombreAsunto;
$correoResponderA = env('EMAIL_ADMIN', env('EMAIL_WEB', ''));
$nombreResponderA = 'Patxi';
$asunto = sprintf($copy['usuario_asunto'], $nombreAsunto);

$vars = array_merge($varsComunes, [
    '{web}' => $valoresHtml['web'],
    '{url}' => $valoresHtml['url'],
    '{asunto}' => e($asunto),
    '{aviso}' => e($copy['usuario_aviso']),
    '{explicacion}' => e($copy['usuario_explicacion']),
    '{contexto}' => e($copy['usuario_contexto']),
    '{razon}' => e($copy['usuario_razon']),
    '{nombre}' => $valoresHtml['nombre'],
    '{telefono}' => $valoresHtml['telefono'],
    '{email}' => $valoresHtml['email'],
    '{mensaje}' => $valoresHtml['mensaje'],
    '{responder}' => e($copy['usuario_responder']),
    '{fecha}' => $valoresHtml['fecha'],
]);

$cuerpo = str_replace(array_keys($vars), array_values($vars), $html);
$cuerpoTexto = sprintf($copy['usuario_texto'], $nombre, $telefono, $email, $mensaje, $fecha);
include $basePath . '/App/app/envioPhpMailer.php';
$correoUsuarioEnviado = $envioCorreoOk;
$errorCorreoUsuario = $envioCorreoError;

// 6. Guardar la consulta si este proyecto tiene una BBDD configurada.
$bbddHost = env('BBDD_HOST');
$bbddUser = env('BBDD_USER');
$bbddPass = env('BBDD_PASS');
$bbddNombre = env('BBDD_BBDD');

if (extension_loaded('mysqli') && $bbddHost && $bbddUser && $bbddNombre) {
    $con = @mysqli_connect($bbddHost, $bbddUser, (string) $bbddPass, $bbddNombre);

    if ($con === false) {
        error_log('artForm02: error de conexión con la BBDD: ' . mysqli_connect_error());
    } else {
        $con->set_charset('utf8mb4');
        $sql = 'INSERT INTO `consultas_web` (`creado_en`, `nombre`, `telefono`, `email`, `mensaje`, `ip`, `idioma`, `url_origen`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
        $stmt = mysqli_prepare($con, $sql);

        if ($stmt === false) {
            error_log('artForm02: error al preparar la consulta: ' . mysqli_error($con));
        } else {
            mysqli_stmt_bind_param($stmt, 'ssssssss', $fecha, $nombre, $telefono, $email, $mensaje, $ip, $lang, $url);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }

        mysqli_close($con);
    }
}

// Nunca se confirma el formulario si SMTP no ha aceptado los dos correos.
if (!$correoUsuarioEnviado) {
    error_log('artForm02: no se ha enviado la confirmacion al usuario. ' . ($errorCorreoUsuario ?? 'Sin detalle.'));

    enviarRespuestaAsincrona($copy['correo_envio'], true, 'envio');
}

enviarRespuestaAsincrona(sprintf($copy['respuesta_final'], $nombre), false, $nombre);
