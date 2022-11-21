<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/crud.php";
	$obj= new crud();

	$datos=array(
		$_POST['Nombres'],
		$_POST['Cedula'],
				);

	echo $obj->agregar($datos);
	

 ?>