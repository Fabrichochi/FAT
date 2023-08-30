<?php

$id= $_POST["borrar"];

include("conection.php");

$eliminar = "DELETE FROM `Nueva` WHERE id_nombre=$id";

mysqli_query($datos_bd,$eliminar);
?>

<div class="container">
<h3 class="Titulo" > Se a eliminado el regisro N°<?php echo $id; ?> <h3>
    <button class="boton"><a href="Form_borrar.php">Volver</a></button>
</div>