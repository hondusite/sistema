$("#frmproductos").on("submit",function(e){
  e.preventDefault();//evitar el comportamiento normal del submit
  var id_producto=$("#id_producto").val();
  var codigo=$("#codigo").val();
  var descripcion=$("#descripcion").val();
  var precio_venta=$("#precio_venta").val();
  var precio_compra=$("#precio_compra").val();
  var gravado=$("#gravado").val();
  var existencia=$("#existencia").val();
  var id_categoria=$("#id_categoria").val();
  $.ajax({
  	type: "POST",
  	url: "productos_modificar.php",
  	data: "codigo="+codigo+"&descripcion="+descripcion+"&precio_compra="+precio_compra+"&precio_venta="+precio_venta+"&gravado="+gravado+"&existencia="+existencia+"&id_categoria="+id_categoria+"&id_producto="+id_producto,
    success: function(datos){
  		$("#respuesta").html(datos);
      location.href="listas_productos.php";
  	}
  });
})