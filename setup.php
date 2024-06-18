<?php 
    // Dummy users for tests
    try{
        $conexion = new PDO('mysql:host=localhost;dbname=inventario', 'root', '');
        return $conexion; 
      } catch (PDOException $e) {   
        return false;
      }


    $statement = $conexion->prepare('INSERT INTO usuarios (id, usuario, pass) VALUES (null, :usuario, :pass)');
    $statement->execute(array(
        ':usuario' => 'admin@php.com', 
        ':pass' => hash('sha512', 'password')
    ));

?>