<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/crud.php";
	$obj= new crud();

	$datos=array(
		
		$_POST['idImagenesD'], //0
		$_POST['MCancelancion']
		
				);

	echo $obj->actualizarMotivos($datos);
	

 ?>

