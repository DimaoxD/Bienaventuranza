<?php 
	
	header("Content-Type: application/json");
	$response = array('status'=>false, 'message'=>null);

	$conexion=mysqli_connect('localhost','root','','prueba_bips');
			$conexion -> set_charset('utf8');

			
//VALIDAR SI EL CAMPO CEDULA ESTA VACIO
if(!empty($_POST['Cedula'])){
	$uploadOk = 1;
	$cedula=$_POST['Cedula'];
	$nombres=$_POST['Nombres'];
	$certificado=$_POST['Certificado'];
	$fecha=$_POST['Fecha'];
	$sql=mysqli_query($conexion,"SELECT Cedula FROM pacientes WHERE Cedula = '$cedula'");
	if(mysqli_num_rows($sql)>0){
	$sql1=mysqli_query($conexion,"SELECT `Pacientes_Cedula` FROM defuncion WHERE `Pacientes_Cedula` = '$cedula'");
	if(mysqli_num_rows($sql1)>0){
		$response['message']= "Lo sentimos, este paciente ya se encuentra registrado";
		echo json_encode($response);
		exit();
	}else{
		$insert=mysqli_query($conexion,"INSERT INTO `defuncion`(`id_codigos`, `Fecha_Defuncion`, `Pacientes_Cedula`, `Especialistas_Cedula`) VALUES 
		('$certificado','$fecha','$cedula','$nombres')");
		$insert2=mysqli_query($conexion,"UPDATE  `codigos_defuncion`  SET `estado`='2' WHERE `id` = '$certificado'");
		$response['message'] = "success"; 
		$response['status'] = true; 
		echo json_encode($response);
		exit(); 
	}}else{
		$response['message']= "Lo sentimos, este paciente no existe";
		echo json_encode($response);
		exit();
	}
//VALIDAR SI EL CAMPO NOMBRES ESTA VACIO

	
	} else {

		$response['message']= "Lo sentimos, la cedula esta vacia";
		echo json_encode($response);
		exit();

	}
	
		

