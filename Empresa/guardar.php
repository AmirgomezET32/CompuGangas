<?php 
   include("conexion.php");

    $ubicacion = $_POST['ubicacion'];
    $contenido = $_POST['contenido'];
    $estanteria = $_POST['estanteria'];
    
    $query = "INSERT INTO productos (ubicacion,contenido,estanteria) VALUES ('$ubicacion','$contenido','$estanteria')";
    $envio = $conexion->query($query);
  
    if (empty($ubicacion)) {
        header("Location: ingresar.php?error=Debe ingresar una ubicacion");
        exit();
    }elseif (empty($contenido)) {
        header("Location: ingresar.php?error=Ingrese una descripcion del contenido");
        exit();
    }elseif (empty($estanteria)){
        header("Location: ingresar.php?error=Debe de ingresar el N° de estanteria");

    }
?>
