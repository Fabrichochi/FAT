<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Registrarse</title>
</head>
<body>
    
    
    <div class="container"> 
        <form action="consulta.php" method="POST" class="menu">
            <h2 class="Titulo">Modificar</h2>
            <div class="mayor">
                <div class="nombre">
                    <label for="">Editar ID</label>
                    <input class="input" type="text" name="Id_nombre"> 
                </div>
                <div class="nombre">
                    <label for="">Nombre y Apellido</label>
                    <input class="input" type="text" name="Nom_Apellido"> 
                </div>
                <div class="email">
                    <label for="">Correo electronico</label>
                    <input class="input" type="email" name="Gmail">
                </div>
                <div class="usuario">
                    <label for=""> Nombre de Usuario</label>
                    <input class="input" type="text" name="N_usuario">
                </div>
                <div class="contraseña">
                    <label for="">Contraseña</label>
                    <input class="input" type="password" name="contraseña">
                </div>
                <div class="registrado">
                    <button class="boton">
                    <a href="admin.php" > Registrarse</a>
                    </button>
                </div>
            </div>
        </form>
    </div>
</body>
<footer>
    <p>
        ----CONSULTA----
    </p>
</footer>
</html>