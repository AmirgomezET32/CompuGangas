<!DOCTYPE html>
<html lang="en">

<body>

	<!DOCTYPE html>
	<html>

	<head>
		<title>index</title>
		<link rel="stylesheet" href="style123.css">
		<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
		<style>
			a{
				text-decoration: none;
			}
		</style>
	</head>
	<body style="  background-image: url(fondo_difuminado_login.jpg); "> 
	<body>
	<nav class="cabeza">
		<a href="../principal.php" class="sesion"><strong>Volver</strong></a>
		<div class="opciones">
			<button class="miniboton">Mas opciones</button>
			<div class="desplegar">
				<a href="../principal.php">Inicio</a>
			</div>
		</div>
		<center><img src="logo2.png" alt="" class="logo"></center>
		<p class="linea"></p>
	</nav>


		<div class="main">
			<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form method="post" action="process.php">
					<label for="chk" aria-hidden="true">Cuenta</label>
					<input type="text" name="Email" placeholder="Email" required="">
					<input type="password" name="Contrasenia" placeholder="Contraseña" required="">
					<button>Iniciar Sesion</button>
		
				</form>
			</div>

			<div class="login">
				<form>
					<label for="chk" aria-hidden="true" class="subtitulo">Registrarse</label>
				</form>
				<a href="registrar.php"><button class="botonregistro">Registrarse</button></a>
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


</body>

</html>