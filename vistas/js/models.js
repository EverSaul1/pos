$(".btnEditarModel").click(function(){

	var idModel = $(this).attr("idModel");

	var datos = new FormData();
	datos.append("idModel", idModel);

	$.ajax({

		url:"ajax/models.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){

			$("#editarModel").val(respuesta["model"]);
			$("#idModel").val(respuesta["id"]);
				
		}
	})
})