<?php
$usuariosql = "root";
$passsql = "root";
$basededatos = "missing";
$mysqli =new mysqli("localhost", $usuariosql, $passsql, $basededatos);
session_start();
$select = "SELECT nombre,telefono,email,codigo FROM code ";

$query = $mysqli -> query("$select");?>
<html>
<link rel="stylesheet" type="text/css" href="css/mi.css"> 
   <div class="navbar">
<a href="creacionuser.php">New User</a>
<a href="esquemadatos.php">Statistics</a>
<a href="useradmin.php"><?php echo $_SESSION['sesion'];?></a>
<a href="cierre.php">Log Out</a>
</div>
</html>
<html>
<div class='tabla'>
    </html>
<?php

if($query){
    while ($fila = $query->fetch_assoc()) {
       ?> 
        <?php echo "<table id='customers'>"."<tr>"."<th>"."nombre del alumno: "."</th>"."<th>"." numero de telefono: "."</th>"."<th>"." email: "."</th>"."<th>"." codigo asignado: "."</th>"."</tr>";
         echo "<tr>"."<td>".$fila["nombre"]."</td>"."<td>".$fila["telefono"]."</td>"."<td>".$fila["email"]."</td>"."<td>".$fila["codigo"]."</td>"."</tr>"."</table>";?>
       <form action='del.php' method='POST'>
             <input type= 'hidden' name="user" value= <?php echo $fila["codigo"];?>>
            <input type='submit' class="button" value='delete'>
         
        </form>

       <?php
        }
    }


if(!isset($_SESSION['sesion'])){
    header('Location: index.php');
} else {
    //nada
}

  

    
?>
<html>
</div>
    </html>





