<?php 
    include("conexion.php");
 $Email =  htmlspecialchars($_POST["Email"]);
        $contrasenia =htmlspecialchars($_POST["Contrasenia"]);
    $email = $_POST['Email'];
    $contraseña = ($_POST['Contrasenia']);

    $sql = "INSERT INTO ingresar (Email, Contrasenia) VALUES ('$email', '$contraseña')";
    $envio_sql = $conexion->query($sql);

    //mysqli_query($conexion, $sql);

	 function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $usuario = validate($_POST['Email']); 
    $contraseña = validate($_POST['Contrasenia']);
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>EcceCoffee</title>
	<link rel="stylesheet" href="./style.css">

</head>

<body>
	<!DOCTYPE html>
	<html>

	<head>
		<title>EcceCoffee</title>
		<link rel="stylesheet" type="text/css" href="slide navbar style.css">
		<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
		<style>
			a{
				text-decoration: none;
			}
		</style>
	</head>

	<body>
		<div class="main">
			<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form method="post" action="process.php">
					<label for="chk" aria-hidden="true">Cuenta</label>
					<input type="email" name="Email" placeholder="Email" required="">
					<input type="password" name="Contrasenia" placeholder="Contraseña" required="">
					<button>Iniciar Sesion</button>
		
				</form>
			</div>

			<div class="login">
				<form>
					<label for="chk" aria-hidden="true" class="subtitulo">Registrarse</label>
				</form>
				<a href="registrar.html"><button class="botonregistro">Registrarse</button></a>
			</div>

		</div>
	</body>

	</html>


</body>

</html>