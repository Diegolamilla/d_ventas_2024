<?php 
require_once('../model/personaModel.php');
$tipo=$_REQUEST['tipo'];
$objPersona = new PersonaModel();
$objproveedor = new trabajadorModel();

if ($tipo=="registrar") {
    /* print_r($_POST);
    echo $_FILES['imagen']['tmp_name']; */

    if($_POST){
        $nro_identidad = $_POST['razon_social'];
        $razon_social = $_POST['razon_social'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $departamento = $_POST['departamento'];
        $provincia = $_POST['provincia'];
        $distrito = $_POST['distrito'];
        $cod_postal = $_POST['cod_postal'];
        $direccion = $_POST['direccion'];
        $rol = $_POST['rol'];
        $contraseña = $_POST['contraseña'];
        $estado = $_POST['estado'];
        $fecha_reg = $_POST['fecha_reg'];
        if ($nro_identidad=="" || $razon_social=="" || $telefono=="" || $correo=="" || $departamento=="" || $provincia=="" || $distrito=="" || $cod_postal=="" || $direccion=="" || $rol=="" || $contraseña=="" || $estado=="" || $fecha_reg=="") {
            $arr_respuesta = array('status'=>false,'mensaje'=>'Error, campos vacíos');
        }else {
           $arrPersona = $objPersona->registrarPersona($nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $cod_postal, $direccion, $rol, $contraseña, $estado, $fecha_reg);
           if ($arrPersona->id>0 ) {
            $arr_respuesta = array('status'=>true,
            'mensaje'=>'Registro Exitoso');
        }else {
            $arr_respuesta = array('status'=>false,
            'mensaje'=>'Error al registrar persona');
        }
            echo json_encode($arr_respuesta);
        }
    }
}




if ($tipo=="listar_trabajador") {
    $arr_respuesta = array('status'=>false,'contenido'=>'');
    $arr_trabajador =  $objtrabajador->obtener_trabajador();
    if (!empty($arr_trabajador)) {
        
        for ($i=0; $i < count($arr_trabajador); $i++) { 
            $id_persona = $arr_trabajador[$i]->id;
            $trabajador = $arr_trabajador[$i]->razon_social;
            $opciones = '';
            $arr_trabajador[$i]->options = $opciones;
        }
        $arr_respuesta['status'] = true;
        $arr_respuesta['contenido'] = $arr_trabajador;
    }
    //$arr_respuesta['contenido']=$arr_trabajador;
    echo json_encode($arr_respuesta);
}