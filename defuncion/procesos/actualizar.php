<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/crud.php";
	$obj= new crud();

	$datos=array(
		$_POST['idDefuncion'],
		$_POST['NombresU'], //0
		$_POST['FechaU']
		
				);

	echo $obj->actualizar($datos);
	

 ?>