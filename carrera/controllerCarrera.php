<script src="carrera/carrera.js"></script>  

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<?php

require_once("modeloCarrera.php");
$nombreCarrera=new carrera();
if($_SESSION['pagina']=='Carreras')
{
    $carreras=$nombreCarrera->get_carreras();
    require_once("vistatblCarrera.php");
}
if($_SESSION['pagina']=='Actualizar Carrera')
{
    $id=$_SESSION['id'];
    if($id>0)
    $carreras=$nombreCarrera->get_carrerasid($id);
        require_once("vistaActualizar.php");
        include_once('vistamsgcarrera.php');
}

if($_SESSION['pagina']=='Alta de Carrera')
{
    $id=$_SESSION['id'];
    if($id>0)
    $carreras=$nombreCarrera->get_carrerasid($id);
        require_once("vistacrudCarrera.php");
        include_once('vistamsgcarrera.php');
}

if($_SESSION['pagina']=='Eliminar')
{
    $id=$_SESSION['id'];
    if($id>0)
    $carreras=$nombreCarrera->get_carrerasid($id);
    require_once("vistaEliminar.php");
    include_once('vistamsgcarrera.php');
}
?>