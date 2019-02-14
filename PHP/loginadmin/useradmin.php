

<?php

require_once 'vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader);
session_start();
echo $twig->render('useradmin.html',['sesion' => $_SESSION['sesion']]);
if(!isset($_SESSION['sesion'])){
    header('Location: index.php');
} else {
    //nada
}

?>