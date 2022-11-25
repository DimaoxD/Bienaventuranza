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
			$resultados=mysqli_query($conexion, "SELECT * FROM pacientes WHERE Cedula='$datos[0]'");
			if(mysqli_num_rows($resultados)>0){
			$vacio=mysqli_query($conexion,"SELECT `N_Cama` FROM `cama` WHERE `Pacientes_Cedula` = '$datos[0]'");
			if(mysqli_num_rows($vacio)>0){
				$response['message']= "Lo sentimos, este paciente ya tiene cama asignada";
				echo json_encode($response);
				exit();
			}else{
				$sql=mysqli_query($conexion,"UPDATE cama set Fecha='$fecha', Pacientes_Cedula='$datos[0]',
				Estado='$datos[1]'
				where N_Cama='$datos[2]'");			
				$response['message'] = "success"; 
				$response['status'] = true; 
				echo json_encode($response);
				exit(); 
			}
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
			$sql="UPDATE cama SET Fecha='$fecha',Estado='1',Pacientes_Cedula=1 
	WHERE  idCama='$id_Cama'";
			return mysqli_query($conexion,$sql);
		}

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