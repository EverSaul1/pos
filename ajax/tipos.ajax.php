<?php
	
	require_once "../controladores/tipos.controlador.php";
	require_once "../modelos/tipos.modelo.php";

	class AjaxTipos{

		public $idTipo;

		public function ajaxEditarTipo(){

			$item = "id";
			$valor = $this->idTipo;

			$respuesta = ControladorTipo::ctrMostrarTipo($item, $valor);

			echo json_encode($respuesta);



		}
	}

if(isset($_POST["idTipo"])){

	$tipo = new AjaxTipos();
	$tipo -> idTipo = $_POST["idTipo"];
	$tipo -> ajaxEditarTipo(); 
}