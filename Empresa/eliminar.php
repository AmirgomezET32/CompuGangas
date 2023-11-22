<?php 
    include("conexion.php");
    
    $id = $_REQUEST['id'];
    $contenido = $_POST['contenido'];
    $estanteria = $_POST['estanteria'];
    
    
    $query = "DELETE FROM productos WHERE id='$id'";
    $envio = $conexion->query($query);
    
    header("Location:retirar.php");
 
    
?>