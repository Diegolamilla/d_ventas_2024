<?php 
require_once('../model/compraModel.php');
$tipo=$_REQUEST['tipo'];
$objCompra = new CompraModel();

if ($tipo=="registrar") {

    if($_POST){
        $producto = $_POST['producto'];
        $cantidad = $_POST['cantidad'];
        $precio = $_POST['precio'];
        $trabajador = $_POST['trabajador'];
        if ($producto=="" || $cantidad=="" || $precio=="" || $trabajador=="") {
            $arr_respuesta = array('status'=>false,'mensaje'=>'Error, campos vacíos');
        }else {
           $arrCompra = $objCompra->registrarCompra($producto, $cantidad, $precio, $trabajador);
           if ($arrCompra->id>0 ) {
            $arr_respuesta = array('status'=>true,
            'mensaje'=>'Registro Exitoso');
        }else {
            $arr_respuesta = array('status'=>false,
            'mensaje'=>'Error al registrar compra');
        }
            echo json_encode($arr_Respuesta);
        }
    }
}