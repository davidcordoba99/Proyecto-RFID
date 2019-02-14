

<?php

require_once 'vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader);
session_start();
echo $twig->render('cambiopass.html');
if(!isset($_SESSION['sesion'])){
    header('Location: index.php');
} else {
    //nada
}

?>