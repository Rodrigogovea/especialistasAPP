<?php 	
	
	class Conexion {
		public function Conectar() {
			$Servidor="localhost";
			$Usuario="root";
			$Contrasena="root";
			$BaseDatos="appChat2";
			$conexion=new mysqli($Servidor,$Usuario,$Contrasena,$BaseDatos);
			echo ":D";
		}
	}

 ?>