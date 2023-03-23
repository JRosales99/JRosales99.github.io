<?php 
	$nombre = $_POST['nombre'];
	$telefono = $_POST['telefono'];
  $correo = $_POST['email'];
	$asunto = 'Formulario Rellenado';
	$mensaje = "Nombre: ".$nombre."<br> Email: $correo <br> Mensaje:".$_POST['mensaje'];


	if(mail('jaffryjosuerosales@gmail.com', $asunto, $mensaje)){
		echo "Correo enviado";
	}
 ?>