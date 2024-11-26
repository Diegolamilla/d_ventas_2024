<?php
    require_once('../model/categoriaModel.php');
    $tipo=$_REQUEST['tipo'];
    $objCategoria = new categoriaModel();
    
    // condicion para cuando quieres registrar una categoria
    if ($tipo=="registrar") {
        /* print_r($_POST); */

        if ($_POST) {
            $nombre = $_POST['nombre'];
            $detalle = $_POST['detalle'];
            
            if ($nombre=="" || $detalle=="") {
                $arr_respuesta = array('status'=>false,'mensaje'=>'Error, campos vacios');
            }else{
                $arrcategoria =$objCategoria->registrarCategoria($nombre,$detalle);
                if ($arrcategoria->id>0 ) {
                    $arr_respuesta = array('status'=>true,
                    'mensaje'=>'Registro Exitoso');
                }else {
                    $arr_respuesta = array('status'=>false,
                    'mensaje'=>'Error al registrar categoria');
                }
                echo json_encode($arr_respuesta);
            }
        }
    }

    //condición para cuando quieres listar las categorias
    if ($tipo=="listar") {
        $arr_respuesta = array('status'=>false,'contenido'=>'');
        $arr_categorias =  $objCategoria->obtener_categorias();

        if (!empty($arr_categorias)) {
            
            for ($i=0; $i < count($arr_categorias); $i++) { 
                $id_categoria = $arr_categorias[$i]->id;
                $categoria = $arr_categorias[$i]->nombre;
                $opciones = '';
                $arr_categorias[$i]->options = $opciones;
            }
            $arr_respuesta['status'] = true;
            $arr_respuesta['contenido'] = $arr_categorias;
        }
        //$arr_respuesta['contenido']=$arr_categorias;
        echo json_encode($arr_respuesta);
    }
    
?>