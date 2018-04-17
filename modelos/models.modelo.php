<?php

	require_once "conexion.php";

	class ModeloModels{

		static public function mdlIngresarModel($tabla, $datos){

			$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(model) VALUES (:model)");

			$stmt -> bindParam(":model", $datos, PDO::PARAM_STR);

			if($stmt -> execute()){

				return "ok";
			}else{
				return "error";
			}
			$stmt -> close();
			$stmt = null;
		}

		static public function mdlMostrarModel($item, $valor, $tabla){

			if($item != null){

				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

				$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

				$stmt -> execute();

				return $stmt -> fetch();

			}else{
				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

				$stmt -> execute();

				return $stmt -> fetchAll();
			}

			$stmt -> close();
			$stmt = null;
		}
		static public function mdlEditarModel($tabla, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET model = :model WHERE id = :id");

			$stmt -> bindParam(":model", $datos["model"], PDO::PARAM_STR);
			$stmt -> bindParam(":id", $datos["id"], PDO::PARAM_STR);

			if($stmt -> execute()){

				return "ok";
			}else{
				return "error";
			}
			$stmt -> close();
			$stmt = null;
		}

		

		
	}