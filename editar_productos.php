<?php
require 'conexion.php';
$id_producto=$_GET['id_producto'];
$consulta=mysqli_query($con,"SELECT * FROM productos WHERE id_producto='$id_producto'");
$fila=mysqli_fetch_array($consulta);
$codigo=$fila['codigo'];
$descripcion=$fila['descripcion'];
$precio_compra=$fila['precio_compra'];
$precio_venta=$fila['precio_venta'];
$gravado=$fila['gravado'];
$existencia=$fila['existencia'];
$id_categoria=$fila['id_categoria'];
?>


<!doctype html>
<html lang="es">
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
      <h2>Editar producto</h2>
      <form id="frmproductos" class="col-6 mt-3">
        <input type="hidden" name="id_producto" id="id_producto" value="<?php echo $id_producto;?>">
        <div class="row">
            <label for="codigo" class="col-5">Código:</label>
            <input type="text" name="codigo" id="codigo" class="form-control mt-2 col-7" value="<?php echo $codigo;?>">
        </div>
        <div class="row">
            <label for="descripcion" class="col-5">Descripción:</label>
            <input type="text" name="descripcion" id="descripcion" class="form-control mt-2 col-7" value="<?php echo $descripcion;?>">
        </div>
        <div class="row">
            <label for="precio_compra" class="col-5">Precio compra:</label>
            <input type="number" name="precio_compra" id="precio_compra" class="form-control mt-2 col-7" value="<?php echo $precio_compra;?>">
        </div>
        <div class="row">
            <label for="precio_venta" class="col-5">Precio venta:</label>
            <input type="text" name="precio_venta" id="precio_venta" class="form-control mt-2 col-7" value="<?php echo $precio_venta;?>">
        </div>
        <div class="row">
            <label for="gravado" class="col-5">Gravado:</label>
            <select name="gravado" id="gravado" class="form-control mt-2 col-7">
              <option value="1" <?php if ($gravado==1){echo 'selected';}?>>Si paga</option>
              <option value="0" <?php if ($gravado==0){echo 'selected';}?>>excento</option>
            </select>
        </div>

        <div class="row">
            <label for="existencia" class="col-5">Existencia:</label>
            <input type="number" name="existencia" id="existencia" class="form-control mt-2 col-7" value="<?php echo $existencia;?>">
        </div>
        <div class="row">
            <label for="id_categoria" class="col-5">Categoría:</label>
            <select name="id_categoria" id="id_categoria" class="form-control mt-2 col-7">
            <?php
            $cat=mysqli_query($con,"SELECT * FROM categorias");
            $option='';
            while ($fila=mysqli_fetch_array($cat)){
                if ($fila['id_categoria']==$id_categoria){
                    $txt='selected';
                }else{
                    $txt='';
                }
                $option.='<option value="'.$fila['id_categoria'].'" '.$txt.'>'.$fila['categoria'].'</option>';
            }
            echo $option;

            ?>
            </select>
        </div>
        <div class="row">
         <button type="submit" class="btn btn-success">Guardar Producto</button>
        </div>
        <div class="col-12 mt-3" id="respuesta"></div>
      </form>
    </div>
    <script src="jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="editar_productos.js"></script>
  </body>
</html>