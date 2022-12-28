<?php

$destino = "maurolores1992@gmail.com";
$asunto = 'Mensaje de mauriciolores.com';

$nombre = $_POST ['nombre'];
$email = $_POST ['email'];
$textarea = $_POST ['textarea'];

$header = "Envio desde formulario de contacto de mauriciolores.com.ar";
$mensaje = "Nombre: " . $nombre . "\n" . "Email: " . $email . "\n" . "\n" . "Mensaje : " . $textarea;

mail($destino, $header, utf8_decode($mensaje));
header('Location: exito.html');

?>

