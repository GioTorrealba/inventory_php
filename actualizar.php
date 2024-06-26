<?php session_start(); 

require 'config.php';
require 'functions.php';

auth();
$conexion = conection($bd_config);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = limpiar($_POST['id']);
    $sku = $_POST['sku'];
    $producto = limpiar($_POST['producto']);
    $precio = limpiar($_POST['precio']);
    $cantidad = $_POST['cantidad'];

    $statement = $conexion->prepare(
        'UPDATE products SET sku = :sku, name = :producto, price = :precio, quantity = :cantidad WHERE id = :id'
    );
    $statement->execute(array(
        ':id' => $id,
        ':sku' => $sku,
        ':producto' => $producto,
        ':precio' => $precio,
        ':cantidad' => $cantidad
        
    ));

    header('Location: ' . RUTA);



} else {
    $id_producto = id_prod($_GET['id']);
    if (empty($id_producto)){
        header('Location:' . RUTA);
    }

    $arti = obtener_id($conexion, $id_producto);

    if (empty($arti)){
        header('Location:' . RUTA);
    }

    $arti = $arti[0];
}


require 'views/actualizar.view.php';

?>
