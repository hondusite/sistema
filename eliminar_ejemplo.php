<?php
require 'conexion.php';
$eliminar=mysqli_query($con,"DELETE FROM productos WHERE id_producto='4'");

if ($eliminar){
	echo 'Se eliminó el registro';
}else{
	echo 'ocurrió un problema';
}

?>