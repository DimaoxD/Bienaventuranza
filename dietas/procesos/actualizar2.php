<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/crud.php";
	$obj= new crud();

	$datos=array(
		
	 //0
		$_POST['Estado1'], //1
		$_POST['NCama1'], //2
		$_POST['id_Cama1']
				);

	echo $obj->estado($datos);
	

 ?>