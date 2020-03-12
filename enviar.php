<?php  


// Llamando a los campos
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$apellido = $_POST['apellido'];
$mensaje = $_POST['mensaje'];

// Datos para el correo
$destinatario = "rica150203@gmail.com";
$asunto = "Contacto desde nuestra web SCD";

$carta = "De: $nombre $apellido\n";
$carta .= "Correo: $correo \n";
$carta .= "Mensaje: $mensaje";

// Enviando Mensaje
mail($destinatario, $asunto, $carta);
header('Location:mensajedeenvio.html');

?>