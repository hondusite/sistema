$("#formproductos").on("submit",function(e){
  e.preventDefault();//evitar el comportamiento normal del submit
  var codigo=$("#codigo").val();
  var descripcion=$("#descripcion").val();
  var precio_venta=$("#precio_venta").val();
  var precio_compra=$("#precio_compra").val();
  var existencia=$("#existencia").val();
  var gravado=$("#gravado").val();
  var id_categoria=$("#id_categoria").val();
  $.ajax({
  	type: "POST",
  	url: "productos.php",
  	data: "codigo="+codigo+"&descripcion="+descripcion+"&precio_compra="+precio_compra+"&precio_venta="+precio_venta+"&existencia="+existencia+"&gravado="+gravado+"&id_categoria="+id_categoria,
  	success: function(datos){
  		$("#respuesta").html(datos);
  	}
  });
})