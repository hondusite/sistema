<?php
require 'conexion.php';
$id_producto=$_POST['id_producto'];
$eliminar=mysqli_query($con,"DELETE FROM productos WHERE id_producto='$id_producto'");

if ($eliminar){
	echo 'Se eliminó el registro';
}else{
	echo 'ocurrió un problema';
}

?>