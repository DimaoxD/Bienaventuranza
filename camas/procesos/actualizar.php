<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/crud.php";
	$obj= new crud();

	$datos=array(
		
		$_POST['CedulaU'], //0
		$_POST['Estado'], //1
		$_POST['NCama'] //2
				);

	echo $obj->actualizar($datos);
	

 ?>