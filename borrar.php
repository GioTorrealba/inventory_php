<?php 

require 'config.php';
require 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $conexion = conection($bd_config);
    $id = limpiar($_GET['id']);
    $statement = $conexion->prepare(
        'UPDATE products SET deleted_at = :current_time WHERE id = :id'
    );
    $statement->execute(array(
        ':id' => $id,
        ':current_time' => date('Y-m-d H:i:s')
        
    ));
    header('Location: /');
}

require 'views/header.php'; 
require 'views/borrar.view.php';
require 'views/footer.php';

?>
