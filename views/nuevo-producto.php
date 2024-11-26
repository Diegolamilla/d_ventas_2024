<form action="" id="frmRegistrar">
    <div>
        <label for="">Codigo: </label>
        <input type="text" class="form-control" required id="codigo" name="codigo">
    </div>
    <div>
        <label for="">Nombre: </label>
        <input type="text" class="form-control" required id="nombre" name="nombre">
       
    </div>
    <div>
        <label for="">Detalle:</label>
        <input type="text" class="form-control" required id= "detalle" name="detalle">
    </div>
    <div>
        <label for="">Precio: </label>
        <input type="number" class="form-control" required id="precio" name="precio">
    </div>
    <div>
        <label for="">Stock: </label>
        <input type="number" class="form-control" required id="stock"  name="stock">
    </div>
    <label for="">Categoria: </label>
        <select class="form-control" required id="categoria" name="categoria" >
            <option>seleccione</option>
        </select>    
    </div>
    <div>
        <label for="">Imagen: </label>
        <input type="file" class="form-control" required id="imagen" name="imagen">
    </div>
    <div>
    <label for="">Proveedor: </label>
        <select class="form-control" required id="proveedor" name="proveedor" >
            <option>seleccione</option>
        </select>    
    </div><br>
    <button type="button" class="btn btn-info " onclick="registrar_producto();">Registrar</button>
</form>
<script src="<?php echo BASE_URL;?>views/js/functions_producto.js"></script>
<script>listar_categoras();</script>
<script>listar_proveedor();</script>
