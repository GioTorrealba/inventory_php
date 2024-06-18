<?php session_start();
require 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = htmlspecialchars(strtolower($_POST['usuario']));
    $password = $_POST['password'];
    $password = hash('sha512', $password);

    $errores = '';

    try{
        $conexion = new PDO('mysql:host=localhost;dbname=inventario', 'root', '');
    
    } catch (PDOException $e) {
        echo "ERROR: " . $e->getMessage();
    }
    
    $statement = $conexion->prepare('
    SELECT * FROM usuarios WHERE usuario = :usuario AND pass = :password');
    
    $statement->execute(array(
        ':usuario' => $usuario,
        ':password' => $password
    ));
    
    $resultado = $statement->fetch();
    
    if($resultado !== false){
        $_SESSION['usuario'] = $usuario;
        echo "datos correctos";
    
    } else {
        $errores .= '<li>Datos incorrectos</li>';
    }
}


if (isset($_SESSION['usuario'])) {
    header('Location:index.php');
}

require 'views/header.php'; 
require 'views/login.view.php';
require 'views/footer.php';

?>
