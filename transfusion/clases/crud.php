<?php 

	class crud{

		public function obtenDatos($idContrareferencia){
			$obj= new conectar();
			$conexion=$obj->conexion();
			
			$sql="SELECT idContrareferencia,Fecha_Presentacion,Fecha_Respuesta,pacientes.Nombres,Pacientes_Cedula,diagnosticos.Nombre_Diagnosticos,Lugar_Aceptacion,Servicio_Solicitado,Estado_Solicitud,Prioridad,Motivo,Adjuntos,recepcion.Cedula FROM contrareferencia JOIN pacientes ON pacientes.Cedula = contrareferencia.Pacientes_Cedula JOIN diagnosticos ON diagnosticos.idDiagnosticos = contrareferencia.Diagnosticos JOIN recepcion ON recepcion.Cedula = contrareferencia.Recepcion_Cedula WHERE idContrareferencia = '$idContrareferencia'";
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			if(($ver[7]==1 ) OR ($ver[7]==2) OR ($ver[7]==3) OR ($ver[7]==4) OR ($ver[7]==5) OR ($ver[7]==6) OR ($ver[7]==7) OR ($ver[7]==8) OR ($ver[7]==9) OR ($ver[7]==10) OR ($ver[7]==11) OR ($ver[7]==12) OR ($ver[7]==13) OR ($ver[7]==14)){
				$soli=$ver[7];
				$text="";
			}else{
				$soli=15;
				$text=$ver[7];

			}

			$datos=array(

				'idContrareferencia' => $ver[0],
				'Pacientes_Cedula' => $ver[4],
				'Nombres' => $ver[3],
				'Diagnosticos' => $ver[5],
				'Fecha_Solicitud' => $ver[1],
				'Fecha_Respuesta' => $ver[2],
				'Lugar_Aceptacion' => $ver[6],
				'Servicio_Solicitud' => $soli,
				'Motivo' => $ver[10],
				'Prioridad' => $ver[9],
				'Recepcion_Cedula' => $ver[12],
				'Estado_Solicitud' => $ver[8],
				'Inputtext' => $text
				
				);
			return $datos;
		}
		public function verDatos($idContrareferenciaC){
			$obj= new conectar();
			$conexion=$obj->conexion();
			
			$sql="SELECT `idContrareferencia`, `Servicio_Solicitado`, `Fecha_Presentacion`, `Fecha_Respuesta`, diagnosticos.Nombre_Diagnosticos, `Lugar_Aceptacion`, `Estado_Solicitud`, `Prioridad`, `Motivo`, `MCancelacion`, `Pacientes_Cedula`, Recepcion_Cedula, pacientes.Nombres FROM `contrareferencia` JOIN pacientes ON pacientes.Cedula = contrareferencia.Pacientes_Cedula JOIN diagnosticos ON diagnosticos.idDiagnosticos = contrareferencia.Diagnosticos WHERE idContrareferencia = '$idContrareferenciaC'";
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			if(($ver[1]==1 ) OR ($ver[1]==2) OR ($ver[1]==3) OR ($ver[1]==4) OR ($ver[1]==5) OR ($ver[1]==6) OR ($ver[1]==7) OR ($ver[1]==8) OR ($ver[1]==9) OR ($ver[1]==10) OR ($ver[1]==11) OR ($ver[1]==12) OR ($ver[1]==13) OR ($ver[1]==14)){
				$soli=$ver[1];
				$text="";
			}else{
				$soli=15;
				$text=$ver[1];

			}
			$datos=array(
			
				'idContrareferencia' => $ver[0],
				'Pacientes_Cedula' => $ver[10],
				'Nombres' => $ver[12],
				'Diagnosticos' => $ver[4],
				'Fecha_Solicitud' => $ver[2],
				'Fecha_Respuesta' => $ver[3],
				'Lugar_Aceptacion' => $ver[5],
				'Servicio_Solicitud' => $soli,
				'Motivo' => $ver[8],
				'Prioridad'=> $ver[7],
				'Recepcion_Cedula' => $ver[11],
				'Estado_Solicitud' => $ver[6],
				'Inputtext2' => $ver[9],
				'Inputtext1' => $text

				);
			return $datos;
		}
		public function verDatos2($idContrareferenciaE){
			$obj= new conectar();
			$conexion=$obj->conexion();
			
			$sql="SELECT `idContrareferencia`, `Servicio_Solicitado`, `Fecha_Presentacion`, `Fecha_Respuesta`, diagnosticos.Nombre_Diagnosticos, `Lugar_Aceptacion`, `Estado_Solicitud`, `Prioridad`, `Motivo`, `MCancelacion`, `Pacientes_Cedula`, Recepcion_Cedula, pacientes.Nombres FROM `contrareferencia` JOIN pacientes ON pacientes.Cedula = contrareferencia.Pacientes_Cedula JOIN diagnosticos ON diagnosticos.idDiagnosticos = contrareferencia.Diagnosticos WHERE idContrareferencia = '$idContrareferenciaE'";
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			if(($ver[1]==1 ) OR ($ver[1]==2) OR ($ver[1]==3) OR ($ver[1]==4) OR ($ver[1]==5) OR ($ver[1]==6) OR ($ver[1]==7) OR ($ver[1]==8) OR ($ver[1]==9) OR ($ver[1]==10) OR ($ver[1]==11) OR ($ver[1]==12) OR ($ver[1]==13) OR ($ver[1]==14)){
				$soli=$ver[1];
				$text="";
			}else{
				$soli=15;
				$text=$ver[1];

			}
			$datos=array(
			
				'idContrareferencia' => $ver[0],
				'Pacientes_Cedula' => $ver[10],
				'Nombres' => $ver[12],
				'Diagnosticos' => $ver[4],
				'Fecha_Solicitud' => $ver[2],
				'Fecha_Respuesta' => $ver[3],
				'Lugar_Aceptacion' => $ver[5],
				'Servicio_Solicitud' => $soli,
				'Motivo' => $ver[8],
				'Prioridad'=> $ver[7],
				'Recepcion_Cedula' => $ver[11],
				'Estado_Solicitud' => $ver[6],
				'Inputtext1' => $text

				);
			return $datos;
		}
		public function adjuntoDatos($idContrareferenciaB){
			$obj= new conectar();
			$conexion=$obj->conexion();
			
			$sql="SELECT idContrareferencia,Pacientes_Cedula FROM contrareferencia WHERE idContrareferencia = '$idContrareferenciaB'";
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'idContrareferencia' => $ver[0],
				'Cedula' => $ver[1]
				);
			return $datos;
		}
		public function actualizar($datos){
			header("Content-Type: application/json");
			$response = array('status'=>false, 'message'=>null);
			$obj= new conectar();
			$conexion=$obj->conexion();
			$Dig=mysqli_query($conexion,"SELECT idDiagnosticos FROM diagnosticos WHERE Nombre_Diagnosticos = '$datos[1]'");
			while($row=mysqli_fetch_row($Dig)){
				$idDig=$row[0];
				if ($datos[3]==15) { 
					$input="'$datos[6]'";
					
				}else{
					$input="'$datos[3]'";
				}
				if($sql=mysqli_query($conexion,"UPDATE `contrareferencia` 
				SET `Diagnosticos`='$idDig',
				`Lugar_Aceptacion`='$datos[2]', 
				`Servicio_Solicitado`=$input, 
				`Prioridad`='$datos[4]', 
				`Estado_Solicitud`=$datos[5]
				WHERE `idContrareferencia` = '$datos[0]'")){
				$response['message'] = "success"; 
				$response['status'] = true; 
				echo json_encode($response);
				exit(); //Detenemos el código
				}else{
					$response['message']= "Lo sentimos, hubo un error";
		echo json_encode($response);
		exit();
				}}
			}

			public function motivoDatos($idContrareferenciaD){
				$obj= new conectar();
				$conexion=$obj->conexion();
				
				$sql="SELECT idContrareferencia FROM contrareferencia WHERE idContrareferencia = '$idContrareferenciaD'";
				$result=mysqli_query($conexion,$sql);
				$ver=mysqli_fetch_row($result);
	
				$datos=array(
					'idContrareferencia' => $ver[0]
					);
				return $datos;
			}
		
		public function actualizarMotivos($datos){
			header("Content-Type: application/json");
			$response = array('status'=>false, 'message'=>null);
			$obj= new conectar();
			$conexion=$obj->conexion();
			$sql=mysqli_query($conexion,"UPDATE `contrareferencia` SET `Estado_Solicitud` = '$datos[1]', `MCancelacion` = $datos[2]  WHERE `idContrareferencia` = '$datos[0]'");
			if(isset($sql)){
				$response['message'] = "success"; 
				$response['status'] = true; 
				echo json_encode($response);
				exit();
			}
			else{
				$response['message'] = "Lo sentimos, no se pudo actualizar."; 
					echo json_encode($response);
					 exit(); //Detenemos el código
			}
				
			}
			public function aprobarSolicitud($idContrareferencia){
				$obj= new conectar();
				$conexion=$obj->conexion();
				$date=date('Y-m-d');
				$sql="UPDATE contrareferencia SET FRealizacion='$date',Estado_Solicitud='2'
		WHERE  idContrareferencia ='$idContrareferencia'";
				return mysqli_query($conexion,$sql);
			}
	
	}

 ?>