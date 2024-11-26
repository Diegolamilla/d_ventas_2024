<?php
class vistaModelo{
    //funcion para obtener vistas
    protected static function obtener_vista($vista){
        $palabras_permitidas =['usuario','producto','nuevo-producto','inicio','nueva-categoria','nueva-persona','nueva-compra','admin','productos','adminlogin','adminindex']; 
        //carpetas de php
        
        if(in_array($vista, $palabras_permitidas)){
            if (is_file("./views/".$vista.".php")) {
                $contenido = "./views/".$vista.".php";    
            }else{
                $contenido = "404"; 
            }
        }elseif($vista=="login" || $vista=="index"){
            $contenido = "login";
        }else{
            $contenido = "404"; 
        }
        return $contenido;
    }
}
?>