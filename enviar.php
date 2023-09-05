<?php
$artista = $_POST['artist'];
$cancion = $_POST['song'];
$email = $_POST['email'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $email . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'vpetrucci2016@gmail.com';
$asunto = 'Canciones para Chile';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:request.html");
?>