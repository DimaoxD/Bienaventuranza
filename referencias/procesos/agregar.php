<?php 
	
	$conexion=mysqli_connect('localhost',
										'root',
										'',
										'prueba_bips');
			$conexion -> set_charset(
				'utf8'
			);
    

	header("Content-Type: application/json");
	$response = array('status'=>false, 'message'=>null);


if(!empty($_FILES['file']['name'])){
	$id=$_POST['Cedula'];
	$uploadedFile='';
    $target_dir = '../upload/'.$id. '/';
	$carpeta=$target_dir;
	if (!file_exists($carpeta)) {
    mkdir($carpeta, 0777, true);
}
	$target_file = $carpeta.(basename($_FILES["file"]["name"]));
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Check if file already exists
if (file_exists($target_file)) {
	
   	$response['message'] = "Lo sentimos, archivo ya existe."; 
  	 echo json_encode($response);
    
	exit(); //Detenemos el código
}
// Check file size
if ($_FILES["file"]["size"] > 5242808) {
    
	$response['message']= "Lo sentimos, el archivo es demasiado grande.  Tamaño máximo admitido: 5 MB";
	echo json_encode($response);
	exit(); //Detenemos el código
}
// Allow certain file formats
if($imageFileType != "pdf" ) {
    
	$response['message']= "Lo sentimos, sólo se permiten archivos PDF.";
	echo json_encode($response);
   	exit(); //Detenemos el código
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
	$response['message']= "Lo sentimos, tu archivo no fue subido.";
	echo json_encode($response);
   	exit(); //Detenemos el código
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
    $uploadedFile=$target_file;
	$Cedula=$_POST['Cedula'];
	$FPresentacion=$_POST['FPresentacion'];
	$FRespuesta=$_POST['FRespuesta'];
	$Covid=$_POST['Covid'];
	$Diagnostico=$_POST['Diagnosticos'];
	$IPS=$_POST['IPS'];
	$Referencia=$_POST['Referencia'];
	$Especialista=$_POST['Especialista'];
	$Rcaso=$_POST['Rcaso'];
	if(empty($_POST['FIngreso'])){
		$FIngreso = '0';
	}else{
		$FIngreso=$_POST['FIngreso'];
	}		
	if(empty($_POST['Maceptacion'])){
		$Maceptacion = '0';
	}else{
		$Maceptacion=$_POST['Maceptacion'];
	}	
	
	if ((!$Maceptacion) or ($Maceptacion == '0')) { // Vacio o puros ceros
		$MNo = "NULL";
	} else {
		$MNo = "'$Maceptacion'";
	}
	
	if ((!$FRespuesta) or ($FRespuesta == '0')) { // Vacio o puros ceros
		$subq = "NULL";
	} else {
		$subq = "'$FRespuesta'";
	}

	if ((!$FIngreso) or ($FIngreso == '0')) { // Vacio o puros ceros
		$FI = "NULL";
	} else {
		$FI = "'$FIngreso'";
	}
	
	
	//Consulta validar Diagnosticos
	$Dig=mysqli_query($conexion,"SELECT idDiagnosticos FROM diagnosticos WHERE Nombre_Diagnosticos = '$Diagnostico'");
	while($row=mysqli_fetch_row($Dig)){
		$idDig=$row[0];

    //insert form data in the database
    $insert = mysqli_query($conexion,"INSERT INTO referencias(`F_Presentacion`, 
	`F_Respuesta`, 
	`Respuesta_Referencia`, 
	`Covid`, 
	`IPS_Remitente`, 
	`idDiagnosticos`, 
	`Motivo_Aceptacion`,
	`Pacientes_Cedula`, 
	`Recepcion_Cedula`, 
	`Especialistas_Cedula`,
	`adjuntos`,
	`F_Ingreso`	) 
	VALUES ('$FPresentacion',$subq,'$Rcaso','$Covid','$IPS','$idDig',$MNo,'$Cedula','$Referencia','$Especialista','$uploadedFile',$FI)");
    
    //Si todo está bien retornamos true en el status
	

    } } 

	$response['message'] = "success"; 
	$response['status'] = true; 
	echo json_encode($response);
	exit(); //Detenemos el código

}

	


    
	
}
?>

