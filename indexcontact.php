<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="Contacto Grupo del valle" content="Contacta con nosotros en grupo del valle">
    <link rel="stylesheet" href="CSS/estilos.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="fonts.css"></link>
    <title>GRUPO DEL VALLE</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.all.min.js"></script>
    <script src="./Javascript/main.js"></script>
    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
   <!--Barra de menu-->
   <header>
    <div class="menu_bar">
      <a href="#" class="bt-menu"><span class="icon-menu"></span><img src="./Imagenes/logo.png" alt="logo" class="logomovil"></a>
    </div>
   
    <nav>
      <ul>
        <li><a href="index.html"><span class="icon-home"></span>Inicio</a></li>
        <li><a href="indexgdelvalle.html"><span class="icon-pie-chart"></span>Grupo del valle</a></li>
        <li class="submenu">
          <a href="#"><span class="icon-office"></span></span>Empresas<span class="caret icon-circle-down"></span></a>
          <ul class="children">
            <li><a href="indextex.html">TEXACO LAS AMERICAS <span class="icon-radio-checked"></span></a></li>
            <li><a href="indexbro.html">BIENES RAICES OLANCHITO <span class="icon-radio-checked"></span></a></li>
            <li><a href="indexjardin.html">JARDIN DE PAZ SAN JORGE <span class="icon-radio-checked"></span></a></li>
            <li><a href="indexcajarural.html">CAJA RURAL DE AHORRO Y CREDITO <span class="icon-radio-checked"></span></a></li>
            <li><a href="indexdepro.html">DEPROHVA <span class="icon-radio-checked"></span></a></li>
            <li><a href="indexdTexs3.html">TEXACO S3-PICNIC <span class="icon-radio-checked"></span></a></li>
            <!--<li><a href="indexdTexs3.html">FDELVALLE<span class="icon-radio-checked"></span></a></li>-->
          </ul>
        </li>
        <li><a href="indexcontact.php"><span class="icon-phone"></span>Contactanos</a></li>
        <a href="index.html"><img src="./Imagenes/logo.png" alt="logo" class="logo"></a>
      </ul>
    </nav>
  </header>
  <!--Formulario de contacto-->
    <section class="form_wrap">

        <section class="cantact_info">
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
                <h2>INFORMACION<br>DE CONTACTO</h2>
            </section>
            <section class="info_items">
                <p><span class="fa fa-envelope"></span>GRUPO DEL VALLE</p>
                <p><span class="fa fa-mobile"></span>+504 ****-****</p>
            </section>
        </section>

        <form method="POST" class="form_contact">
            <h2>Envia un mensaje</h2>
            <div class="user_info">
              <label for="names">Nombres</label>
              <input type="text" id="names" name="nombre" required>
      
              <label for="phone">Telefono</label>
              <input type="text" id="phone" name="telefono" required>
      
              <label for="email">Correo electronico</label>
              <input type="text" id="email" name="email">

              <label for="empresa">Empresa</label>
              <select id="empresa" name="empresa">
                <option value="" selected disabled>Seleccione una opción</option>
                <option value="Bienes Raices Olanchito">Bienes Raices Olanchito</option>
                <option value="Deprovah">Deprohva</option>
                <option value="Jardin de paz san jorge">Jardin De Paz San Jorge</option>
                <option value="Texaco las americas">Texaco Las Americas</option>
                <option value="Caja Rural de ahorro y credito">Caja Rural de Ahorro y Credito</option>
                <option value="Texaco S3-Picnic">Texaco S3-Picnic</option>
              </select>

              <label for="mensaje">Mensaje</label>
              <textarea id="mensaje" name="mensaje" required></textarea>
             
              <input type="submit" value="Enviar Mensaje" id="btnSend" name="enviar_mensaje">
          </div>
        </form>
        <?php
          include("registrar.php")
        ?>
    </section>
    <footer>
        <img src="./Imagenes/logo.png" alt="logo grupo del valle" class="logo-footer">
        <!--<div class="social-icons-container">
          <a href="" class="social-icon"></a>
          <a href="" class="social-icon"></a>
          <a href="" class="social-icon"></a>
        </div>-->
        <ul class="footer-menu-container">
          <li class="menu-item"><a href="index.html">Inicio</a></li>
          <li class="menu-item"><a href="indexcontact.php">Contactanos</a></li>
        </ul> 
        <span class="copyright">&copy;2023, GRUPO DEL VALLE. TODOS LOS DERECHOS RESERVADOS.</span>
      </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
