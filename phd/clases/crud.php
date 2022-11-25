<?php 

	class crud{

		public function obtenDatos($idPHD){
			$obj= new conectar();
			$conexion=$obj->conexion();
			
			$sql="SELECT phd.idPHD, phd.Pacientes_Cedula, pacientes.Nombres, cama.N_Cama, phd.Fecha, phd.Evolucion, phd.Estado, phd.Recepcion_Cedula FROM phd JOIN pacientes ON phd.Pacientes_Cedula = pacientes.Cedula JOIN cama on phd.Cama_idCama = cama.idCama WHERE idPHD = '$idPHD'";
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'Pacientes_Cedula' => $ver[1],
				'Nombres' => $ver[2],	
				'N_Cama' => $ver[3],
				'Fecha' => $ver[4],
				'Evolucion'=> $ver[5],
				'Estado'=> $ver[6],
				'Referencia'=> $ver[7],
				'idPHD' => $ver[0]
				);
			return $datos;
		}
		public function verDatos($idPHDA){
			$obj= new conectar();
			$conexion=$obj->conexion();
			
			$sql="SELECT phd.idPHD, phd.Pacientes_Cedula, pacientes.Nombres, cama.N_Cama, phd.Fecha, phd.Evolucion, phd.Estado, phd.Recepcion_Cedula FROM phd JOIN pacientes ON phd.Pacientes_Cedula = pacientes.Cedula JOIN cama on phd.Cama_idCama = cama.idCama WHERE idPHD = '$idPHDA'";
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'Pacientes_Cedula' => $ver[1],
				'Nombres' => $ver[2],	
				'N_Cama' => $ver[3],
				'Fecha' => $ver[4],
				'Evolucion'=> $ver[5],
				'Estado'=> $ver[6],
				'Referencia'=> $ver[7],
				'idPHD' => $ver[0]
				);
			return $datos;
		}
		public function adjuntoDatos($idPHDB){
			$obj= new conectar();
			$conexion=$obj->conexion();
			
			$sql="SELECT phd.idPHD,phd.Pacientes_Cedula FROM phd WHERE idPHD = '$idPHDB'";
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'idPHD' => $ver[0],
				'Cedula' => $ver[1]
				);
			return $datos;
		}
		public function actualizar($datos){
			header("Content-Type: application/json");
			$response = array('status'=>false, 'message'=>null);
			$obj= new conectar();
			$conexion=$obj->conexion();

				if($sql=mysqli_query($conexion,"UPDATE `phd` 
				SET `Evolucion`='$datos[1]',
				`Estado`='$datos[2]'
				WHERE `idPHD` = '$datos[3]'")){
				$response['message'] = "success"; 
				$response['status'] = true; 
				echo json_encode($response);
				exit(); //Detenemos el código
				}else{
					$response['message']= "Lo sentimos, hubo un error";
		echo json_encode($response);
		exit();
				}

			

			}
		
			public function cargar($datos){
				$obj= new conectar();
				$conexion=$obj->conexion();
	
					$sql= "UPDATE `solicitud` 
					SET `Fecha_Solicitud`='$datos[1]',
					`Prioridad`='$datos[3]',
					`Estado`='$datos[5]',
					`Especialidad`='$datos[2]',
					`Req`='$datos[4]' 
					WHERE `idSolicitud` = '$datos[6]'";
	
					return mysqli_query($conexion,$sql);
				}


		public function estadocaso($idSolicitud){
			$obj= new conectar();
			$conexion=$obj->conexion();
			$fechaActual = date('Y-m-d');
			$sql="UPDATE `solicitud` SET `Estado` = '4', `FCancelacion` = '$fechaActual' WHERE  `idSolicitud`='$idSolicitud'";
			return mysqli_query($conexion,$sql);
		}
	
	}

 ?>