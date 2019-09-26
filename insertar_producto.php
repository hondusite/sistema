<?php
require 'conexion.php';
$insertar=mysqli_query($con,"INSERT INTO productos (codigo,descripcion,precio_compra,precio_venta,gravado,existencia,id_categoria) VALUES ('uag2013','Martillo','75','100','1','300','1') ");
if ($insertar){
	echo 'el producto se registró';
}else{
	echo 'ocurrió un error';
}

?>