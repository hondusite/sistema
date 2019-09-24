<?php
require 'conexion.php';
$codigo=$_POST['codigo'];
$descripcion=$_POST['descripcion'];
$precio_venta=$_POST['precio_venta'];
$precio_compra=$_POST['precio_compra'];
$existencia=$_POST['existencia'];
$gravado=$_POST['gravado'];
$id_categoria=$_POST['id_categoria'];
$guardar=mysqli_query($con,"INSERT INTO productos (codigo,descripcion,precio_compra,precio_venta,existencia,gravado,id_categoria) values ('$codigo','$descripcion','$precio_compra','$precio_venta','$existencia','$gravado','$id_categoria') ");
if ($guardar){
	echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  El producto se guardó correctamente
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}else{
	echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
 Ocurrió un error
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
?>