<?php 

	require_once "Conexion.php";

	class Categorias extends Conexion {
		public function agregarEspecialida($datos) {
			$conexion = Conexion::conectar();
			$sql = "INSERT INTO especialidades (Nom_Especialidad, Descripcion) VALUES (?, ?)";
			$query = $conexion->prepare($sql);
			$query->bind_param('ss', $datos['nombre'],
									 $datos['descripcion']);
			$respuesta = $query->execute();
			return $respuesta;
		}
	}
 ?>