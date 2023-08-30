<?php


include("conection.php");

$Nombre_Apellido=$_POST["Nom_Apellido"];
$Correo_E=$_POST["Gmail"];
$N_usuario=$_POST["N_usuario"];
$contraseña=$_POST["contraseña"];

if ($Nombre_Apellido == $admin){
    ?>
    <a href="Gran.php">Administrar Datos</a>
    <?php
}
else{
    echo "Contraseña o Usuario incorrecto";

}

$inser= "INSERT INTO `Nueva`(`Id_nombre`, `Nom_Apellido`, `Gmail`, `N_usuario`, `contraseña`)VALUES (NULL'$Nombre_Apellido','$Correo_E','$N_usuario','$contraseña')";
mysqli_query($datos_bd, $inser);

if (empty($contraseña)){
    die("ingrese todo los datos");
}
else{
include ("conection.php");
        $consult= mysqli_query($datos_bd,"SELECT  * FROM Nueva");
        while ($lista_consulta= mysqli_fetch_assoc($consult) ){
             
            ?>
            <div>
                <ul>
                    <li><?php echo $lista_consulta["Nom_Apellido"];?></li>
                    <li><?php echo $lista_consulta["Gmail"];?></li>
                    <li><?php echo $lista_consulta["N_usuario"];?></li>
                    <li><?php echo $lista_consulta["contraseña"];?></li>
                </ul>
            </div>
<?php
        }
    }
?>
