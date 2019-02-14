<?php

session_start();
$password = $_POST["contraseña"];

$usuario = $_SESSION['sesion'];

$hash = password_hash($password, PASSWORD_BCRYPT);

$usuariosql = "root";
$passsql = "root";
$basededatos = "missing";
$mysqli =new mysqli("localhost", $usuariosql, $passsql, $basededatos);

$select = "UPDATE admin SET pass = '$hash' WHERE user = '$usuario'";
echo $select;
$query = $mysqli -> query("$select");

header('Location: cierre.php');

?>