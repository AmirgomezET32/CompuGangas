<?php 
    session_start();
    if(empty($_SESSION["Email"])){
        echo "error";
    }else{
        $variable = $_SESSION["Email"];
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>error</title>
	<link rel="stylesheet" href="./style.css">

</head>

<body>

	<!DOCTYPE html>
	<html>

	<head>
		<title>PelisPlus</title>
		<link rel="stylesheet" type="text/css" href="slide navbar style.css">
		<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
	</head>

	<body>
		<div class="main">
			<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form method="post" action="process.php">
					<label for="chk" aria-hidden="true">Cuenta</label>
					<input type="email" name="Email" placeholder="Email" required="">
					<input type="password" name="Contrasenia" placeholder="Contraseña" required="">
					<button>Inicisar Sesion</button>
				</form>
			</div>

			<div class="login">
				<form>
					<label for="chk" aria-hidden="true" class="subtitulo">Saber Más</label>
					<label class="texto">Todo el contenido incluido o disponible a través de cualquier Servicio de PelisPlus como texto, gráficos, logotipos,
					iconos de botones, imágenes, clips de audio, descargas digitales, compilaciones de datos y software, es propiedad de
					Amazon o de sus proveedores de contenido y está protegido por las leyes estadounidenses e internacionales de propiedad
					intelectualr. La totalidad del contenido incluido o disponible a través de cualquier Servicio de PelisPLus es de propiedad
					exclusiva de PelisPlus y está protegido por las leyes estadounidenses e internacionales de propiedad intelectual.</label>
				</form>
			</div>

		</div>
	</body>

	</html>


</body>

</html>