<?php 

	class crud{
		public function agregar($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="INSERT INTO `referencias`(`F_Presentacion`, `F_Respuesta`, `Respuesta_Referencia`, `Covid`, `IPS_Remitente`, `Diagnostico`, `Motivo_Aceptacion`, `Motivo_Cancelacion`, `Pacientes_Cedula`, `Recepcion_Cedula`, `Especialistas_Cedula`,`adjuntos` ) 
			
									values ('$datos[2]',
									'$datos[3]',
									'$datos[9]',
									'$datos[4]',
									'$datos[6]',
									'$datos[5]',
									'$datos[10]',
									'$datos[11]',
									'$datos[0]',
									'$datos[7]',
											'$datos[8]'
											)";
			return mysqli_query($conexion,$sql);
		}

		public function obtenDatos($idSolicitud){
			$obj= new conectar();
			$conexion=$obj->conexion();
			
			$sql="SELECT pacientes.Nombres,pacientes.Cedula,cama.N_Cama,solicitud.Fecha_Solicitud,solicitud.Especialidad,solicitud.Prioridad,solicitud.Req,solicitud.Estado,solicitud.FCancelacion,solicitud.idSolicitud
			FROM solicitud JOIN pacientes on pacientes.Cedula = Pacientes_Cedula JOIN cama on solicitud.Cama_IdCama = idCama WHERE solicitud.idSolicitud = '$idSolicitud'";
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'Pacientes_Cedula' => $ver[1],
				'Nombres' => $ver[0],	
				'N_Cama' => $ver[2],
				'Fecha_Solicitud' => $ver[3],
				'Especialidad'=> $ver[4],
				'Prioridad'=> $ver[5],
				'Req'=> $ver[6],
				'Estado'=> $ver[7],
				'FCancelacion' => $ver[8],
				'idSolicitud' => $ver[9]
				);
			return $datos;
		}

		public function obtenRuta($idSolicitudU){
			$obj= new conectar();
			$conexion=$obj->conexion();
			
			$sql="SELECT adj,idSolicitud,Pacientes_Cedula FROM solicitud WHERE idSolicitud = '$idSolicitudU'";
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'adj' => $ver[0],
				'idSolicitud' => $ver[1],
				'Pacientes_Cedula' => $ver[2]
				);
			return $datos;
		}
		public function obtenFecha($idSolicitudU){
			$obj= new conectar();
			$conexion=$obj->conexion();
			
			$sql="SELECT FCancelacion,idSolicitud FROM solicitud WHERE idSolicitud = '$idSolicitudU'";
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'FCancelacion' => $ver[0],
				'idSolicitud' => $ver[1]
				);
			return $datos;
		}

		public function actualizar($datos){
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