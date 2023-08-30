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
        <form action="insert.php" method="POST" class="menu">
            <h2 class="Titulo">Registrarse</h2>
            <div class="mayor">
                <div class="nombre">
                    <label for="">Nombre y Apellido</label>
                    <input type="text" class="input" name="Nom_Apellido" required><br><br>
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
                    <input type="password" class="input"  name="contraseña" required><br><br>
                </div>
                <div class="registrado">
                    <button class="boton">
                    <a href="insert.php" > Registrarse</a>
                    </button>
                </div>
            </div>
        </form>
    </div>
</body>
<footer>
    <p>
        @luciano_16.cg.ok
    </p>
</footer>
</html>