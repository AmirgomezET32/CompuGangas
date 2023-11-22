
<?php
    include("conexion.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js">
    <title>Compugangas</title>
    <link href="styles/hola12.css" rel="stylesheet" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>
</head>

<body style="  background-image: url(fondo_difuminado_login.jpg); "> 
<nav class="cabeza">
		<a href="dist/inicio.php" class="sesion"><strong>Iniciar Sesión</strong></a>
		<a href="dist/registrar.php" class="sesion1"><strong>Registrarse</strong></a>
		<div class="opciones">
			<button class="boton">Mas opciones</button>
			<div class="desplegar">
				<a href="principal.html">Inicio</a>
			</div>
		</div>
		<center><img src="images/logo2.png" alt="" class="logo"></center>
		<p class="linea"></p>
	</nav>
        <div class="login" >
            <div class="form-register">
                <h1>Ingresar un nuevo producto</h1>
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
            <div>
            <form action="guardar.php" method="POST">
                <p class="txt">Ubicacion: </p>
                <input type="text" placeholder=" N° Pasillo" name="ubicacion" class="dentro">
                <p class="txt"> Contenido: </p>
                <input type="text" placeholder="Nombre y modelo" name="contenido" class="dentro">
                <p class="txt"> Estanteria: </p>
                <input type="text" placeholder="N° Estanteria" name="estanteria" class="dentro">
                <div class="input_final">
                <input type="submit" value="Cargar Producto" class="boton">
                </div>
            </form>
        </div>
    </div>
</div>
<footer class="pie">
		<div class="text">
			<p><strong>Compañia</strong></p>
			<p>Quienes Somos</p>
			<p>Contactanos</p>
		</div>
		<div class="text2">
			<p> <strong>¿Necesitas Ayuda?</strong> </p>
			<p>Centro de Ayudas</p>
			<p>Preguntas Frecuentes</p>
		</div>
		<div class="down">
			<p>© Copyright 2023 Empresa | <a href="https://www.contagram.com/home/terms">Terminos y Condiciones</a> | <a
					href="https://www.contagram.com/home/privacy"> Políticas de Privacidad</a> | <a
					href="https://www.contagram.com/home/quality">Políticas de Calidad</a> </p>
		</div>
	</footer>
</body>

</html>