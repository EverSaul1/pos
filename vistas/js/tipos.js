
$(".btnEditarTipo").click(function(){

	var idTipo = $(this).attr("idTipo");

	var datos = new FormData();
	datos.append("idTipo", idTipo);

	$.ajax({
		url:"ajax/tipos.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){

			$("#editarTipo").val(respuesta["tipo"]);
			$("#idTipo").val(respuesta["id"]);
			console.log("respuesta",respuesta);	

			
		}
	})

})
$(".btnEliminarTipo").click(function(){

	var idTipo = $(this)attr("idTipo");

	swal({

		title:'¿Estas seguro Elimninar el tipo?',
		text: '¡Si no esta seguro puede cancelar la acción!',
		type:'warning',
		showCancelButton: true,
		confirmButtonColor: '#4C8BF5',
		cancelButtonColor: '#DE5145',
		cancelButtonText: 'Cancelar',
		confirmButtonText: 'Si, borrar tipo'
	}).then((result)=>{

		if(result.value){
			window.location = "index.php?tipos&idTipo="+idTipo;

		}
	})

})