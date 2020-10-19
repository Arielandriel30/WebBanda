<?php
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$mensaje=$_POST['mensaje'];

$cuerpo_mail="Nombre: ".$nombre."\r\n"."Correo: ".$correo."\r\n"."Mensaje: ".$mensaje;
$remitente="From $nombre <$correo>";

mail("soporte@itxeon.com", "Consulta enviada desde www.itxeon.com", $cuerpo_mail, $remitente);
?>