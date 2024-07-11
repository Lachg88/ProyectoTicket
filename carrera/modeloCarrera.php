<?php
class carrera{
private $idCarrera=0;
private $nombreCarrera="";
private $desc="";
private $cn;
private $carreras;

public function __construct(){
    $miconexion = new Conexion();
    $this->cn = $miconexion->conectar();
    $this->carreras=array();
}

public function get_carreras(){
    $sql = "select * from carrera";
    $rs= mysqli_query($this->cn,$sql);
    while($filas= mysqli_fetch_assoc($rs)){
        $this->carreras[]=$filas;
    }
    mysqli_close($this->cn); 
    return $this->carreras;        
}

public function get_carrerasid($idCarrera){
    $sql = "select * from carrera where idCarrera=".$idCarrera;
    $rs= mysqli_query($this->cn,$sql);
    $filas= mysqli_fetch_assoc($rs);
    $total = mysqli_num_rows($rs);
    if($total>0){
        $this->carreras[]=$filas;
    }
    mysqli_close($this->cn); 
    return $this->carreras;        
}

public function insertar($clave,$nombCarrera,$describc,$nivel,$act,$sigl,$clavedgp){
    $sql = "insert into carrera(clave, nombreCarrera, descripcion,idNivel, activo, siglas, clavedgp) values ($clave,'$nombCarrera','$describc','$nivel',$act,'$sigl','$clavedgp')";
    
    $rs= mysqli_query($this->cn,$sql);
    if (mysqli_error($this->cn)) {
        //Si hay error 
        echo mysqli_error($this->cn);
        $msg ="error db";
    } else {
        $msg = "exito";
    }
    mysqli_close($this->cn); 
    
    return $msg;        
}

public function actualizar($idCarrera,$clave,$nombCarrera,$describc,$nivel,$act,$sigl,$clavedgp){
    $sql = "update carrera set clave='$clave', nombreCarrera='$nombCarrera', descripcion='$describc',idNivel='$nivel', activo=$act, siglas='$sigl', clavedgp='$clavedgp' where idCarrera = $idCarrera";
    $rs= mysqli_query($this->cn,$sql);
    if (mysqli_error($this->cn)) {
        //Si hay error 
        // echo mysqli_error($this->cn);
        $msg ="error db";
    } else {
        $msg = "exito";
    }
    mysqli_close($this->cn); 
    
    return $msg;        
}

public function eliminar($idCarrera){
    $sql = "delete from carrera where idCarrera = $idCarrera";
    $rs= mysqli_query($this->cn,$sql);
    if (mysqli_error($this->cn)) {
        //Si hay error 
       // echo mysqli_error($this->cn);
        $msg ="error db";
    } else {
        $msg = "exito";
    }
    mysqli_close($this->cn); 
    
    return $msg;        
}

}
?>