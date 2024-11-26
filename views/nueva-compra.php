<form action="" id="frmRegistrar">
    <label for="">Producto: </label>
        <select class="form-control" required id="producto" name="producto" >
            <option>seleccione</option>
        </select>    
    </div>
    <div>
        <label for="">Cantidad:</label>
        <input type="text" class="form-control" required id= "cantidad" name="cantidad">
    </div>
    <div>
        <label for="">Precio: </label>
        <input type="number" class="form-control" required id="precio" name="precio">
    </div>
    <div>
    <label for="">Trabajador: </label>
        <select class="form-control" required id="trabajador" name="trabajador" >
            <option>seleccione</option>
        </select>    
    </div><br>
    <button type="button" class="btn btn-info " onclick="registrar_compra();">Registrar</button>
</form>
<script src="<?php echo BASE_URL;?>views/js/functions_compra.js"></script>
<script>listar_producto();</script>
<script>listar_trabajador();</script>