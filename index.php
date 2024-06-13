<?php

$conexion = new mysqli('localhost', 'root', '', 'inventory');

echo $conexion->connect_errno;

?>