<?php
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$mensaje=$_POST['mensaje'];

$mail ="Un comprador se intento contactar con el siguiente mensaje: "$mensaje;
$mail=utf8_decode($mail);
$email ="erick.redhawk@gmail.com";
//Titulo
$titulo = "NOTIFICACION DE CONTACTO";
//cabecera
$headers = "sistema@gmail.com";
//Enviamos el mensaje a tu_dirección_email 
$bool = mail($email,$titulo,$mail,"From: $headers");


?>
