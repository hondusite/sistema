<?php
require 'conexion.php';
$codigo=$_POST['codigo'];
$descripcion=$_POST['descripcion'];
$precio_venta=$_POST['precio_venta'];
$precio_compra=$_POST['precio_compra'];
$gravado=$_POST['gravado'];
$existencia=$_POST['existencia'];
$id_categoria=$_POST['id_categoria'];
$id_producto=$_POST['id_producto'];
$insertar=mysqli_query($con,"UPDATE productos SET codigo='$codigo', descripcion='$descripcion',precio_venta='$precio_venta',precio_compra='$precio_compra',gravado='$gravado',existencia='$existencia',id_categoria='$id_categoria' where id_producto='$id_producto'");
if ($insertar){
   echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
	  <strong>Producto se modificó exitosamente</strong> 
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