<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Formulario</title>
</head>
<body>
    <?php
    include("conection.php");

    $mostrar= "SELECT * FROM `Nueva` WHERE 1";
    mysqli_query($datos_bd, $mostrar); 

    $ZZ= mysqli_query($datos_bd,"SELECT * FROM `Nueva` WHERE 1");
    ?>
    <div class="container"> 
        <form action="eliminaregistro.php" method="POST" class="menu">
            <h2 class="Titulo">Eliminar Fila:</h2>
            <div class="mayor">
                <div class="usuario">
                    <label for=""> Eliminar Fila N°</label>
                    <input class="input" type="text" name="borrar">
                </div>
                <div class="registrado">
                    <button class="boton">
                    <p>Borrar</P>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <?php
    while ($lista_ZZ= mysqli_fetch_assoc($ZZ)){
        ?>
    <div class="Tabla">
        <p class="palabra">ID:<?php echo $lista_ZZ["Id_nombre"]; ?></P>
        <p class="palabra">Nombre y Apellido:<?php echo $lista_ZZ["Nom_Apellido"]; ?></p>
        <P class="palabra">Email:<?php echo $lista_ZZ["Gmail"]; ?></p>
        <p class="palabra">Nombre Usuario:<?php echo $lista_ZZ["N_usuario"]; ?></p>
        <p class="palabra">Contraseña:<?php echo $lista_ZZ["contraseña"]; ?></p>
        
    </div>
    <?php
    }   
    ?>
       
</body>
</html>