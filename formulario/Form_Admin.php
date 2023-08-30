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
        <form action="administrador.php" method="POST" class="menu">
            <h2 class="Titulo">Registrarse</h2>
            <div class="mayor">
                <div class="usuario">
                    <label for=""> Nombre y Apellido</label>
                    <input class="input" type="text" name="username">
                </div>
                <div class="contraseña">
                    <label for="">Contraseña</label>
                    <input type="password" class="input"  name="password" required><br><br>
                </div>
                <div class="registrado">
                    <button class="boton">
                    <p>Registrarse</P>
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