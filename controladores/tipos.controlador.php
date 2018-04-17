<?php

	class ControladorTipo{

		static public function ctrCrearTipo(){

			if(isset($_POST["nuevoTipo"])){

				if(preg_match('/^[a-zA-Z0-9 ]+$/', $_POST["nuevoTipo"])){

					$tabla = "tipos";

					$datos = $_POST["nuevoTipo"];

					$respuesta = ModeloTipos::mdlIngresarTipo($tabla, $datos);

					if($respuesta == "ok"){

						echo '<script>

					swal({

						type: "success",
						title: "¡El tipo ha sido guardado correctamente!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "tipos";

						}

					});
				

					</script>';
					}

				}else{
					echo '<script>

					swal({

						type: "error",
						title: "¡El Tipo no puede ir vacío o llevar caracteres especiales!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "tipos";

						}

					});
				

				</script>';
				}
			}
		}

		static public function ctrMostrarTipo($item, $valor){

			$tabla = "tipos";

			$respuesta = ModeloTipos::mdlMostrarTipo($tabla, $item, $valor);

			return $respuesta;
		}

		static public function ctrEditarTipo(){

			if(isset($_POST["editarTipo"])){

				if(preg_match('/^[a-zA-Z0-9 ]+$/', $_POST["editarTipo"])){

					$tabla = "tipos";

					$datos = array("tipo"=>$_POST["editarTipo"],
									"id"=>$_POST["idTipo"]);

					$respuesta = ModeloTipos::mdlEditarTipo($tabla, $datos);

					if($respuesta == "ok"){

						echo '<script>

					swal({

						type: "success",
						title: "¡El tipo ha sido Cambiado correctamente!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "tipos";

						}

					});
				

					</script>';
					}

				}else{
					echo '<script>

					swal({

						type: "error",
						title: "¡El Tipo no puede ir vacío o llevar caracteres especiales!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "tipos";

						}

					});
				

				</script>';
				}
			}
		}

		
	}

