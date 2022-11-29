<?php 
	
	class crud{
		public function agregar($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="INSERT into pacientes (Nombres, Cedula)
									values ('$datos[0]',
											'$datos[1]'
											)";
			return mysqli_query($conexion,$sql);
		}

		public function obtenDatos($id_Cama){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="SELECT cama.idCama,cama.N_Cama,pacientes.Nombres,cama.Pacientes_Cedula,cama.Estado  FROM cama 
						Join pacientes on cama.Pacientes_Cedula = pacientes.Cedula WHERE cama.idCama='$id_Cama'";
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);
			
			$datos=array(
				'idCama' => $ver[0],
				'N_Cama' => $ver[1],	
				'Estado' => $ver[4]
				);
			return $datos;
		}
		public function obtenDatos1($id_Cama1){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$si1 = mysqli_query($conexion, "SELECT idCama,N_Cama,Pacientes_Cedula FROM cama WHERE Pacientes_Cedula = 1 AND idCama= '$id_Cama1'");
			if(mysqli_num_rows($si1)>0){
				$ver=mysqli_fetch_row($si1);
				$datos=array(
					'idCama' => $ver[0],
					'N_Cama' => $ver[1]
					);
				return $datos;

			}else{
			$sql="SELECT cama.idCama,cama.N_Cama,pacientes.Nombres,cama.Pacientes_Cedula,cama.Estado  FROM cama 
						Join pacientes on cama.Pacientes_Cedula = pacientes.Cedula WHERE cama.idCama='$id_Cama1'";
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'idCama' => $ver[0],
				'N_Cama' => $ver[1],	
				'Estado' => $ver[4]
				);
			return $datos;
			}
		}

		public function actualizar($datos){
			header("Content-Type: application/json");
			$response = array('status'=>false, 'message'=>null);
			$obj= new conectar();
			$conexion=$obj->conexion();
			$fecha=date("Y-m-d");
			$validacioncama=mysqli_query($conexion,"SELECT idCama FROM cama WHERE N_Cama = '$datos[2]'");
			$resultados=mysqli_query($conexion, "SELECT * FROM pacientes WHERE Cedula='$datos[0]'");
			if(mysqli_num_rows($resultados)>0){
			$vacio=mysqli_query($conexion,"SELECT idCama,`N_Cama` FROM `cama` WHERE `Pacientes_Cedula` = '$datos[0]'");
			if(mysqli_num_rows($vacio)>0){
				$response['message']= "Lo sentimos, este paciente ya tiene cama asignada";
				echo json_encode($response);
				exit();
			}else{
				$sql=mysqli_query($conexion,"UPDATE cama set Fecha='$fecha', Pacientes_Cedula='$datos[0]',
				Estado='$datos[1]'
				where N_Cama='$datos[2]'");	
				if(isset($sql)){	
				while($row=mysqli_fetch_row($validacioncama)){
				$idCama = $row[0];
				$insert=mysqli_query($conexion,"UPDATE dietas SET Pacientes_Cedula='$datos[0]' WHERE idDietas = '$idCama'");
				$insert2=mysqli_query($conexion,"INSERT INTO `log_dietas`(`Cama_idCama`, `Pacientes_Cedula`, `Dietas_IdDietas`,`Estado`,`EstadoNotificaciones`) VALUES ('$idCama','$datos[0]','$idCama','0','1')");
				$response['message'] = "success"; 
				$response['status'] = true; 
				echo json_encode($response);
				exit(); 
			}}}
				} else {
				$response['message']= "Lo sentimos, este paciente no existe";
				echo json_encode($response);
				exit();
			}
		}

		public function estado($datos){
			header("Content-Type: application/json");
			$response = array('status'=>false, 'message'=>null);
			$obj= new conectar();
			$conexion=$obj->conexion();
			$fecha=date("Y-m-d");
				$sql=mysqli_query($conexion,"UPDATE cama set
				Estado='$datos[0]',Fecha='$fecha'
				where N_Cama='$datos[1]'");			
				$response['message'] = "success"; 
				$response['status'] = true; 
				echo json_encode($response);
				exit(); 
			}
		

		public function eliminar($id_Cama){
			$obj= new conectar();
			$conexion=$obj->conexion();
			$fecha=date("Y-m-d");
			$validacioncama=mysqli_query($conexion,"SELECT Pacientes_Cedula FROM cama WHERE idCama = '$id_Cama'");
			while($row=mysqli_fetch_row($validacioncama)){
			$insert2=mysqli_query($conexion,"INSERT INTO `log_dietas`(`Cama_idCama`, `Pacientes_Cedula`, `Dietas_IdDietas`,`Estado`,`EstadoNotificaciones`) VALUES ('$id_Cama','$row[0]','$id_Cama','0','2')");
			if(isset($insert2)){
				$sql=mysqli_query($conexion,"UPDATE cama SET Fecha='$fecha',Estado='1',Pacientes_Cedula=1 
	WHERE  idCama='$id_Cama'");	
		$insert="UPDATE dietas SET Pacientes_Cedula='1', Tipo_Dieta = NULL, Observaciones = NULL WHERE idDietas = '$id_Cama'";	
		return mysqli_query($conexion,$insert);
		}}}

		public function inhabilitar($id_Cama){
			$obj= new conectar();
			$conexion=$obj->conexion();
			$fecha=date("Y-m-d");
			$sql="UPDATE cama SET Fecha='$fecha',Estado='2',Pacientes_Cedula=2 
	WHERE  idCama='$id_Cama'";
			return mysqli_query($conexion,$sql);
		}

		public function editPacientes($datos){
			header("Content-Type: application/json");
			$response = array('status'=>false, 'message'=>null);
			$obj= new conectar();
			$conexion=$obj->conexion();

			$resultados=mysqli_query($conexion,"SELECT Cedula FROM pacientes WHERE cedula='$datos[2]'");
			if(mysqli_num_rows($resultados)>0){
			$vacio=mysqli_query($conexion,"UPDATE pacientes SET Cedula='$datos[0]', Nombres='$datos[1]' WHERE cedula='$datos[2]'");
				sleep(1);
				$response['message'] = "success"; 
				$response['status'] = true; 
				echo json_encode($response);
				exit(); 
			}else{
				$response['message']= "Lo sentimos, este paciente no existe";
				echo json_encode($response);
				exit();
			} 
		}
	 }

 ?>