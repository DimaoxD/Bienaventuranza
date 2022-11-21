<?php 
	
	require_once "../clases/conexion.php";
	require_once "../clases/crud.php";

	$obj= new crud();

	echo $obj->rechazarSolicitud($_POST['idImagenes']);

 ?>