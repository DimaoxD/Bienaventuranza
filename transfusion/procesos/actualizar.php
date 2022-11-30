<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/crud.php";
	$obj= new crud();

	$datos=array(
		
				$_POST['idContrareferencia'],//0
				$_POST['DiagnosticosA'],//1
				$_POST['LugarA'],//2
				$_POST['EstadoA'],//3
				$_POST['PrioridadA'],//4
				$_POST['ESolicitud'],//5
				$_POST['input1A']
				
		);

	echo $obj->actualizar($datos);
	

 ?>