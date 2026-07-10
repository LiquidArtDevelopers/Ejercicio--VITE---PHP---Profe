<?php

$basePath = dirname(__DIR__, 2);
require_once $basePath . '/vendor/autoload.php';
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable($basePath);
$dotenv->load();

include_once $basePath . "/App/config/helpers.php";


// aquí voy a gestionar lo que reciba del formulario

// 1 recibir los datos del formulario a través de POST y meto los value en nuevas variables que usaré aquí
// Recoger el resto de valores del form
$nombre = trim((string) ($_POST['nombre'] ?? ''));
$telefono = trim((string) ($_POST['telefono'] ?? ''));
$email = trim((string) ($_POST['email'] ?? ''));
$mensaje = trim((string) ($_POST['mensaje'] ?? ''));
$ip = $_SERVER['REMOTE_ADDR'];
$fecha = date('Y-m-d H:i:s');

$url = ruta_interna($_POST['url'] ?? '/showroom');
$langRecibido = (string) ($_POST['lang'] ?? 'es');
$lang = in_array($langRecibido, ['es', 'eu'], true) ? $langRecibido : 'es';



if(!isset($_POST['terminos']) || comprobarVacio($_POST['terminos'])){
    // Como viene vacía, redirijo a la página de contacto
    // echo "Hay un error pues no ha aceptado las condiciones de privacidad";
    enviarRespuestaAsincrona("Debes aceptar las condiciones de consentimiento", true, "condiciones");
}else{
    $terminos = $_POST['terminos'];
}


// comprobación de captcha
$respUser = trim((string) ($_POST['respUser'] ?? ''));
$respSystem = trim((string) ($_POST['respSystem'] ?? ''));
// que venga vacío
if($respUser === '' || $respSystem === ''){
    enviarRespuestaAsincrona("Debes cumplir con el captcha", true, "captcha");
}
// que la respuesta sea errónea
if($respUser != $respSystem){
    enviarRespuestaAsincrona("Debes resolver la operación de forma correcta", true, "captcha");
}







// echo $ip . "<br>";
// echo $fecha;
// die;

// Zona de comprobaciones DEV
// echo $nombre.'<br>'.$telefono.'<br>'.$email.'<br>'.$mensaje.'<br>'.$terminos.'<br>'.$respUser.'<br>'.$respSystem;


// 2 comprobar que los datos son correctos.
// que nombre venga vacío, salimos
if(comprobarVacio($nombre)){
    enviarRespuestaAsincrona("Debes rellenar el campo nombre", true, "nombre");
}
// // que nombre sea menor de 3 y mayor de 40, salimos
if(comprobarCaracteres($nombre, 3, 40)){
    enviarRespuestaAsincrona("El nombre debe tener más de 3 y menos de 40 caracteres", true, "nombre"); 
}

// que teléfono venga vacío, salimos
if(comprobarVacio($telefono)){
    enviarRespuestaAsincrona("El campo teléfono debe cumplimentarse", true, "telefono"); 
}

// que correo venga vacío, salimos
if(comprobarVacio($email)){
    enviarRespuestaAsincrona("Debes indicar el correo electrónico", true, "email"); 
}

// // que correo no tenga la forma de un correo, salimos (expresión regular)
if(!comprobarEmailSintaxis($email)){
    enviarRespuestaAsincrona("El correo electrónico no tiene un formato adecuado", true, "email"); 
}

// que mensaje venga vacío, salimos
if(comprobarVacio($mensaje)){
    enviarRespuestaAsincrona("El mensaje no puede quedar vacío", true, "mensaje"); 
}
// // que mensaje sea menor de 4 y mayor de 200, salimos
if(comprobarCaracteres($mensaje, 4, 200)){
    enviarRespuestaAsincrona("El mensaje debe tener una longitud entre 4 y 200 caracteres máximo", true, "mensaje"); 
}

// 3 enviar correos de aviso: a la empresa y al propio usuario

// 3.1 enviar un correo al ADMIN DE LA WEB
// recoger más variables que necesita el phpMailer:correo emisor y el nombre emisor,el correo receptor y su nombre, título del correo
$web = app_url($url);
$correoEmisor = env('EMAIL_WEB', '');
$nombreEmisor = "Web de ejemplo";
$correoDestinatario = env('EMAIL_ADMIN', '');
$nombreDestinatario = "Administración";
$asunto = "Nueva consulta desde la web de ejemplo: $nombre";

// recoger el template con los placeholders
$html = file_get_contents($basePath . "/App/app/templates/artForm02.html");
// dar el cambiazo a los placeholders por valores definitivos

// array asociativo de las relaciones de placeholders con los valores que tendrá para este correo
$vars = [
    '{web}'                 => $web,
    '{url}'                 => $url,
    '{asunto}'              => $asunto,
    '{aviso}'               => "Se ha recibido una consulta de $nombre desde la web de ejemplo.",
    '{explicacion}'         => "Este es un texto de ejemplo para notificar la recepción de una consulta web.",
    '{contexto}'            => 'Nueva consulta de ',
    '{razon}'               => 'Los datos enviados se muestran a continuación como contenido de demostración.',
    '{nombre}'              => $nombre,
    '{telefono}'            => $telefono,
    '{email}'               => $email,
    '{mensaje}'             => $mensaje,
    '{responder}'           => 'Procura responder en un plazo máximo de 2 días laborables.',
    '{fecha}'               => $fecha,

];
$cuerpo = str_replace(array_keys($vars), array_values($vars), $html);
include $basePath . "/App/app/envioPhpMailer.php";


// 3.2 enviar un correo al USUARIO DE LA WEB
// recoger más variables que necesita el phpMailer:correo emisor y el nombre emisor,el correo receptor y su nombre, título del correo
$web = app_url($url);
$correoEmisor = env('EMAIL_WEB', '');
$nombreEmisor = "Web de ejemplo";
$correoDestinatario = $email;
$nombreDestinatario= $nombre;
$asunto = "$nombre, hemos recibido tu consulta | Web de ejemplo";

// recoger el template con los placeholders
$html = file_get_contents($basePath . "/App/app/templates/artForm02.html");
// dar el cambiazo a los placeholders por valores definitivos

// array asociativo de las relaciones de placeholders con los valores que tendrá para este correo
$vars = [
    '{web}'                 => $web,
    '{url}'                 => $url,
    '{asunto}'              => $asunto,
    '{aviso}'               => "$nombre, tu consulta se ha recibido correctamente en la web de ejemplo.",
    '{explicacion}'         => "Este es un mensaje de ejemplo para confirmar la recepción del formulario.",
    '{contexto}'            => 'Gracias por escribir, ',
    '{razon}'               => 'A continuación se muestran los datos enviados como contenido de demostración.',
    '{nombre}'              => $nombre,
    '{telefono}'            => $telefono,
    '{email}'               => $email,
    '{mensaje}'             => $mensaje,
    '{responder}'           => 'Este texto corresponde a una respuesta automática de ejemplo.',
    '{fecha}'               => $fecha,
];

$cuerpo = str_replace(array_keys($vars), array_values($vars), $html);
include $basePath . "/App/app/envioPhpMailer.php";


// 4 guardar los datos en una BBDD, si el proyecto la ha configurado.
$bbddHost = env('BBDD_HOST');
$bbddUser = env('BBDD_USER');
$bbddPass = env('BBDD_PASS');
$bbddNombre = env('BBDD_BBDD');

if (extension_loaded('mysqli') && $bbddHost && $bbddUser && $bbddNombre) {
    $con = @mysqli_connect($bbddHost, $bbddUser, (string) $bbddPass, $bbddNombre);

    if($con === false){
        error_log('Error de conexion con la DB: ' . mysqli_connect_error());
    }else{
        $con->set_charset("utf8mb4");
        $sql = "INSERT INTO `consultas_web`(`creado_en`, `nombre`, `telefono`, `email`, `mensaje`, `ip`, `idioma`, `url_origen`) VALUES (?,?,?,?,?,?,?,?)";
        $stmt = mysqli_prepare($con, $sql);

        if($stmt === false){
            error_log('Error al preparar la insercion de la consulta: ' . mysqli_error($con));
        }else{
            mysqli_stmt_bind_param($stmt, "ssssssss", $fecha, $nombre, $telefono, $email, $mensaje, $ip, $lang, $url);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }

        mysqli_close($con);
    }
}



// 5 redirigir a la página index para mostrar un mensaje de envío ok, en vez del formulario
// urlencode evita romper la cabecera si el nombre lleva espacios o acentos

enviarRespuestaAsincrona("Gracias por escribirme, $nombre. En breve te contactaré", false, $nombre);







