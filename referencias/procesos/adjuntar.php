<?php 
 $conexion=mysqli_connect('localhost',
 'root',
 '',
 'prueba_bips');
	
 

$id_Referencia = $_POST["id_ReferenciasU"];
var_dump($id_Referencia);
$archivo = $_FILES["archivo"];
$finfo = new finfo(FILEINFO_MIME);
if(strpos($finfo->file($_FILES['archivo']['tmp_name']), 'application/pdf') === 0){
$ruta= "files/".md5($archivo["tmp_name"]).".pdf";
$sql = "INSERT INTO referencias(adjuntos) values('$ruta') WHERE idReferencia = $id_Referencia";
if(mysqli_query($conexion,$sql)){
	move_uploaded_file($archivo["tmp_name"], $ruta);
	echo "Se ha subido correctamente el archivo";
}else{
	echo "Ocurrio un problema";
}
	}else {
		echo "debemos seleccionar una imagen";
	}

 ?>