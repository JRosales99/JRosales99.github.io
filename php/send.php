<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtener los campos del formulario y filtrar los datos
  $nombre = htmlspecialchars(trim($_POST["nombre"]));
  $telefono = htmlspecialchars(trim($_POST["telefono"]));
  $correo = htmlspecialchars(trim($_POST["correo"]));
  $mensaje = htmlspecialchars(trim($_POST["mensaje"]));

  // Validar los datos del formulario
  $errores = [];

  if (empty($nombre)) {
    $errores[] = "El nombre es obligatorio.";
  }

  if (empty($telefono)) {
    $errores[] = "El teléfono es obligatorio.";
  }

  if (empty($correo) || !filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    $errores[] = "El correo electrónico no es válido.";
  }

  if (empty($mensaje)) {
    $errores[] = "El mensaje es obligatorio.";
  }

  // Si hay errores, mostrarlos en la página de contacto
  if (!empty($errores)) {
    foreach ($errores as $error) {
      echo "<p>$error</p>";
    }
  } else {
    // Enviar el correo electrónico si no hay errores
    $destinatario = "jaffryjosuerosales@gmail.com";
    $asunto = "Contacto desde la página web";

    $cabeceras = "From: $nombre <$correo>\r\n";
    $cabeceras .= "Reply-To: $correo\r\n";

    $mensaje_correo = "Nombre: $nombre\n";
    $mensaje_correo .= "Teléfono: $telefono\n";
    $mensaje_correo .= "Correo: $correo\n\n";
    $mensaje_correo .= "Mensaje:\n$mensaje";

    // Enviar el correo electrónico
    if (mail($destinatario, $asunto, $mensaje_correo, $cabeceras)) {
      header("Location: mensaje-enviado.html");
    } else {
      echo "<p>Error al enviar el mensaje. Por favor, inténtelo de nuevo más tarde.</p>";
    }
  }
} else {
  // Si se intenta acceder al archivo PHP directamente, redirigir a la página de contacto
  header("Location: contacto.html");
}

?>

