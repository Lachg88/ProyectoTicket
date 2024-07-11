<div style="width:100%; padding: 0% 5% 5% 5%;">
    <div class="d-flex justify-content-end">
        <a href="index.php?pag=Alta de Ticket" alt="Agregar" class="btn btn-rounded btn-primary" style="width: 17%;">
            <i class="fa fa-plus"></i> Nueva Pregunta
        </a>
    </div>
    <table id="example" class="table table-bordered" style="font-size:12px;border-color:#4772e7">
        <br>
        <thead style="font-size:12px">
            <tr style="overflow: hidden;text-align: center">
                <th>ID</th>
                <th>FECHA TICKET</th>
                <th>NUMERO DE TICKET</th>
                <th>ESTADO</th>
                <th>NOMBRE USUARIO</th>
                <th>CORREO CLIENTE</th>
                <th>DEPARTAMENTO</th>
                <th>ASUNTO</th>
                <th>MENSAJE</th>
                <th>SOLUCION</th>
                <th>OPCIONES</th>
            </tr>
        </thead>
        <tbody style="font-size:12px">
            <?php
            foreach ($tickets as $ticket) { ?>
                <tr>
                    <td style="text-align:center;"><?php echo $ticket['id']; ?></td>
                    <td style="text-align:center;"><?php echo $ticket['fecha']; ?></td>
                    <td style="text-align:center;"><?php echo $ticket['numTicket']; ?></td>
                    <td style="text-align:center;"><?php echo $ticket['estado_ticket']; ?></td>
                    <td style="text-align:center;"><?php echo $ticket['nombre_usuario']; ?></td>
                    <td style="text-align:center;"><?php echo $ticket['email_cliente']; ?></td>
                    <td style="text-align:center;"><?php echo $ticket['departamento']; ?></td>
                    <td style="text-align:center;"><?php echo $ticket['asunto']; ?></td>
                    <td style="text-align:center;"><?php echo $ticket['mensaje']; ?></td>
                    <td style="text-align:center;"><?php echo $ticket['solucion']; ?></td>
                    <td style="text-align:center;">
                        <a href="index.php?pag=Actualizar Ticket&id=<?php echo $ticket['id'] ?>" alt="Actualizar" class="btn btn-small btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="index.php?pag=Eliminar Ticket&id=<?php echo $ticket['id'] ?>" alt="Eliminar" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                    </td>
                <?php } ?>
                </tr>
        </tbody>
    </table>
</div>