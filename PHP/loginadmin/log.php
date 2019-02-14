<?php

$usuario = $_POST["name"];
$password = $_POST["password"];
require_once 'vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader);
$value = $usuario;
//echo $usuario;
//echo $password;
$usuariosql = "root";
$passsql = "root";
$basededatos = "missing";
$mysqli =new mysqli("localhost", $usuariosql, $passsql, $basededatos);
if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}
$select = "SELECT pass FROM admin WHERE user = '$usuario'";

$query = $mysqli -> query("$select");

$fila = $query->fetch_assoc(); // fetch_assoc() conveirte todos los registros de la query en un array dentro de la variable fila
 //echo $fila['pass']; (pass convertida a string)
// var_dump($fila);

if (password_verify($password, $fila['pass']))
{
    session_start();
    $_SESSION['sesion'] = $value;
    header('Location: showusers.php');
}
else {
    echo $twig->render('index.html', ['error' => 1] );
}
