<!DOCTYPE html>
<html lang="es">
<head>
  <meta name="viewport" content="with-device-with, initial-scale=1"> <!-- tipo de tamaño estamos entrando al sitio, agarra ancho del dispositivo, con la escala 1 -->
  <!--Imagenes-->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="javascript.js"></script>
    <link href="style.css" type="text/css" rel="stylesheet">
    <!--ImagenesFinal-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="type/icons.css">
  <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
  
  <!-- <link href="https://vjs.zencdn.net/7.2/video-js.min.css" rel="stylesheet"> -->
  <!-- <script src="https://vjs.zencdn.net/7.2/video.min.js"></script> -->

  <link rel="stylesheet" href="dist/css/video-js.css">
  <script src="dist/js/video.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
  <link rel="stylesheet" href="dist/css/estilos.css">
</head>
<style type="text/css">
    /*Css pertenece a relleno*/
  .main{
    padding: 80px 120px;
  } 

/* Black buttons with extra padding and without rounded borders */
  .btn { 
    padding: 10px 20px;
    background-color: #ffffff;
    color: #ffffff;
    border-radius: 0;
    transition: .2s;

  }
  /* On hover, the color of .btn will transition to white with black text */
  .btn:hover, .btn:focus {
    border: 1px solid #333;
    background-color: #fff;
    color: #ffffff;
  }

    /* Add a dark background color with a little bit see-through */
  .navbar {
    margin-bottom: 0;
    background-color: #2d2d30;
    border: 0;
    font-size: 13px !important;
    letter-spacing: 4px;
    opacity: 0.9;
  }

  /* Add a gray color to all navbar links */ 
  .navbar li a, .navbar .navbar-brand { 
    color: #d5d5d5 !important;
  }
   

</style>

  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" type="image/png" href="img/icono.png" />
  </head>
  <body  >
    <!-- Barra de navegación -->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>

        </button>
        <br>
        <img src="Imagenes/lc.png" class="img" alt="lc" width="50" height="50">
        <a class="navbar-brand" href="#">Hotel Los Chenes</a>
        
      </div>
      <br>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.html">INICIO</a></li>
          <li><a href="index.html">SERVICIOS</a></li>
          <li><a href="inicioSesion.php">RESERVACIONES</a></li>
          <li><a href="index.php">CONÓCENOS</a></li>
        </ul>
      </div>
    </div>
    <br>
  </nav> 
  <center>
    <div class="error">
      <span>Datos de ingreso no válidos, inténtelo de nuevo  por favor</span>
    </div>
    <div class="main" >
   
     <form action="verificar.php" id="formLg" method="POST">
     
     <p><b><h1>Iniciar Sesión</h1><br></p>
      <br>
        <label>Dirección de Correo Electrónico</label>
        <br><br>
        <input type="text" name="username" required>
        <br><br>
        <label>Contraseña</label>
        <br><br>
        <input type="password" name="clave" required>
        <input type="submit" style="background-color: black;" class="btn"  value="Iniciar sesion" >
     </form>
    </div>
  </center>
  </body>
</html>
