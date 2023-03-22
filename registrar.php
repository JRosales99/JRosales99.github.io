<?php
include("con_db.php");

if (isset($_POST['enviar_mensaje'])) {
    if (strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['telefono']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['mensaje']) >= 1) {

        $nombre = trim($_POST['nombre']);
        $telefono = trim($_POST['telefono']);
        $email = trim($_POST['email']);
        $mensaje = trim($_POST['mensaje']);
        $fecha_reg = date("d/m/y");
        $consulta = "INSERT INTO `datos obtenidos`(`nombre`, `telefono`, `email`, `mensaje`, `fecha_reg`)  VALUES ('$nombre','$telefono','$email','$mensaje','$fecha_reg')";
        $resultado = mysqli_query($conex, $consulta);
        if ($resultado) {
            ?>
            <h3 class="enviado">Tu mensaje se envió correctamente, pronto un asesor se pondrá en contacto contigo.</h3>
            <?php
        } else {
            ?>
            <h3 class="bad">¡Ups, ha ocurrido un error, verifica tus datos y rellena todo el formulario!</h3>
            <?php
        }
    }
}
?>
