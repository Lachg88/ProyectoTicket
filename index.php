<?php
session_start();
$crud = "";
$_SESSION['idrol'] = 1;
$idrol = $_SESSION['idrol'];
$_SESSION['rol'] = "Pruebas";
$_SESSION['nombrecompleto'] = "Team SIGU";
$_SESSION['clavepersona'] = 411;
$_SESSION['emailpersona'] = 'mesaayuda@utsv.edu.mx';

$clavepersona = $_SESSION['clavepersona'];
$pagina = "";


include_once('vista/header.php');
//include_once('vista/menu.php');
include_once('vista/menuDatos.php');

if (isset($_REQUEST['pag'])) {
   if (isset($_REQUEST['id']))
      $_SESSION['id'] = $_REQUEST['id'];
   else
      $_SESSION['id'] = 0;

   $pag = $_REQUEST['pag'];
   $_SESSION['pagina'] = $pag;

   switch ($pag) {
      case 'Ticket':
      case 'UsuarioTicket':
      case 'Alta de Ticket':
      case 'Actualizar Ticket':
      case 'Eliminar Ticket':
      case 'Vista Ticket':
         $_SESSION['linkpagina'] = "index.php?pag=Ticket";
         include('moduloTickets/tickets.php');
         break;
      default:
      echo "index.php";

   }
}
else {
   include("moduloTickets/views/vistaFinal.php");
}
include_once('vista/footer.php');
