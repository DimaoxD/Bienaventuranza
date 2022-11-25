<?php 
	
	header("Content-Type: application/json");
	$response = array('status'=>false, 'message'=>null);
	$conexion=mysqli_connect('localhost','root','','prueba_bips');
	$conexion -> set_charset('utf8');

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
	$Diagnosticos=$_POST['Diagnosticos'];
	$FSolicitud=$_POST['FSolicitud'];
	$FRespuesta=$_POST['FRespuesta'];
	$Lugar=$_POST['Lugar'];
	$Estado=$_POST['Estado'];
	$Remision=$_POST['Remision'];
	$Prioridad=$_POST['Prioridad'];
	$Referencia=$_POST['Referencia'];
	$input1=$_POST['input1'];
	if (!$input1) { 
		$input="'$Estado'";
	}else{
		$input="'$input1'";
	}
	if ((!$FRespuesta) or ($FRespuesta == '0')) { // Vacio o puros ceros
		$subq = "NULL";
	} else {
		$subq = "'$FRespuesta'";
	}

	if ((!$FSolicitud) or ($FSolicitud == '0')) { // Vacio o puros ceros
		$FI = "NULL";
	} else {
		$FI = "'$FSolicitud'";
	}
	$Dig=mysqli_query($conexion,"SELECT idDiagnosticos FROM diagnosticos WHERE Nombre_Diagnosticos = '$Diagnosticos'");
	while($row=mysqli_fetch_row($Dig)){
		$idDig=$row[0];

	$sql=mysqli_query($conexion,"SELECT Cedula FROM pacientes WHERE Cedula = '$Cedula'");
	if(mysqli_num_rows($sql)>0){
	  $insert = mysqli_query($conexion,"INSERT INTO `contrareferencia`(`Servicio_Solicitado`, `Fecha_Presentacion`, `Fecha_Respuesta`, `Diagnosticos`, `Lugar_Aceptacion`, `Estado_Solicitud`, `Prioridad`, `Motivo`, `Adjuntos`, `Pacientes_Cedula`, `Recepcion_Cedula`) VALUES ($input,'$FSolicitud','$FRespuesta','$idDig','$Lugar','1','$Prioridad','$Remision','$uploadedFile','$Cedula','$Referencia')");
   

	}else{
		$response['message']= "Lo sentimos, este paciente no existe";
		echo json_encode($response);
		exit();
	}}
 		
	$response['message'] = "success"; 
	$response['status'] = true; 
	echo json_encode($response);
	exit(); //Detenemos el código

}
	

}

	


    
	
}
