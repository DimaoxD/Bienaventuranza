<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/crud.php";
	$obj= new crud();

	$datos=array(
		
		$_POST['CedulaU'], #0
		$_POST['EvolucionU'],#1
		$_POST['EstadoU'],#2
		$_POST['idPHD'] #3
		);

	echo $obj->actualizar($datos);
	

 ?>