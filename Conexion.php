<?php

class Conexion {

    var $BaseDatos;
    var $Servidor;
    var $Usuario;
    var $Clave;
    /* identificador de conexión y consulta */
    var $Conexion_ID;

    /* número de error y texto error */
    var $Errno = 0;
    var $Error = "";

    function conectar() {

        $this->BaseDatos = "sigu4_mayo2024";
        $this->Servidor = "localhost";
        $this->Usuario = "root";
        $this->Clave = "1234"; 

        $this->Conexion_ID = mysqli_connect($this->Servidor, $this->Usuario, $this->Clave);
        if (!$this->Conexion_ID) {
            $this->Error = "Ha fallado la conexion al servidor:".$this->Servidor;
            return 0;
        }

        if (!@mysqli_select_db($this->Conexion_ID,$this->BaseDatos)) {
            $this->Error = "Imposible abrir " . $this->BaseDatos;
            return 0;
        }
		
		//mysqli_query($this->Conexion_ID,"SET NAMES 'utf8'");
		
        return $this->Conexion_ID;
    }	
    public function setNames(){
        return $this->Conexion_ID->query("SET NAMES 'utf8'");
    }
}

?>
