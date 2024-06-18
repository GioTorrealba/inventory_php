<?php

function conection($bd_config) {
  try{
    $conexion = new PDO('mysql:host=localhost;dbname=inventario', 'root', '');
    return $conexion; 
  } catch (PDOException $e) {   
    return false;
  }
}

function limpiar($datos) {
  $datos = trim($datos);
  $datos = stripslashes($datos);
  $datos = htmlspecialchars($datos);
  return $datos;
}
function pagina_actual() {
  return isset($_GET['p']) ? (int)$_GET['p'] : 1;
  
}

function obtener_art($prod_por_pag, $conexion) {
  $inicio = (pagina_actual() > 1) ? pagina_actual() * $prod_por_pag - $prod_por_pag : 0; 
  $sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM products LIMIT $inicio, $prod_por_pag");
  $sentencia->execute();
  return $sentencia->fetchAll();
}

function auth() {
  if (isset($_SESSION['usuario'])) {
  return $_SESSION['usuario'];
  }
  return null;
}

?>