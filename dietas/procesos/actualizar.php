<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/crud.php";
	$obj= new crud();

	$datos=array(
		
		$_POST['Cedula'], //0
		$_POST['NCama'], //1
		$_POST['TDieta'], //2
		$_POST['Observaciones'],
		$_POST['id_Cama']
				);

	echo $obj->actualizar($datos);
	

 ?>