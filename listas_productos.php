<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Productos</title>
  </head>
  <body>
    <div class="container">
<?php
require 'conexion.php';
$consulta=mysqli_query($con,"SELECT * FROM productos");
echo '<h2>Productos</h2>';
echo '<a href="productos.html" class="btn btn-success my-3">Nuevo Producto</a>';
echo '<table class="table table-striped">';
echo '<tr><th>Codigo</th><th>Descripción</th><th>Precio Compra</th><th>Precio Venta</th><th>Existencia</th><th>Acciones</th></tr>';
while ($fila=mysqli_fetch_array($consulta)){
	$id_producto=$fila['id_producto'];
	echo '<tr>';
	echo '<td>'.$fila['codigo'].'</td>';
	echo '<td>'.$fila['descripcion'].'</td>';
	echo '<td>'.$fila['precio_compra'].'</td>';
	echo '<td>'.$fila['precio_venta'].'</td>';
	echo '<td>'.$fila['existencia'].'</td>';
	echo '<td><a href="modificar_producto.php?id_producto='.$id_producto.'" class="btn btn-warning">Modificar</a>&nbsp;<a href="eliminar_producto.php?id_producto='.$id_producto.'" class="btn btn-danger">Eliminar</a></td>';
	echo '</tr>';
}
echo '</table>';
?>
</div>
    <script src="jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
  </body>
</html>