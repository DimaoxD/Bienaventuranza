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
	$Cama=$_POST['Cama'];
	$Fecha=$_POST['Fecha'];
	$Orden=$_POST['Orden'];
	$Detalle=$_POST['Detalle'];
	$Contraste=$_POST['Contraste'];
	$Ambulancia=$_POST['Ambulancia'];
	if($Orden == 2){
		$subq="'Diagnostica IPS'";
	}elseif($Orden == 1 OR $Orden == 3 OR $Orden == 10){
		$subq="'Bienaventuranza IPS'";
	}else{
		$subq="'Sanitas'";
	}
	$idcama=mysqli_query($conexion, "SELECT * FROM cama WHERE N_Cama = '$Cama'");
	while($row=mysqli_fetch_row($idcama)){
		$idCama = $row[0];
	$sql=mysqli_query($conexion,"SELECT Cedula FROM pacientes WHERE Cedula = '$Cedula'");
	if(mysqli_num_rows($sql)>0){
    $insert = mysqli_query($conexion,"INSERT INTO `radiologia`(`Pacientes_Cedula`,`Cama_idCama`, `Fecha`, `Orden`, `Observaciones`,`Contraste`, `Ambulancia`, `Adjuntos`, `Proveedor`,`Estado`) VALUES ('$Cedula','$idCama','$Fecha','$Orden','$Detalle','$Contraste','$Ambulancia', '$uploadedFile', $subq, '5')");
	$response['message'] = "success"; 
	$response['status'] = true; 
	echo json_encode($response);
	exit(); //Detenemos el código
    }else{
		$response['message']= "Lo sentimos, este paciente no existe";
		echo json_encode($response);
		exit();
	} } 

	}
}

	


    
	
}
