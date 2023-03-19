<?php

//Llamando a los campos
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$nombre = $_POST['mensaje'];

// datos para el correo
$destinatario = "jaffryjosuerosales@gmail.com";
$asunto = "Contacto desde la pagina web";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $telefono";
$carta .= "Mensaje: $mensaje";

//Enviando mensaje
mail($destinatario, $asunto, $carta);
header('Location:mensaje-enviado.html')
?>