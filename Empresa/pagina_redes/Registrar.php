<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Registrar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
</head>

<body>
    <nav class="amazon">
        <div class="iniciar">
            <a href="logear.php">Iniciar Sesion</a>
        </div>
    </nav>
    <nav class="minizon">
    </nav>
    <form class="formulario" method="POST" action="guardar.php" enctype="multipart/form-data">
        <h1>Registrar</h1>
        <?php 
            if (isset($_GET['error'])) {
            ?>
            <p class="error">
                <?php
                echo $_GET['error']
                ?>
                
            </p>
        <?php    
            }
        ?>
        <input class="control" type="text" name="usuario" placeholder="Ingrese su nombre de usuario">
        <input class="control" type="email" name="correo" placeholder="Ingrese su Correo">
        <input class="control" type="password" name="contraseña" placeholder="Ingrese su Contraseña">
        <input class="control" type="password" name="contraseña2" placeholder="Ingrese su Contraseña nuevamente">
        <p><a href="#">Terminos y Condiciones</a></p>
        <button class="boton">Registrarse</button>
    </form>
    <footer>
<div class="ola">
    <p>Contactanos</p>
    <p>Preguntas Frecuentes</p>
    <p>Politicas de Privacidad</p>
</div>
    <div class="foot2">
        <p>Todos los derechos reservados</p>
        <p>Copyright 2023</p>
        
    </div>
    </footer>
</body>
</html>