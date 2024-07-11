<?php
//Iniciar una sesion de PHP
	/* establecer la caducidad de la caché a 30 minutos */
	session_cache_expire(60);
	// server should keep session data for AT LEAST 1 hour
	session_start();

    //error_reporting(0);
    error_reporting(1);
	setlocale(LC_ALL,"es_MX");    
	date_default_timezone_set('America/Mexico_City');
	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); 
   // error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
    ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" />    
    <link href="../bootstrap/css/utsv.css" rel="stylesheet" />   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

    <title>UTSV</title>
    <link rel="icon" href="imagen/utsv32.png" />
    <script src="../bootstrap/jquery/jquery-3.5.1.slim.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
 
  </head>
  <body>

<?php include("menuDatos.php");
 $idrol=  strtolower($_SESSION['idrol']) ;
?>
<div class="container2" style="margin-left:10px; margin-top: 10px;">

<br>
<br>
<br>
<br>
<br>
<br>
<h1>Bienvenido al módulo de Datos Maestros </h1>



</div>

<?php include("pieportal.php");?>
  <?php
  //mysqli_close($cn); 
?> 

</body>
</html>
