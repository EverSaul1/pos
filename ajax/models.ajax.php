<?php

	require_once "../controladores/models.controlador.php";
	require_once "../modelos/models.modelo.php";

	class AjaxModels{

		public $idModel;

		public function ajaxEditarModel(){

			$item = "id";
			$valor = $this->idModel;

			$respuesta = ControladorModel::ctrMostrarModel($item, $valor);

			echo json_encode($respuesta);

		}
	}


if(isset($_POST["idModel"])){

	$model = new AjaxModels();
	$model -> idModel = $_POST["idModel"];
	$model -> ajaxEditarModel();
}
