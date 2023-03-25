<?php
include("con_db.php");

if (isset($_POST['enviar_mensaje'])) {
    if (strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['telefono']) >= 1 &&
        strlen($_POST['empresa']) >= 1 &&
        strlen($_POST['mensaje']) >= 1) {

        $nombre = trim($_POST['nombre']);
        $telefono = trim($_POST['telefono']);
        $email = trim($_POST['email']);
        $empresa = trim($_POST['empresa']);
        $mensaje = trim($_POST['mensaje']);
        $fecha_reg = date("d/m/y");
        $consulta = "INSERT INTO `datos obtenidos`(`nombre`, `telefono`, `email`, `empresa`, `mensaje`, `fecha_reg`)  VALUES ('$nombre','$telefono','$email','$empresa','$mensaje','$fecha_reg')";
        $resultado = mysqli_query($conex, $consulta);

        if ($resultado) {
            ?>
            <script>
                $(document).ready(function(){
                    Swal.fire({
                        icon: 'success',
                        title: 'Tu mensaje se envió correctamente',
                        text: 'Pronto un asesor se pondrá en contacto contigo.',
                        timer: 5000,
                        showConfirmButton: false
                    });
                });
            </script>
            <?php
        } else {
            ?>
            <script>
                $(document).ready(function(){
                    Swal.fire({
                        icon: 'error',
                        title: '¡Ups, ha ocurrido un error!',
                        text: 'Verifica tus datos y rellena todo el formulario.',
                        timer: 5000,
                        showConfirmButton: false
                    });
                });
            </script>
            <?php
        }
    }
}
?>

