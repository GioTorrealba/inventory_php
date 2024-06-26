<?php require 'header.php'; ?>
<div class="editar">
	<h2>Actualizar Producto </h2>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="nuevo">
		<input type="hidden" value="<?php echo $arti['id']; ?>" name="id">	
		<input type="text" name="sku" value="<?php echo $arti['sku']; ?>"> 
		<input type="text" name="producto" value="<?php echo $arti['name']; ?>"> 
		<input type="text" name="precio" value="<?php echo $arti['price']; ?>"> 
		<input type="text" name="cantidad" value="<?php echo $arti['quantity']; ?>"> 
		<input type="submit" value="Guardar Cambios"> 
	</form> 
        
</div>

<?php require 'footer.php'; ?>

