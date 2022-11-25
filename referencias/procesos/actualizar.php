<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/crud.php";
	$obj= new crud();

	if(empty($_POST['MaceptacionU'])){
		$MaceptacionU = NULL;
	}else{
		$MaceptacionU=$_POST['MaceptacionU'];
	}	
	if(empty($_POST['McancelacionU'])){
		$McancelacionU = NULL;
	}else{
		$McancelacionU=$_POST['McancelacionU'];
	}	
	if(empty($_POST['FIngresoU'])){
		$subq = NULL;
	}else{
		$subq=$_POST['FIngresoU'];
	}	


	$datos=array(
		
		$_POST['CedulaU'], #0
		$_POST['FRespuestaU'], #1
		$_POST['RcasoU'],#2
		$MaceptacionU,
		$McancelacionU,
		$_POST['id_Referencias'],#5
		$subq	);

		

	echo $obj->actualizar($datos);
	

 ?>