<?php

	class ControladorMaterial{

		static public function ctrCrearMaterial(){

			if(isset($_POST["nuevoMaterial"])){

				if(preg_match('/^[a-zA-Z0-9|-óíñéú ]+$/', $_POST["nuevoMaterial"])){

					$tabla = "materiales";

					$datos = $_POST["nuevoMaterial"];

					$respuesta = ModeloMateriales::mdlIngresarMaterial($tabla, $datos);

					if($respuesta == "ok"){

						echo '<script>

					swal({

						type: "success",
						title: "¡El material ha sido guardado correctamente!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "materiales";

						}

					});
				

					</script>';
					}
				}else{

					echo '<script>

					swal({

						type: "error",
						title: "¡El material no puede ir vacío o llevar caracteres especiales!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "materiales";

						}

					});
				

				</script>';
				}


				
			}
		}

		static public function ctrMostrarMaterial($item, $valor){

			$tabla = "materiales";

			$respuesta = ModeloMateriales::mdlMostarMaterial($item, $valor, $tabla);

			return $respuesta;
		}

		static public function ctrEditarMaterial(){

			if(isset($_POST["editarMaterial"])){

				if(preg_match('/^[a-zA-Z0-9|-óíñéú ]+$/', $_POST["editarMaterial"])){

					$tabla = "materiales";

					$datos = array("material"=>$_POST["editarMaterial"],
									"id"=>$_POST["idMaterial"]);

					$respuesta = ModeloMateriales::mdlEditarMaterial($tabla, $datos);

					if($respuesta == "ok"){

						echo '<script>

					swal({

						type: "success",
						title: "¡El material ha sido cambiado correctamente!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "materiales";

						}

					});
				

					</script>';
					}
				}else{

					echo '<script>

					swal({

						type: "error",
						title: "¡El material no puede ir vacío o llevar caracteres especiales!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "materiales";

						}

					});
				

				</script>';
				}


				
			}
		}
	}