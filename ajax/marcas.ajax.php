<?php
	
	require_once "../controladores/marcas.controlador.php";
	require_once "../modelos/marcas.modelo.php";


	class AjaxMarcas{

		public $idMarca;

		public function ajaxEditarMarca(){

			$item = "id";

			$valor = $this->idMarca;

			$respuesta = ControladorMarca::ctrMostrarMarca($item, $valor);

			echo json_encode($respuesta);



		}
	}

	if(isset($_POST["idMarca"])){

		$marca = new AjaxMarcas();

		$marca -> idMarca = $_POST["idMarca"];

		$marca -> ajaxEditarMarca();
	}