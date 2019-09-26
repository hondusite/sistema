<?php
require 'conexion.php';
$cat=mysqli_query($con,"SELECT * FROM categorias");
$option='';
while ($fila=mysqli_fetch_array($cat)){
	$option.='<option value="'.$fila['id_categoria'].'">'.$fila['categoria'].'</option>';
}
echo $option;
?>