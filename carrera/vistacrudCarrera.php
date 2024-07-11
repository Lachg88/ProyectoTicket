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
    $campo7 = $carreras[0]['clavedgp'];
    
}else
{
    $campo1 = "";
    $campo2 = "";
    $campo3 = "";
    $campo4 = "";
    $campo40 = "";
    $campo5 = "";
    $campo6 = "";
    $campo7 = "";
  
}
  
?>
<div class="container" style="padding: 20px 20px;">
    <form action="#" method="post" id="formulario1" name="formulario1" class="needs-validation" novalidate>
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span style="font-size: 18px; color: #4772e7;" class="input-group-text"> <i class="fa fa-user"></i>
                </span>
            </div>
            <input name="idCarrera" class="form-control" placeholder="ID" type="text" Readonly
                value="<?php echo $campo1;?>" required>
        </div>

        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span style="font-size: 18px; color: #4772e7;" class="input-group-text"> <i class="fa fa-key"></i>
                </span>
            </div>
            <input type="number" name="clave" class="form-control" placeholder="Ingrese Numero clave" pattern="\{1,99}/"
                value="<?php echo $campo2;?>" required>
           
        </div>

        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span style="font-size: 18px; color: #4772e7;" class="input-group-text"> <i class="fa fa-key"></i>
                </span>
            </div>
            <input type="number" name="clavedgp" class="form-control" placeholder="Ingrese la clave DGP" pattern="\{1,99}/"
                value="<?php echo $campo7;?>" required>
           
        </div>

        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span style="font-size: 18px; color: #4772e7;" class="input-group-text"> <i
                        class="fa fa-graduation-cap"></i> </span>
            </div>
            <input type="text" name="nombre" class="form-control" placeholder="Ingrese Nombre Carrera"
                pattern="[a-zA-ZÀ-ÿ\s.,]{1,120}" value="<?php echo $campo3;?>" required>
           
        </div>

        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span style="font-size: 18px; color: #4772e7;" class="input-group-text"> <i class="fa fa-comment"></i>
                </span>
            </div>
            <input type="text" name="descripcion" class="form-control" placeholder="Ingrese Descripción"
                pattern="[a-zA-ZÀ-ÿ\s.,]{1,120}" value="<?php echo $campo4;?>" required>
           
        </div>

        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span style="font-size: 18px; color: #4772e7;" class="input-group-text"> <i class="fa fa-list"></i>
                </span>
            </div>
            <select class='custom-select' name="idNivel" style='width:100px;' required>
                <option selected disabled value="">Seleccionar Nivel</option>
                <option value="1" <?php if ($campo40==1) echo"selected";?>>TSU</option>
                <option value="2" <?php if ($campo40==2) echo"selected";?>>INGENIERÍA</option>
            </select>
        </div>


        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span style="font-size: 18px; color: #4772e7;" class="input-group-text"> <i class="fa fa-list"></i>
                </span>
            </div>
            <select name="activo" class="form-control" required>
            <option selected disabled value="">Seleccionar el estado de la carrera</option>
                <option value="1" <?php if ($campo5==1) echo"selected";?>>Activo</option>
                <option value="0" <?php if ($campo5==0) echo"selected";?>>Inactivo</option>
            </select>
        </div>

        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span style="font-size: 18px; color: #4772e7;" class="input-group-text"> <i
                        class="fa fa-text-width"></i> </span>
            </div>
            <input type="text" name="siglas"  maxlength="3" class="form-control" placeholder="Ingrese Siglas"
                pattern="[a-zA-ZÀ-ÿ\s]{1,3}" value="<?php echo $campo6;?>" required>
          
           
        </div>

        

        <div class="row">
            <div class="cols-4">
                <input style="font-size: 18px;" type="Submit" class="btn btn-primary btn-block" value="Guardar"
                    name="btnEnviar" id="btnEnviar">
            </div>
            <div class="cols-4" style="overflow: hidden;text-align: center;margin-left: 2em;width:150px;">
                <?php echo "<a href='index.php?pag=Carreras' class='btn btn-dark'>REGRESAR</a>";  ?>
            </div>
    </form>
</div>
<div>
</div>
</div>


<script>
// Validacion de que los campos no se puedan enviar vacios
(() => {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated')
        }, true)
    })
})()
</script>