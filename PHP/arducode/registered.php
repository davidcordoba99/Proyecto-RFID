<?php
$codigo = $_POST["code"];



//echo $usuario;
//echo $password;

$usuariosql = "root";
$passsql = "root";
$basededatos = "missing";
$mysqli =new mysqli("localhost", $usuariosql, $passsql, $basededatos);

$select = "SELECT codigo FROM code WHERE codigo = $codigo";

$query = $mysqli -> query("$select");

if ($query->num_rows > 0)
{
    header('Location: http://localhost/workspace/asir2-php/proyecto/PHP/codeok/iniciobueno.html');
}
else {
    header ('Location:http://localhost/workspace/asir2-php/proyecto/PHP/codeok/iniciomalo.html');
}

?>

