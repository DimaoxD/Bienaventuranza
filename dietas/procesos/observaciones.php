<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/crud.php";
	$obj= new crud();

	$datos=array(
		
		$_POST['CamaS'], //0
		$_POST['CedulaS'], //1
		$_POST['TDietaS'], //2
        $_POST['FechaS'],
        $_POST['Observaciones']
				);

	echo $obj->observaciones($datos);
	

 ?>