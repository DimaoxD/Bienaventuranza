<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/crud.php";
	$obj= new crud();
	$input=$_POST['inputE'];
	if (!$input) { 
		$input1="NULL";
	}else{
		$input1="'$input'";
	}
	$datos=array(
		
		$_POST['idContrareferenciaD'], //0
		$_POST['ESolicitudD'],
        $input1
		
				);

	echo $obj->actualizarMotivos($datos);
	

 ?>

