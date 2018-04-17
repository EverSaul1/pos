<?php
		require_once "conexion.php";

	class ModeloTipos{

		static public function mdlIngresarTipo($tabla, $datos){

			$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(tipo) VALUES (:tipo)");

			$stmt -> bindParam(":tipo", $datos, PDO::PARAM_STR);

			if($stmt -> execute()){

				return "ok";


			}else{
				return "error";
			}

			$stmt->close();
			$stmt = null;
		}

		static public function mdlMostrarTipo($tabla, $item, $valor){

			if($item != null){

				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

				$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

				$stmt -> execute();

				return $stmt -> fetch(); 


			}else {
				$stmt = Conexion::conectar()-> prepare("SELECT * FROM $tabla");

				$stmt -> execute();

				return $stmt -> fetchALL();



			}

			$stmt -> close();

			$stmt = null;

		}

		static public function mdlEditarTipo($tabla, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET tipo = :tipo WHERE id = :id");

			$stmt -> bindParam(":tipo", $datos["tipo"], PDO::PARAM_STR);
			$stmt -> bindParam(":id", $datos["id"], PDO::PARAM_STR);

			if($stmt -> execute()){

				return "ok";


			}else{
				return "error";
			}

			$stmt->close();
			$stmt = null;
		}

	}


?>