<?php 

	require_once "../../Clases/Especialidades.php";

	$datos = array(
				"nombre" => $_POST['nombreEspecialidad'],
				"descripcion" => $_POST['DescripcionEspecialidad']
					);
	$Especialidad = new CEspecialidad();
	echo $Especialidad->agregarEspecialida($datos);
 ?>