<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>}<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Teléfono de contacto: " . $phone . " \r\n";
$message .= "Mensaje: " . $_POST['message'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'Valeria.garcia9069@est.uca.edu.ni';
$asunto = 'Mensaje de... (Escribe como quieres que se vea el remitente de tu correo)';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");
?>
-->
</body>
</html>