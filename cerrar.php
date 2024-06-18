<?php session_start();
require 'functions.php';

session_destroy();
$_SESSION = array();

require 'views/header.php';
echo 'Has cerrado la sesion';
require 'views/footer.php';
?>