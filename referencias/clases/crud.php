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

		public function obtenDatos($id_Referencias){
			$obj= new conectar();
			$conexion=$obj->conexion();
			$sql="SELECT DISTINCT referencias.F_Presentacion,referencias.F_Respuesta,referencias.Pacientes_Cedula,pacientes.Nombres,referencias.Respuesta_Referencia,
			referencias.Covid,referencias.IPS_Remitente,diagnosticos.Nombre_Diagnosticos,referencias.Motivo_Aceptacion,recepcion.Cedula, especialistas.Cedula, referencias.Motivo_Cancelacion, referencias.F_Ingreso, referencias.idReferencias
			FROM referencias JOIN pacientes on pacientes.Cedula = Pacientes_Cedula JOIN recepcion on Recepcion_Cedula = recepcion.Cedula JOIN
			especialistas on Especialistas_Cedula = especialistas.Cedula JOIN diagnosticos on referencias.idDiagnosticos = diagnosticos.idDiagnosticos WHERE referencias.idReferencias = $id_Referencias";
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);
			$datos=array(
				'F_Presentacion' => $ver[0],
				'F_Respuesta' => $ver[1],	
				'Pacientes_Cedula' => $ver[2],
				'Nombres' => $ver[3],
				'Respuesta_Referencia'=> $ver[4],
				'Covid'=> $ver[5],
				'IPS_Remitente'=> $ver[6],
				'Diagnostico'=> $ver[7],
				'Motivo_Aceptacion'=> $ver[8],
				'Recepcion_Nombre'=> $ver[9],
				'Especialistas_Nombre'=> $ver[10],
				'Motivo_Cancelacion'=> $ver[11],
				'F_Ingreso' => $ver[12],
				'idReferencias' => $ver[13]
				);
			return $datos;
		}

		public function actualizar($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();
						
			$sql="UPDATE referencias set `F_Respuesta`='$datos[1]', 
				`Respuesta_Referencia`='$datos[2]',
				  `Motivo_Aceptacion`='$datos[3]',
			 	  `Motivo_Cancelacion`='$datos[4]',
				    `Pacientes_Cedula`='$datos[0]',
					  `F_Ingreso`='$datos[6]'
							  where `idReferencias`='$datos[5]'";
			return mysqli_query($conexion,$sql);
			}


	}

 ?>