<script src="./moduloTickets/public/build/js/tickets.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

<?php
require_once("moduloTickets/models/modeloTickets.php");
$objticket = new tickets();

if ($_SESSION['pagina'] == '') {
    require_once("moduloTickets/views/vistaFinal.php");
}

if ($_SESSION['pagina'] == 'Ticket') {
    $tickets = $objticket->get_tickets();
    require_once("moduloTickets/views/vistatbltickets.php");
}

if ($_SESSION['pagina'] == 'UsuarioTicket') {
    // $tickets = $objticket->get_tickets();
    require_once("moduloTickets/views/vistaFinal.php");
}

if ($_SESSION['pagina'] == 'Alta de Ticket' || $_SESSION['pagina'] == 'Actualizar Ticket') {
    $id = $_SESSION['id'];
    
    if ($id > 0)
        $tickets = $objticket->getTicketxid($id);
    require_once("moduloTickets/views/vistaAlta.php");
    include_once('moduloTickets/views/vistamsgtickets.php');
}

if ($_SESSION['pagina'] == 'Eliminar Ticket') {
    $id = $_SESSION['id'];
    if ($id > 0)
        $tickets = $objticket->getTicketxid($id);
    require_once("moduloTickets/views/vistaEliminar.php");
    include_once('moduloTickets/views/vistamsgtickets.php');
}
