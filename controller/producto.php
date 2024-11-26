<?php 
require_once('../model/productoModel.php');
require_once('../model/categoriaModel.php');
require_once('../model/personaModel.php');
$tipo=$_REQUEST['tipo'];
$objProducto = new ProductoModel();
$objCategoria = new CategoriaModel();
$objPersona = new PersonaModel();

if ($tipo == "listar") {
    $arr_respuesta = array('status'=>false,'contenido'=>'');
    $arr_productos =  $objProducto->obtener_productos();

    if (!empty($arr_productos)) {
        for ($i=0; $i < count($arr_productos); $i++) {
            $id_categoria = $arr_productos[$i]->id_categoria;
            $r_categoria= $objCategoria->obtener_Categoria($id_categoria);
            $arr_productos[$i]->categoria=$r_categoria;

            $id_proveedor = $arr_productos[$i]->id_proveedor;
            $r_proveedor= $objPersona->obtener_Persona($id_proveedor);
            $arr_productos[$i]->proveedor=$r_proveedor;

            $id_producto = $arr_productos[$i]->id;
            $producto = $arr_productos[$i]->nombre;
            $opciones ='';
            $arr_productos[$i]->options = $opciones;
        }
        $arr_respuesta ['status']=true;
        $arr_respuesta ['contenido']= $arr_productos;
    }
      echo json_encode($arr_respuesta);
}


if ($tipo=="registrar") {
    /* print_r($_POST);
    echo $_FILES['imagen']['tmp_name']; */

    if($_POST){
        $codigo = $_POST['codigo'];
        $nombre = $_POST['nombre'];
        $detalle = $_POST['detalle'];
        $precio = $_POST['precio'];
        $stock = $_POST['stock'];
        $categoria = $_POST['categoria'];
        $imagen = 'imagen';
        $proveedor = $_POST['proveedor'];

        if ($codigo=="" || $nombre=="" || $detalle=="" || $precio=="" || $stock=="" || $categoria=="" ||
        $imagen=="" || $proveedor=="") {
            $arr_respuesta = array('status'=>false,'mensaje'=>'Error, campos vacíos');
        }else {
           $arrProducto = $objProducto->registrarProducto($codigo, $nombre, $detalle, $precio, $stock, $categoria, $imagen, $proveedor);

           if ($arrProducto->id>0 ) {
                $arr_Respuesta = array('status'=>true,
                'mensaje'=>'Registro Exitoso');
                $archivo = $_FILES['imagen']['tmp_name'];
                $destino = './assets/img_productos/';
                $tipoArchivo = strtolower(pathinfo($_FILES['imagen']['name'], PATHINFO_EXTENSION));

                $nombre = $arrProducto->id .".".$tipoArchivo;

                if (move_uploaded_file($archivo,$destino.$nombre)) {
                    $arr_imagen = $objProducto-> actualizar_imagen($id,  $nombre);
                }else {
                    $arr_Respuesta = array('status' => true,
                    'mensaje'=>'Reguistro exitoso, error al subir imagen');
                }
            }else {
                $arr_Respuesta = array('status'=>false,
                'mensaje'=>'Error al registrar producto');
            }
            echo json_encode($arr_Respuesta);
        }
    }
}


if ($tipo=="ver") {
    
}
if ($tipo=="actualizar") {
   
}

if ($tipo=="eliminar") {
    
}
?>