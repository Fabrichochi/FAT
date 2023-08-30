
<?php

$Ad_Us = $_POST["username"];
$Ad_Pass = $_POST["password"];

include("conection.php");

$XX= "SELECT `Password` FROM `Administra`";
mysqli_query($datos_bd, $XX);

$consulta= mysqli_query($datos_bd,"SELECT `Password`, `Username` FROM `Administra` WHERE 1; ");
$lista_consulta= mysqli_fetch_assoc($consulta);

if ( $lista_consulta["Password"] ==$_POST['password']){
    if ($lista_consulta["Username"]==$_POST['username']){
        ?><div class="container"><a class="boton2" href="Form_borrar.php">Borrar registro de la Tabla</a></div> <?php
    }
    else{
        ?><div class="container"><a href="Luciano.php" class="boton"  > Cargar Datos en Tabla</a><?php
    }
}
else {
    ?><div class="container"><a href="Luciano.php" class="boton" > Cargar Datos en Tabla</a><?php
}

?>

