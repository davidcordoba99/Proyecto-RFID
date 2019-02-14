<?php
$usuario = $_POST["user"];
$usuariosql = "root";
$passsql = "root";
$basededatos = "missing";
$mysqli =new mysqli("localhost", $usuariosql, $passsql, $basededatos);

$select = "DELETE FROM code WHERE nombre = '$usuario'";

$query = $mysqli -> query("$select");
header('Location: showusers.php');








?>