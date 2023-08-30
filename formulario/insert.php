<?php
$Nombre_Apellido=$_POST["Nom_Apellido"];
$Correo_E=$_POST["Gmail"];
$N_usuario=$_POST["N_usuario"];
$contraseña=$_POST["contraseña"];

include ("conection.php");
$insertar= "INSERT INTO `Nueva` VALUES (NULL, '$Nombre_Apellido','$Correo_E','$N_usuario','$contraseña')";

mysqli_query($datos_bd, $insertar);
echo "consulta enviada";


?>