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
    
    mensaje_error($url, 'artForm01', 'condiciones', 'aceptar', $nombre, $telefono, $email, $mensaje);


}else{
    $terminos = $_POST['terminos'];
}


// comprobación de captcha
$respUser = trim((string) ($_POST['respUser'] ?? ''));
$respSystem = trim((string) ($_POST['respSystem'] ?? ''));
// que venga vacío
if($respUser === '' || $respSystem === ''){
    mensaje_error($url, 'artForm01', 'captcha', 'vacio', $nombre, $telefono, $email, $mensaje);
}
// que la respuesta sea errónea
if($respUser != $respSystem){
    mensaje_error($url, 'artForm01', 'captcha', 'error', $nombre, $telefono, $email, $mensaje);
}




// echo $ip . "<br>";
// echo $fecha;
// die;

// Zona de comprobaciones DEV
// echo $nombre.'<br>'.$telefono.'<br>'.$email.'<br>'.$mensaje.'<br>'.$terminos.'<br>'.$respUser.'<br>'.$respSystem;


// 2 comprobar que los datos son correctos.
// que nombre venga vacío, salimos
if(comprobarVacio($nombre)){
    mensaje_error($url, 'artForm01', 'nombre', 'vacio', $nombre, $telefono, $email, $mensaje);
}
// // que nombre sea menor de 3 y mayor de 40, salimos
if(comprobarCaracteres($nombre, 3, 40)){
    mensaje_error($url, 'artForm01', 'nombre', 'caracteres', $nombre, $telefono, $email, $mensaje);
}

// que teléfono venga vacío, salimos
if(comprobarVacio($telefono)){
    mensaje_error($url, 'artForm01', 'telefono', 'vacio', $nombre, $telefono, $email, $mensaje);
}

// que correo venga vacío, salimos
if(comprobarVacio($email)){
    mensaje_error($url, 'artForm01', 'email', 'vacio', $nombre, $telefono, $email, $mensaje);
}

// // que correo no tenga la forma de un correo, salimos (expresión regular)
if(!comprobarEmailSintaxis($email)){
    mensaje_error($url, 'artForm01', 'email', 'sintaxis', $nombre, $telefono, $email, $mensaje);
}

// que mensaje venga vacío, salimos
if(comprobarVacio($mensaje)){
    mensaje_error($url, 'artForm01', 'mensaje', 'vacio', $nombre, $telefono, $email, $mensaje);
}
// // que mensaje sea menor de 4 y mayor de 200, salimos
if(comprobarCaracteres($mensaje, 4, 200)){
    mensaje_error($url, 'artForm01', 'mensaje', 'caracteres', $nombre, $telefono, $email, $mensaje);
}

// 3 enviar correos de aviso: a la empresa y al propio usuario

// 3.1 enviar un correo al ADMIN DE LA WEB
// recoger más variables que necesita el phpMailer:correo emisor y el nombre emisor,el correo receptor y su nombre, título del correo
$web = app_url($url);
$correoEmisor = env('EMAIL_WEB', '');
$nombreEmisor ="Web Panadería";
$correoDestinatario = env('EMAIL_ADMIN', '');
$nombreDestinatario= "Admin de la web";
$asunto = "Has recibido una nueva consulta en la web de $nombre";

// recoger el template con los placeholders
$html = file_get_contents($basePath . "/App/app/templates/artForm01.html");
// dar el cambiazo a los placeholders por valores definitivos

// array asociativo de las relaciones de placeholders con los valores que tendrá para este correo
$vars = [
    '{web}'                 => $web,
    '{url}'                 => $url,
    '{asunto}'              => $asunto,
    '{aviso}'               => "Has recibido un correo pidiendo información de $nombre. A continuación sus datos. Ha aceptado los términos de privacidad. ",
    '{explicacion}'         => "Has recibido un correo pidiendo información de $nombre. A continuación sus datos. Ha aceptado los términos de privacidad. ",
    '{contexto}'            => 'El cliente es ',
    '{razon}'               => 'Si quieres responderle, escríbele al correo que facilita a continuación',
    '{nombre}'              => $nombre,
    '{telefono}'            => $telefono,
    '{email}'               => $email,
    '{mensaje}'             => $mensaje,
    '{responder}'           => 'Procura responder dentro del plazo de 2 días',
    '{fecha}'               => $fecha,

];
$cuerpo = str_replace(array_keys($vars), array_values($vars), $html);
include $basePath . "/App/app/envioPhpMailer.php";


// 3.2 enviar un correo al USUARIO DE LA WEB
// recoger más variables que necesita el phpMailer:correo emisor y el nombre emisor,el correo receptor y su nombre, título del correo
$web = app_url($url);
$correoEmisor = env('EMAIL_WEB', '');
$nombreEmisor ="Web Panadería";
$correoDestinatario = $email;
$nombreDestinatario= $nombre;
$asunto = "$nombre, hemos recibido tu consulta.";

// recoger el template con los placeholders
$html = file_get_contents($basePath . "/App/app/templates/artForm01.html");
// dar el cambiazo a los placeholders por valores definitivos

// array asociativo de las relaciones de placeholders con los valores que tendrá para este correo
$vars = [
    '{web}'                 => $web,
    '{url}'                 => $url,
    '{asunto}'              => $asunto,
    '{aviso}'               => "$nombre, hemos recibido satisfactóriamente tu consulta.",
    '{explicacion}'         => "En breve nos pondremos en contacto contigo.",
    '{contexto}'            => 'Aquí están los datos que nos has facilitado',
    '{razon}'               => 'Consulta a la Panadería Aginaga',
    '{nombre}'              => $nombre,
    '{telefono}'            => $telefono,
    '{email}'               => $email,
    '{mensaje}'             => $mensaje,
    '{responder}'           => 'Procuraremos responderte en el plazo de 2 días laborales',
    '{fecha}'               => $fecha,
];

$cuerpo = str_replace(array_keys($vars), array_values($vars), $html);
include $basePath . "/App/app/envioPhpMailer.php";


// 4 guardar los datos en una bbdd


// La BBDD es opcional en este stack base. Solo se usa cuando esta configurada.
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

$query = http_build_query([
    'form' => 'artForm01',
    'envio' => 'ok',
    'nombre' => $nombre,
]);

header('Location: ' . $url . '?' . $query . '#artForm01', true, 303);
exit;

