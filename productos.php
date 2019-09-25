<?php
require 'conexion.php';
$codigo=$_POST['codigo'];
$descripcion=$_POST['descripcion'];
$precio_venta=$_POST['precio_venta'];
$precio_compra=$_POST['precio_compra'];
$gravado=$_POST['gravado'];
$existencia=$_POST['existencia'];
$id_categoria=$_POST['id_categoria'];
$insertar=mysqli_query($con,"INSERT INTO productos (codigo,descripcion,precio_venta,precio_compra,gravado,existencia,id_categoria) VALUES ('$codigo','$descripcion','$precio_venta','$precio_compra','$gravado','$existencia','$id_categoria')");
if ($insertar){
   echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
	  <strong>Producto se registró exitosamente</strong> 
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>';
}else{
 echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
	  <strong>Ocurrió un error</strong> 
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>';
}

?>