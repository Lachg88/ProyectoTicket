<?php
session_start();
ini_set('max_execution_time', 300);
error_reporting(1);

date_default_timezone_set('America/Mexico_City');

$opc = $_REQUEST['opcion'];
include_once('../../Conexion.php');

if ($opc == 'Guardar') {
    require_once("modeloTickets.php");
    $tick = new tickets();

    $fecha = $_REQUEST['fecha'];
    $numTicket = $_REQUEST['numTicket'];
    $nombre_usuario = $_REQUEST['nombre_usuario'];
    $email_cliente = $_REQUEST['email_cliente'];
    $asunto = $_REQUEST['asunto'];
    $mensaje = $_REQUEST['mensaje'];

    echo $msg = $tick->insertarTicket($fecha, $numTicket ,$nombre_usuario, $email_cliente, $asunto, $mensaje);
}
if ($opc == 'Actualizar') {
    require_once("modeloTickets.php");
    $tick = new tickets();

    $id=$_REQUEST['id'];
    $fecha = $_REQUEST['fecha'];
    $numTicket = $_REQUEST['numTicket'];
    $nombre_usuario = $_REQUEST['nombre_usuario'];
    $email_cliente = $_REQUEST['email_cliente'];
    $asunto = $_REQUEST['asunto'];
    $mensaje = $_REQUEST['mensaje'];

    echo $msg = $tick->updateTicket($id,$fecha, $numTicket ,$nombre_usuario, $email_cliente, $asunto, $mensaje);
}