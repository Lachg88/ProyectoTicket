<?php
class tickets{
    
    private $idTicket = 0;
    private $idUsuario = 0;
    private $cn;
    private $tickets;

    public function __construct()
    {
        $miconexion = new Conexion();
        $this->cn = $miconexion->conectar();
        $this->tickets = array();
    }

    public function get_tickets()
    {
        $sql = "select * from ticket";
        $rs = mysqli_query($this->cn, $sql);
        while ($filas = mysqli_fetch_assoc($rs)) {
            $this->tickets[] = $filas;
        }
        mysqli_close($this->cn);
        return $this->tickets;
    }

    public function getTicketxid($id)
    {
        $sql = "select * from ticket where id = $id";
        $rs = mysqli_query($this->cn, $sql);
        while ($filas = mysqli_fetch_assoc($rs)) {
            $this->tickets[] = $filas;
        }
        mysqli_close($this->cn);
        return $this->tickets;
    }

    public function insertarTicket($fecha, $numTicket, $nombre_usuario, $email_cliente, $asunto, $mensaje)
    {
        $sql = "INSERT INTO ticket(fecha, numTicket, nombre_usuario, email_cliente, asunto, mensaje) 
        values('$fecha','$numTicket','$nombre_usuario','$email_cliente','$asunto','$mensaje');";
        $rs = mysqli_query($this->cn, $sql);
        if (!mysqli_error($this->cn)) {
            return "Registro insertado";
        } else {
            return "Error al insertar";
        }
        mysqli_close($this->cn);
    }

    public function updateTicket($id,$fecha, $numTicket, $nombre_usuario, $email_cliente, $asunto, $mensaje)
    {
        $sql = "UPDATE ticket SET 
        fecha ='$fecha', 
        numTicket='$numTicket',
        nombre_usuario='$nombre_usuario', 
        email_cliente='$email_cliente', 
        asunto='$asunto', 
        mensaje='$mensaje' 
        WHERE id='$id';";
        $rs = mysqli_query($this->cn, $sql);
        if (!mysqli_error($this->cn)) {
            return "Ticket Actualizado";
        } else {
            return "Error al Actualizar";
        }
        mysqli_close($this->cn);
    }
}