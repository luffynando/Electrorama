<?php
$destino = "al_0990@outlook.com";
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$comentario = $_POST["comentario"];
$contenido = "Nombre: ".$nombre ."\nCorreo: ". $correo . "\nTeléfono: ".$telefono."\nComentario: ".$comentario;

mail($destino,"Contacto",$contenido);
header("Location:gracias.php");

