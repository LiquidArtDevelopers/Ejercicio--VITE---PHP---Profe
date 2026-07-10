<?php

use PHPMailer\PHPMailer\PHPMailer;

$basePath = dirname(__DIR__, 2);
require_once $basePath . '/vendor/autoload.php';

// Los controladores pueden consultar esta variable despues del include.
$envioCorreoOk = false;

$smtpHost = env('HOST');
$smtpUser = env('USERNAME');
$smtpPass = env('PASS');
$mailEnabled = filter_var(env('MAIL_ENABLED', 'true'), FILTER_VALIDATE_BOOLEAN);

if (!$mailEnabled) {
    return;
}

// El stack puede arrancar aunque el correo todavia no este configurado.
if (
    $smtpHost === null
    || $smtpUser === null
    || $smtpPass === null
    || empty($correoEmisor)
    || empty($correoDestinatario)
) {
    error_log('PHPMailer no se ha ejecutado: faltan datos de correo en .env.');
    return;
}

$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = $smtpHost;
    $mail->SMTPAuth = true;
    $mail->Username = $smtpUser;
    $mail->Password = $smtpPass;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;

    $mail->setFrom($correoEmisor, $nombreEmisor);
    $mail->addAddress($correoDestinatario, $nombreDestinatario);
    $mail->isHTML(true);
    $mail->CharSet = PHPMailer::CHARSET_UTF8;
    $mail->Subject = $asunto;
    $mail->Body = $cuerpo;
    $mail->AltBody = 'Mensaje enviado desde el formulario de la web.';

    $logo = $basePath . '/App/app/img/logo.png';
    if (is_file($logo)) {
        $mail->addEmbeddedImage($logo, 'logo');
    }

    $envioCorreoOk = $mail->send();
} catch (Throwable $exception) {
    // Nunca imprimimos aqui: una salida romperia las redirecciones y el JSON AJAX.
    error_log('PHPMailer: ' . $exception->getMessage());
}
