<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/crud.php";
	$obj= new crud();

	$datos=array(
		
		$_POST['CedulaU'], #0
		$_POST['FSolicitudU'], #1
		$_POST['EspecialidadU'],#2
		$_POST['PrioridadU'],#3
		$_POST['RequerimientoU'],#4
		$_POST['EstadoU'],#5
		$_POST['idSolicitud'] #6
		);

	echo $obj->actualizar($datos);
	

 ?>