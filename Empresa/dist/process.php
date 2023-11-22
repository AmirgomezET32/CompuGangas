<?php
    if(isset($_POST["Email"])&&isset($_POST["Contrasenia"])){
        include("conexion.php");
        $Email =  htmlspecialchars($_POST["Email"]);
        $contrasenia =htmlspecialchars($_POST["Contrasenia"]);
        $Email = $conexion-> real_escape_string($_POST["Email"]);
        $contrasenia = $conexion-> real_escape_string($_POST["Contrasenia"]);
        $consulta_sql = "SELECT * FROM ingresar WHERE Email='$Email' and Contrasenia='$contrasenia'";
        
        $envio_sql = $conexion->query($consulta_sql);
        if(($envio_sql->num_rows)>0){
            session_start();
            $_SESSION["Email"]=$_POST["Email"];
            header("Location:inicio.php");
          //  echo "Has iniciado sesion";
        }else{
            header("Location:error.php");
            echo "Nombre de usuario y/o contraseña incorrectos";
        }
    }
?>