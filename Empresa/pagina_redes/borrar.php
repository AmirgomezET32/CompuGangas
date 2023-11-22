<?php 
    include("conexion.php");
    
    $id = $_REQUEST['id'];
    
    
    $query = "DELETE FROM tabla_imagen WHERE id='$id'";
    $envio = $conexion->query($query);
    
    header("Location:login.php");
 
    
?>