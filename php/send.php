<?php

// Llamando a los campos
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

// datos para el correo
$destinatario = "jaffryjosuerosales@gmail.com";
$asunto = "Contacto desde la página web";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $telefono \n"; // Agregar un salto de línea aquí
$carta .= "Mensaje: $mensaje";

// Enviando mensaje
if (mail($destinatario, $asunto, $carta)) {
  header('Location: mensaje-enviado.html');
} else {
  echo "Error al enviar el mensaje";
}
