<?php session_start(); 

require 'config.php';
require 'functions.php';
require 'views/nuevo.view.php';

auth();
$conexion = conection($bd_config);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sku = $_POST['sku'];
    $producto = $_POST['producto'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];

    $statement = $conexion->prepare(
        'INSERT INTO products (sku, name, price, quantity)
        VALUES (:sku, :producto, :precio, :cantidad)'
    );
    var_dump($producto, $sku, $precio, $cantidad);

    $statement->execute(array(
        ':sku' => $sku,
        ':producto' => $producto,
        ':precio' => $precio,
        ':cantidad' => $cantidad
    ));

    header('Location: ' . RUTA);
} 
?>
