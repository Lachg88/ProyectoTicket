<?php
// include('conexion.php');
$id = $_SESSION['id'];

$miconexion = new Conexion();
$cn = $miconexion->conectar();

// Obtiene el último número de ticket
$resultado = $cn->query("SELECT MAX(numTicket) FROM ticket");
$ultimo_numero = $resultado->fetch_row()[0];

// Obtiene los datos del ticket

// Incrementa el último número y lo formatea
$campo2 = str_pad($ultimo_numero + 1, 5, '0', STR_PAD_LEFT);

// Cierra la conexión
$cn->close();
if ($id > 0) {
    $campo0 = $tickets[0]['id'];
    $campo1 = $tickets[0]['fecha'];
    $campo2 = $tickets[0]['numTicket'];
    $campo3 = $tickets[0]['estado_ticket'];
    $campo4 = $tickets[0]['nombre_usuario'];
    $campo5 = $tickets[0]['email_cliente'];
    $campo6 = $_SESSION['rol'];
    $campo7 = $tickets[0]['asunto'];
    $campo8 = $tickets[0]['mensaje'];
    $campo9 = $tickets[0]['solucion'];
} else {
    $campo0 = "";
    $campo1 = "";
    $campo2 = $campo2;
    $campo3 = "";
    $campo4 = $_SESSION['nombrecompleto'];
    $campo5 = $_SESSION['emailpersona'];
    $campo6 = $_SESSION['rol'];
    $campo7 = "";
    $campo8 = "";
    $campo9 = "";
}

//var_dump($_SESSION);

date_default_timezone_set('America/Mexico_City');
$fecha = date("Y-m-d H:i:s");
$meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
$fecha_actual = getdate();
$fecha_actual_completa = $fecha_actual['mday'] . " de " . $meses[$fecha_actual['mon'] - 1] . " del " . $fecha_actual['year'];

?>
<section class="contenedor-form-altas">
    <div class="form1-altas">
        <div class="form1">
        <header class="form1-header">
            <p>Registro de Incidencia</p>
        </header>
        <div class="form1-body">
        <form id="formulario1" name="formulario1" method="post">
            <input type="hidden" name="id" id="id" value="<?php echo $campo0; ?>">
            <div class="form-group
                <?php if (isset($_SESSION['error'])) {
                    echo 'has-error';
                } ?>">
                <label for="fecha">Fecha Ticket</label>
                <input class="form-control" type="text" id="fecha" value="<?php echo $fecha_actual_completa; ?>" placeholder="Fecha" name="fecha" required readonly>
                <!-- <span class="input-group-addon"><i class="fa fa-calendar"></i></span> -->
            </div>
            <div class="form-group <?php if (isset($_SESSION['error'])) {
                                        echo 'has-error';
                                    } ?>">
                <label for="numTicket">Número Ticket</label>
                <input type="number" class="form-control" id="numTicket" name="numTicket" value="<?php echo $campo2; ?>" required readonly>
            </div>
            <div class="form-group <?php if (isset($_SESSION['error'])) {
                                        echo 'has-error';
                                    } ?>">
                <label for="nombre_usuario">Nombre Usuario</label>
                <input type="text" class="form-control" id="nombre_usuario" name="nombre_usuario" value="<?php echo $campo4; ?>" required>
            </div>
            <div class="form-group <?php if (isset($_SESSION['error'])) {
                                        echo 'has-error';
                                    } ?>">
                <label for="email_cliente">Correo Cliente</label>
                <input type="text" class="form-control" id="email_cliente" name="email_cliente" value="<?php echo $campo5; ?>" required>
            </div>
            <div class="form-group <?php if (isset($_SESSION['error'])) {
                                        echo 'has-error';
                                    } ?>">
                <label for="rol">Rol</label>
                <input type="text" class="form-control" id="rol" name="rol" value="<?php echo $campo6; ?>" required>
            </div>
            <div class="form-group <?php if (isset($_SESSION['error'])) {
                                        echo 'has-error';
                                    } ?>">
                <label for="asunto">Asunto</label>
                <input type="text" class="form-control" id="asunto" name="asunto" value="<?php echo $campo7; ?>" required>
            </div>
            <div class="form-group <?php if (isset($_SESSION['error'])) {
                                        echo 'has-error';
                                    } ?>">
                <label for="mensaje">Descripción del problema</label>
                <input type="text" class="form-control" id="mensaje" name="mensaje" value="<?php echo $campo8; ?>" required>
            </div>
            <div class="mb-3">
                <!-- Tu contenido aquí -->
                <div class="form1-botones">
                    <div class="col-md-3">
                        <input type="Submit" class="btn btn-primary btn-block" value="<?php if ($_SESSION['pagina'] == 'Alta de Ticket') echo "Guardar";
                                                                                                                else echo "Actualizar"; ?>" name="btnEnviar" id="btnEnviar">
                    </div>
                    <div class="col-md-3">
                        <a href="index.php?pag=UsuarioTicket" class="btn btn-danger btn-block">Regresar</a>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </div>
    </div>
</section>