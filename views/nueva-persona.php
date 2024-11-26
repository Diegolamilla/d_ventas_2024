<form action="" id="frmRegistrar">
    <div>
        <label for="">Numero de identidad: </label>
        <input type="text" class="form-control" required id="nro_identidad" name="nro_identidad">
    </div>
    <div>
        <label for="">Razon social: </label>
        <input type="text" class="form-control" required id="razon_social" name="razon_social">
       
    </div>
    <div>
        <label for="">Numero telefonico: </label>
        <input type="text" class="form-control" required id= "telefono" name="telefono">
    </div>
    <div>
        <label for="">Correo electronico: </label>
        <input type="email" class="form-control" required id="correo" name="correo">
    </div>
    
    <div>
        <label for="">Departamento: </label>
        <input type="text" class="form-control" required id="departamento"  name="departamento">
    </div>
        <label for="">Provincia: </label> 
        <input type="text" class="form-control" required id="provincia"  name="provincia">  
    </div>
    <div>
        <label for="">Distrito: </label>
        <input type="text" class="form-control" required id="distrito" name="distrito">
    </div>
    <div>
    <label for="">Codigo postal: </label>
        <input type="number" class="form-control" required id="cod_postal" name="cod_postal">
    </div><br>
    <div>
        <label for="">Dirección: </label>
        <input type="text" class="form-control" required id="direccion" name="direccion">
    </div>
    <div>
        <label for="">Rol: </label>
        <input type="text" class="form-control" required id="rol" name="rol">
    </div>
    <div>
        <label for="">Contraseña: </label>
        <input type="text" class="form-control" required id="contraseña" name="contraseña">
    </div>
    <div>
        <label for="">Estado: </label>
        <input type="number" class="form-control" required id="estado" name="estado">
    </div>
    <div>
        <label for="">Fecha de registro: </label>
        <input type="text" class="form-control" required id="fecha_reg" name="fecha_reg">
    </div>
    <button type="button" class="btn btn-info " onclick="registrar_persona();">Registrar</button>
</form>
<script src="<?php echo BASE_URL;?>views/js/functions_persona.js"></script>
