<?php
$id=$_SESSION['id'];
if($id>0)
{
    $campo1 = $carreras[0]['idCarrera'];
    $campo2 = $carreras[0]['clave'];
    $campo3 = $carreras[0]['nombreCarrera'];
    $campo4 = $carreras[0]['descripcion'];
    $campo40 = $carreras[0]['idNivel'];
    $campo5 = $carreras[0]['activo'];
    $campo6 = $carreras[0]['siglas'];
    $campo7 = $carreras[0]['claveDGP'];
}else
{
    $campo1 = "";
    $campo2 = "";
    $campo3 = "";
    $campo4 = "";
    $campo40 ="";
    $campo5 = "";
    $campo6 = "";
    $campo7 = "";
  
}
  
?>
<div class="container" style="padding: 20px 20px;">
	<form action="#" method="post"  
    id="formulario3" name="formulario2" class="needs-validation" novalidate>
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span style="font-size: 18px; color: #4772e7;" class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="idCarrera" class="form-control" placeholder="ID" type="text" Readonly value="<?php echo $campo1;?>"  required>
    </div>

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span style="font-size: 18px; color: #4772e7;" class="input-group-text"> <i class="fa fa-key"></i> </span>
		 </div>
        <input type="number" name="clave" class="form-control" placeholder="Ingrese Numero clave" Readonly value="<?php echo $campo2;?>" required>
    </div> 

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span style="font-size: 18px; color: #4772e7;" class="input-group-text"> <i class="fa fa-key"></i> </span>
		 </div>
        <input type="number" name="clavedgp" class="form-control" placeholder="Ingrese Numero clave" Readonly value="<?php echo $campo7;?>" required>
    </div> 
    
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span style="font-size: 18px; color: #4772e7;" class="input-group-text"> <i class="fa fa-graduation-cap"></i> </span>
		 </div>
        <input type="text" name="nombre" class="form-control" placeholder="Ingrese Nombre Carrera" Readonly value="<?php echo $campo3;?>" required>
    </div> 

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span style="font-size: 18px; color: #4772e7;" class="input-group-text"> <i class="fa fa-comment"></i> </span>
		 </div>
        <input type="text" name="descripcion" class="form-control" placeholder="Ingrese Descripción" Readonly value="<?php echo $campo4;?>" required>
    </div>

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span style="font-size: 18px; color: #4772e7;" class="input-group-text"> <i class="fa fa-comment"></i> </span>
		 </div>
        <input type="text" name="idNivel" class="form-control" placeholder="Ingrese el nivel" Readonly value="<?php echo $campo40;?>" required>
    </div>

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span style="font-size: 18px; color: #4772e7;" class="input-group-text"> <i class="fa fa-list"></i> </span>
		 </div>
        <input type="number" name="activo" class="form-control" placeholder="Ingrese Activo" Readonly value="<?php echo $campo5;?>" required>
    </div>

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span style="font-size: 18px; color: #4772e7;" class="input-group-text"> <i class="fa fa-text-width"></i> </span>
		 </div>
        <input type="text" name="siglas" class="form-control" placeholder="Ingrese Siglas" Readonly value="<?php echo $campo6;?>" required>
    </div>
   
    <div class="row">
    <div class="cols-4">
		<input style="font-size: 18px;" type="Submit" class="btn btn-primary btn-block" 
         value="Eliminar" name="btnEliminar" id="btnEliminar"
        >
    </div> 
    <div class="cols-4" style="overflow: hidden;text-align: center;margin-left: 2em;width:150px;">
    <?php echo "<a href='index.php?pag=Carreras' class=btn btn-dark'>REGRESAR</a>";  ?>	
    </div>                                                    
</form>
</div>
</div>