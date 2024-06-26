<?php require 'header.php'; ?>
    <div class="editar">
        <h2>Ingresa los datos del Producto Nuevo </h2>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="nuevo">
            <input type="text" name="sku" placeholder="Sku: "> 
            <input type="text" name="producto" placeholder="Nombre: "> 
            <input type="text" name="precio" placeholder="Precio: "> 
            <input type="text" name="cantidad" placeholder="Cantidad: "> 
            <input type="submit" value="Crear nuevo Producto"> 
        </form> 
        
    </div>

<?php require 'footer.php'; ?>
