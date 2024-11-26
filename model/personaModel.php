<?php
require_once "../librerias/conexion.php";
class personaModel{

    private $conexion;
    function __construct(){
        $this->conexion =new Conexion();
        $this->conexion =$this->conexion->connect();
    }
    public function registrarPersona($nro_identidad, $razon_social,$telefono,$correo,$departamento,$provincia,$distrito,$cod_postal,$direccion,$rol,$contraseña,$estado,$fecha_reg){
        $sql=$this->conexion->query("CALL insertarPersona('{$nro_identidad}','{$razon_social}','{$telefono}','{$correo}','{$departamento}','{$provincia}','{$distrito}','{$cod_postal}','{$direccion}','{$rol}','{$contraseña}','{$estado}','{$fecha_reg}')");
         $sql  = $sql->fetch_object();
         return $sql;
    }

    public function obtener_Persona($id){
        $respuesta = $this->conexion->query("SELECT * FROM persona WHERE id='{$id}'");
        $objeto = $respuesta->fetch_object();
        return $objeto;
    }
    
}
class trabajadorModel{

    private $conexion;
    function __construct()
    {
        $this->conexion =new Conexion();
        $this->conexion =$this->conexion->connect();
    }
    public function obtener_trabajador(){
        $arrRespuesta = array();
        $respuesta = $this->conexion->query( "SELECT * FROM persona WHERE rol =  'trabajador'");

        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta, $objeto);
        }
        return  $arrRespuesta;
    }
}


?>