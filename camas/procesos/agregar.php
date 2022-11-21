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
	$sql=mysqli_query($conexion,"SELECT Cedula FROM pacientes WHERE Cedula = '$cedula'");

		
	if(mysqli_num_rows($sql)==0){
		$insert=mysqli_query($conexion,"INSERT INTO pacientes(Cedula,Nombres) VALUES ('$cedula','$nombres')");
		$response['message'] = "success"; 
		$response['status'] = true; 
		echo json_encode($response);
		exit(); 
	}else{
		$response['message']= "Lo sentimos, esta cedula ya existe en nuestra base de datos";
		echo json_encode($response);
		exit();
	}
//VALIDAR SI EL CAMPO NOMBRES ESTA VACIO
if(!empty($_POST['Nombres'])) {
	$cedula=$_POST['Cedula'];
	$nombres=$_POST['Nombres'];
	$uploadOk=1;
	$sql=mysqli_query($conexion,"SELECT Cedula FROM pacientes WHERE Cedula = '$cedula'");
		
	if(mysqli_num_rows($sql)==0){
		$insert=mysqli_query($conexion,"INSERT INTO pacientes(Cedula,Nombres) VALUES ('$cedula','$nombres')");
		$response['message'] = "success"; 
		$response['status'] = true; 
		echo json_encode($response);
		exit(); 
	}else{
		$response['message']= "Lo sentimos, esta cedula ya existe en nuestra base de datos";
		echo json_encode($response);
		exit();
	}
	
		} else {

			$response['message']= "Lo sentimos, los campos estan vacios";
			echo json_encode($response);
			exit();

		}
	
	} else {

		$response['message']= "Lo sentimos, los campos estan vacios";
		echo json_encode($response);
		exit();

	}
	
		

