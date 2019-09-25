<?php
require 'conexion.php';
$consulta=mysqli_query($con,"UPDATE productos SET descripcion='Moto Sierra' WHERE id_producto='4'");
if ($consulta){
	echo 'Se modifico el registro';
}else{
	echo 'ocurrio un problema';
}
?>