<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/crud.php";
	$obj= new crud();

	$datos=array(
		
		$_POST['CedulaAA'], //0
		$_POST['NombresAA'], //1
		$_POST['CedulaA'] //2
				);

	echo $obj->editPacientes($datos);
	

 ?>