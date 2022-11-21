<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/crud.php";
	$obj= new crud();

	$datos=array(
		
		$_POST['idImagenes'], //0
		$_POST['DetalleU'],
		$_POST['EstadoU']
		
				);

	echo $obj->actualizar($datos);
	

 ?>

