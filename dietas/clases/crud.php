<?php 
	
	class crud{
		public function obtenDatos($id_Cama){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="SELECT cama.idCama,cama.N_Cama,pacientes.Nombres,cama.Pacientes_Cedula,dietas.Tipo_Dieta, dietas.Observaciones  FROM dietas 
			Join pacientes on dietas.Pacientes_Cedula = pacientes.Cedula JOIN cama ON cama.idCama = dietas.Cama_idCama WHERE cama.idCama='$id_Cama'";
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);
			
			$datos=array(
				'idCama' => $ver[0],
				'Nombres' => $ver[2],
				'Cedula' => $ver[3],
				'N_Cama' => $ver[1],	
				'Tipo_Dieta' => $ver[4],
				'Observaciones' => $ver[5]
				);
			return $datos;
		}
		
		public function actualizar($datos){
			header("Content-Type: application/json");
			$response = array('status'=>false, 'message'=>null);
			$obj= new conectar();
			$conexion=$obj->conexion();
			$fecha=date("Y-m-d");
			$sql=mysqli_query($conexion,"UPDATE dietas set Tipo_Dieta='$datos[2]', Observaciones='$datos[3]'
				where idDietas='$datos[4]'");		
			if(isset($sql))	{
				$response['message'] = "success"; 
				$response['status'] = true; 
				echo json_encode($response);
				exit(); 
			}
		 else {
				$response['message']= "Lo sentimos, este paciente no existe";
				echo json_encode($response);
				exit();
			}
		}
		
		public function observaciones($datos){
			header("Content-Type: application/json");
			$response = array('status'=>false, 'message'=>null);
			$obj= new conectar();
			$conexion=$obj->conexion();
			$Dig=mysqli_query($conexion,"SELECT idCama FROM cama WHERE N_Cama = '$datos[0]'");
			while($row=mysqli_fetch_row($Dig)){
				$idDig=$row[0];
			$resultados=mysqli_query($conexion, "SELECT * FROM pacientes WHERE Cedula='$datos[1]'");
			if(mysqli_num_rows($resultados)>0){
				$sql=mysqli_query($conexion,"INSERT INTO sugerencias (`Fecha`,`Observaciones`,`Tipo_dieta`,`Cama_idCama`)values ('$datos[3]','$datos[4]','$datos[2]','$idDig')"); 	
				$response['message'] = "success"; 
				$response['status'] = true; 
				echo json_encode($response);
				exit(); 
			} else {
				$response['message']= "Lo sentimos, este paciente no existe";
				echo json_encode($response);
				exit();
		}
		}
	}

		
	 }

 ?>