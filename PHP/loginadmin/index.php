<?php
// carga todas las dependencias (twig, ...)
require_once 'vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader);
//
$error = 0; //error 1 es login malo


// Render our view
echo $twig->render('index.html');
//echo $twig->render('simple.html', ['izena' => $name] );
