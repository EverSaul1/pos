<?php

	class controladorMarca{

		static public function ctrCrearMarca(){

			if(isset($_POST["nuevaMarca"])){

				if(preg_match('/^[a-zA-Z0-9 ]+$/', $_POST["nuevaMarca"])){

					$tabla = "marcas";
					
					$datos = $_POST["nuevaMarca"];

					$respuesta = ModeloMarcas::mdlIngresarMarca($tabla, $datos);

					if($respuesta == "ok"){

						echo '<script>

					swal({

						type: "success",
						title: "¡La marca ha sido guardado correctamente!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "marcas";

						}

					});
				

					</script>';
					
				}


			}else{
				echo '<script>

					swal({

						type: "error",
						title: "¡La Marca no puede ir vacío o llevar caracteres especiales!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "marcas";

						}

					});
				

				</script>';


			}
		}
		}

		static public function ctrMostrarMarca($item, $valor){

			$tabla = "marcas";

			$respuesta = ModeloMarcas::mdlMostrarMarca($item, $valor, $tabla);

			return $respuesta;
		}
		static public function ctrEditarMarca(){

			if(isset($_POST["editarMarca"])){

				if(preg_match('/^[a-zA-Z0-9 ]+$/', $_POST["editarMarca"])){

					$tabla = "marcas";
					
					$datos = array("marca"=>$_POST["editarMarca"],
									"id"=>$_POST["idMarca"]);

					$respuesta = ModeloMarcas::mdlEditarMarca($tabla, $datos);

					if($respuesta == "ok"){

						echo '<script>

					swal({

						type: "success",
						title: "¡La marca ha sido cambiada correctamente!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "marcas";

						}

					});
				

					</script>';
					
				}


			}else{
				echo '<script>

					swal({

						type: "error",
						title: "¡La Marca no puede ir vacío o llevar caracteres especiales!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "marcas";

						}

					});
				

				</script>';


			}
		}
		}

		
	}