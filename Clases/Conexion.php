<?php
class Conexion {
	function Conectar() : mysqli{
	$Server="localhost";
	$BaseDatos="appChat2";
	$User="root";
	$Password="root";
	$db = new mysqli($Server, $User,$Password,$BaseDatos);

	//echo "ok";

	if(!$db)
    {
        echo "Error no se puede conectar";
        exit;
    } 
    return $db;
	}
}
?>