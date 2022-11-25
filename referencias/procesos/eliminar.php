<?php 
	
	require_once "../clases/conexion.php";
	require_once "../clases/crud.php";

	$obj= new crud();

	$datos=array(
		$_POST['id_Referencias'],
		$_FILES['archivo']);

	echo $obj->eliminar($datos);
 ?>