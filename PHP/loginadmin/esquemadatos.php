<?php
session_start();
if(!isset($_SESSION['sesion'])){
    header('Location: index.php');
} else {
    //nada
}

require_once 'vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader);


$usuariosql = "root";
$passsql = "root";
$basededatos = "missing";
$mysqli =new mysqli("localhost", $usuariosql, $passsql, $basededatos);

$selectl = "SELECT TIME_TO_SEC(hora)/3600 AS tiempo FROM lunes ";
$queryl = $mysqli -> query("$selectl");
$filal = $queryl->fetch_assoc();

$selectm = "SELECT TIME_TO_SEC(hora)/3600 AS tiempo FROM martes ";
$querym = $mysqli -> query("$selectm");
$filam = $querym->fetch_assoc();

$selectmi = "SELECT TIME_TO_SEC(hora)/3600 AS tiempo FROM miercoles ";
$querymi = $mysqli -> query("$selectmi");
$filami = $querymi->fetch_assoc();

$selectj = "SELECT TIME_TO_SEC(hora)/3600 AS tiempo FROM jueves ";
$queryj = $mysqli -> query("$selectj");
$filaj = $queryj->fetch_assoc();

$selectv = "SELECT TIME_TO_SEC(hora)/3600 AS tiempo FROM viernes ";
$queryv = $mysqli -> query("$selectv");
$filav = $queryv->fetch_assoc();


$array = array($filal,$filam,$filami,$filaj,$filav);


$json = json_encode($array);




echo $twig->render('esquemadatos.html', ['datos' => $json] );



?>
