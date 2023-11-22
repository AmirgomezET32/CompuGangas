<?php 
   include("conexion.php");

   $id = $_REQUEST['id'];
   $contenido = $_POST['contenido'];
   $estanteria = $_POST['estanteria'];

   $ssql = "UPDATE productos SET contenido='$contenido', estanteria='$estanteria' Where id='$id'";
   if($conexion->query($ssql)) {
     echo '<p>Producto actualizado con éxito</p>';
   } else {
     echo '<p>Hubo un error al actualizar el producto: ' . $conexion->error . '</p>';
   }
