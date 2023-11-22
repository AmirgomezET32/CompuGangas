<?php 
   include("conexion.php");

    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $correo = $_POST['correo'];
    
    $query = "INSERT INTO usuarios (usuario,contraseña,correo) VALUES ('$usuario','$contraseña','$correo')";
    $envio = $conexion->query($query);
  
    if (empty($usuario)) {
        header("Location: registrar.php?error=El Usuario Es Requerido");
        exit();
    }elseif (empty($contraseña)) {
        header("Location: registrar.php?error=La contraseña Es Requerida");
        exit();
    }elseif (empty($correo)){
        header("Location: registrar.php?error=La El correo Es Requerida");

    }
?>
