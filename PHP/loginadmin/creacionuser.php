<?php

session_start();
require_once 'vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader);


if(!isset($_SESSION['sesion'])){
    header('Location: index.php');
} else {
    //nada
}

echo $twig->render('creacionuser.html');
?>