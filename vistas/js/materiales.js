$(".btnEditarMaterial").click(function(){

	var idMaterial = $(this).attr("idMaterial");

	var datos = new FormData();
	datos.append("idMaterial", idMaterial);

	$.ajax({

		url:"ajax/materiales.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){

			$("#editarMaterial").val(respuesta["material"]);
			$("#idMaterial").val(respuesta["id"]);

			
		}
	})
})