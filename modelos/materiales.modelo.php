<?php
		
		require_once "conexion.php";

	class ModeloMateriales{

		static public function mdlIngresarMaterial($tabla, $datos){

			$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(material) VALUES(:material)");

			$stmt -> bindParam(":material", $datos, PDO::PARAM_STR);

			if($stmt -> execute()){

				return "ok";
			}else{
				return "error";
			}

			$stmt -> close();
			$stmt = null;

		}

		static public function mdlMostarMaterial($item, $valor, $tabla){

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

		static public function mdlEditarMaterial($tabla, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET material = :material WHERE id = :id");

			$stmt -> bindParam(":material", $datos["material"], PDO::PARAM_STR);
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