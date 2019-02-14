<?php
$nombreu = $_POST["nombre"];
$numerou = $_POST["numero"];
$emailu = $_POST["email"];
$codeu = $_POST["code"];
$usuariosql = "root";
$passsql = "root";
$basededatos = "missing";
$mysqli =new mysqli("localhost", $usuariosql, $passsql, $basededatos);

$insert = "INSERT INTO code (codigo,nombre,email,telefono) VALUES ($codeu,'$nombreu','$emailu',$numerou)";

$query = $mysqli -> query("$insert");
session_start();
if(!isset($_SESSION['sesion'])){
    header('Location: index.php');
} else {
    //nada
}
header('Location: creacionuser.php');
?>