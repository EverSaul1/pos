
$(".btnEditarMarca").click(function(){

	var idMarca = $(this).attr("idMarca");

	var datos = new FormData();
	datos.append("idMarca", idMarca);

	$.ajax({
		url:"ajax/marcas.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){

			$("#editarMarca").val(respuesta["marca"]);
			$("#idMarca").val(respuesta["id"]);
			
		}
	})

})