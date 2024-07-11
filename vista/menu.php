<?php
if (isset($_SESSION['idrol'])) {
  $rol =  strtolower($_SESSION['rol']);
  $idrol = $_SESSION['idrol'];
  //$nombrePeriodo = $_SESSION['nombrePeriodo'];
?>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#278A49">
      <a class="navbar-brand" href="#" style="font-size:16px; color: white;background-color:#278A49">
        <b>Soporte Técnico</b>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mr-auto" style="font-size:16px; color: white;background-color:#278A49">


          <li class="nav-item">&nbsp &nbsp
          </li>
          <!--  <li class="nav-item">
      <span style="font-size:16px; color: white;background-color:green" > <i class="fa fa-home" ></i> </span>
      </li> -->
          <li class="nav-item">
            <a style="font-size:16px; color: white;background-color:#278A49" class="nav-link" href="../portal.php">
              <i style="font-size:20px; color: black;" class="fa fa-home"></i>&nbsp</a>
          </li>



          <!--<li class="nav-item dropdown" >
        <a style="color:white" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <b> Información </b>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../info/avisoprivacidad.pdf" target="_blank">Aviso de Privacidad</a>
         
        </div>
      </li>-->



          <li class="nav-item dropdown">
            <a style="color:white" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <b>Administración </b>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">


              <!--<a class="dropdown-item" href="index.php?pag=Categorias">Categorias</a>
          <a class="dropdown-item" href="index.php?pag=Departamento">Departamentos</a> -->

              <a class="dropdown-item" href="index.php?pag=Periodos">Periodos</a>
              <a class="dropdown-item" href="index.php?pag=Ticket">Tickets</a>
              <!--<a class="dropdown-item" href="index.php?pag=Personas">Personas</a>         
          <a class="dropdown-item" href="index.php?pag=Modulos">Apertura de Modulos</a>-->




              <!--<a class="dropdown-item" href="/utsv/vinculacion/rptestadiasporperiodo.php">Alumnos en Estadias</a>                    
        <a class="dropdown-item" href="/utsv/ctrlescolar/rptegresadosxcarrera.php">Alumnos Egresados</a> -->
            </div>
          </li>




          <li class="nav-item dropdown">
            <a style="color:white" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <b>Servicios Escolares</b>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <!-- <a class="dropdown-item" href="./index.php?pag=Escuelas">Escuelas de Aspirantes</a>-->

              <a class="dropdown-item" href="./index.php?pag=Oferta Educativa">Oferta Educativa</a>
              <a class="dropdown-item" href="index.php?pag=Carreras">Carreras</a>
              <!--<a class="dropdown-item" href="index.php?pag=planE">Planes</a>     -->



            </div>
          </li>

          <li class="nav-item dropdown">
            <a style="color:white" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <b>Seguridad</b>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <!--<a class="dropdown-item" href="#">Roles </a>
        <a class="dropdown-item" href="./index.php?pag=Rol Usuario">Roles Usuarios</a>
        <a class="dropdown-item" href="#">Permisos</a>-->
            </div>
          </li>

          <li class="nav-item dropdown">
            <a style="color:white" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <b>Vinculación</b>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

              <!-- <a class="dropdown-item" href="index.php?pag=Empresa">Empresa Estadías</a>-->

            </div>
          </li>

          <?php



          if ($idrol == 19 || $idrol == 1) {
          ?>
            <!--<li class="nav-item dropdown">
        <a style="color:white" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <b> Reportes </b>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">Reporte 1</a> 
        <a class="dropdown-item" href="#">Reporte 2</a>   
        <a class="dropdown-item" href="#">Reporte 3</a>   
      </div>
      </li>-->
          <?php
          }
          ?>

        </ul>

        <ul class="nav navbar-nav navbar-right" style="font-size:18px; color: white;background-color:#278A49">

          <li> <span style="font-size:20px; color: black;"> <i class="fa fa-user"></i> </span>
            <b> <?php echo strtoupper($_SESSION['nombrecompleto']); ?></b>
            &nbsp &nbsp
          </li>
          <li>
            <a href="#" onclick="document.getElementById('idCerrar').style.display='block'" style="color:white">
              <span style="font-size:20px; color: black;"> <i class="fa fa-power-off "></i> </span>
              <b> SALIR </b>
            </a>
          </li>
        </ul>

      </div>

    </nav>
    <div id="idCerrar" class="modal" style="width:80%;left: 10%;">
      <span onclick="document.getElementById('idCerrar').style.display='none'" class="closemodal" title="Aviso">&times;</span>
      <form class="modal-content" action="../cerrarSesion.php">
        <div class="containermodal">
          <h1>Cerrar Sesión</h1>
          <p>¿Estas seguro de salir?</p>

          <div class="clearfix">
            <button type="button" class="cancelbtnmodal" onclick="document.getElementById('idCerrar').style.display='none'">Cancelar</button>
            <button type="submit" class="cerrarbtnmodal">Cerrar Sesión</button>
          </div>
        </div>
      </form>
    </div>
  <?php
} else {
  echo 'La sesión ha expirado o esta sección está restringida y 
     solo permitida para usuarios autorizados, gracias.';
}
  ?>
  <script>
    // Get the modal
    var modal = document.getElementById('idCerrar');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>