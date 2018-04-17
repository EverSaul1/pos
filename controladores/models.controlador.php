<?php

	class ControladorModel{

		static public function ctrCrearModel(){

			if(isset($_POST["nuevoModel"])){

				if(preg_match('/^[a-zA-Z0-9|-óúíñé ]+$/', $_POST["nuevoModel"])){

					$tabla = "models";

					$datos = $_POST["nuevoModel"];

					$respuesta = ModeloModels::mdlIngresarModel($tabla, $datos);

					if($respuesta == "ok"){
						echo '<script>

					swal({

						type: "success",
						title: "¡El modelo ha sido guardado correctamente!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "models";

						}

					});
				

					</script>';
					}
					}else{
						echo '<script>

					swal({

						type: "error",
						title: "¡El modelo no puede ir vacío o llevar caracteres especiales!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "models";

						}

					});
				

				</script>';
				}
			}
		}

		static public function ctrMostrarModel($item, $valor){

			$tabla = "models";

			$respuesta = ModeloModels::mdlMostrarModel($item, $valor, $tabla);

			return $respuesta;
		}
		static public function ctrEditarModel(){

			if(isset($_POST["editarModel"])){

				if(preg_match('/^[a-zA-Z0-9|-óúíñé ]+$/', $_POST["editarModel"])){

					$tabla = "models";

					$datos = array("model"=>$_POST["editarModel"],
									"id"=>$_POST["idModel"]);

					$respuesta = ModeloModels::mdlEditarModel($tabla, $datos);

					if($respuesta == "ok"){
						echo '<script>

					swal({

						type: "success",
						title: "¡El modelo ha sido cambiados correctamente!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "models";

						}

					});
				

					</script>';
					}
					}else{
						echo '<script>

					swal({

						type: "error",
						title: "¡El modelo no puede ir vacío o llevar caracteres especiales!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "models";

						}

					});
				

				</script>';
				}
			}
		}

	}
