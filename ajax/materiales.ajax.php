<?php
	
	require_once "../controladores/materiales.controlador.php";
	require_once "../modelos/materiales.modelo.php";

	class AjaxMateriales{

		public $idMaterial;

		public function ajaxEditarMaterial(){

			$item = "id";
			$valor = $this->idMaterial;

			$respuesta = ControladorMaterial::ctrMostrarMaterial($item, $valor);

			echo json_encode($respuesta);

		}
	}

if(isset($_POST["idMaterial"])){

	$material = new AjaxMateriales();
	$material -> idMaterial = $_POST["idMaterial"];
	$material -> ajaxEditarMaterial();
}