<?php 
	
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
	$Cama=$_POST['Cama'];
	$FSolicitud=$_POST['FSolicitud'];
	$Especialidad=$_POST['Especialidad'];
	$Prioridad=$_POST['Prioridad'];
	$Requerimiento=$_POST['Requerimiento'];
	$Estado=$_POST['Estado'];
	$FCancelacion=$_POST['FCancelacion'];
	if ((!$FCancelacion) or ($FCancelacion == '0000-00-00')) { // Vacio o puros ceros
		$subq = "NULL";
	} else {
		$subq = "'$FCancelacion'";
	}
	

	$conexion=mysqli_connect('localhost','root','','prueba_bips');
			$conexion -> set_charset('utf8');
	$sql= mysqli_query($conexion, "SELECT * FROM cama WHERE N_Cama = '$Cama'");
	while($row=mysqli_fetch_row($sql)){
		$idCama = $row[0];
    $insert = mysqli_query($conexion,"INSERT INTO solicitud(`Fecha_Solicitud`, 
	`Prioridad`, 
	`Estado`, 
	`Pacientes_Cedula`, 
	`Cama_idCama`, 
	`Especialidad`, 
	`Req`,
	`adj`, 
	`FCancelacion`) 
	VALUES ('$FSolicitud','$Prioridad','$Estado','$Cedula','$idCama','$Especialidad','$Requerimiento','$uploadedFile',$subq)");
    
    //Si todo está bien retornamos true en el status
	
	
		}	 }
	
		
	$response['message'] = "success"; 
	$response['status'] = true; 
	echo json_encode($response);
	exit(); //Detenemos el código

}

	


    
	
}
