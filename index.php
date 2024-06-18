<?php session_start();
require 'config.php';
require 'functions.php';


$conexion = conection($bd_config);
$products = obtener_art($blog_config['prod_por_pag'], $conexion);

require 'views/index.view.php';

?>