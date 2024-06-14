<?php
require 'views/index.view.php';
$connection = new mysqli('localhost', 'root', '', 'inventario');

echo $connection->connect_errno;

?>