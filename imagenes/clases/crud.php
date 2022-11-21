<?php 
	
	class crud{
		
		public function obtenDatos($idImagenes){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="SELECT radiologia.idRadiologia, pacientes.Cedula, pacientes.Nombres, cama.N_Cama,radiologia.Fecha,radiologia.Orden, radiologia.Estado, radiologia.Observaciones, radiologia.Contraste, radiologia.Ambulancia, radiologia.Proveedor FROM radiologia Join pacientes ON radiologia.Pacientes_Cedula = pacientes.Cedula JOIN cama ON radiologia.Cama_idCama = cama.idCama WHERE radiologia.idRadiologia = '$idImagenes'";
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);
			$datos=array(
				'idImagenes' => $ver[0],
				'Cedula' => $ver[1],
				'Nombres' => $ver[2],	
				'Cama' => $ver[3],	
				'Fecha' => $ver[4],	
				'Orden' => $ver[5],	
				'Estado' => $ver[6],	
				'Detalle' => $ver[7],	
				'Contraste' => $ver[8],	
				'Ambulancia' => $ver[9],	
				'Proveedor' => $ver[10]
				
				);
			return $datos;
		}
		public function adjuntoDatos($idImagenesB){
			$obj= new conectar();
			$conexion=$obj->conexion();
			
			$sql="SELECT radiologia.idRadiologia, radiologia.Pacientes_Cedula FROM radiologia WHERE idRadiologia = '$idImagenesB'";
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'idRadiologia' => $ver[0],
				'Cedula' => $ver[1]
				);
			return $datos;
		}
		public function verDatos($idImagenesC){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="SELECT radiologia.idRadiologia, pacientes.Cedula, pacientes.Nombres, cama.N_Cama,radiologia.Fecha,radiologia.Orden, radiologia.Estado, radiologia.Observaciones, radiologia.Contraste, radiologia.Ambulancia, radiologia.Proveedor,radiologia.FRealizacion FROM radiologia Join pacientes ON radiologia.Pacientes_Cedula = pacientes.Cedula JOIN cama ON radiologia.Cama_idCama = cama.idCama WHERE radiologia.idRadiologia = '$idImagenesC'";
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);
			$datos=array(
				'idImagenes' => $ver[0],
				'Cedula' => $ver[1],
				'Nombres' => $ver[2],	
				'Cama' => $ver[3],	
				'Fecha' => $ver[4],	
				'Orden' => $ver[5],	
				'Estado' => $ver[6],	
				'Detalle' => $ver[7],	
				'Contraste' => $ver[8],	
				'Ambulancia' => $ver[9],	
				'Proveedor' => $ver[10],
				'FRealizacion' => $ver[11]
				
				);
			return $datos;
		}
		public function verDatos2($idImageness){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="SELECT radiologia.idRadiologia, pacientes.Cedula, pacientes.Nombres, cama.N_Cama,radiologia.Fecha,radiologia.Orden, radiologia.Estado, radiologia.Observaciones, radiologia.Contraste, radiologia.Ambulancia, radiologia.Proveedor,radiologia.Motivo_Cancelacion FROM radiologia Join pacientes ON radiologia.Pacientes_Cedula = pacientes.Cedula JOIN cama ON radiologia.Cama_idCama = cama.idCama WHERE radiologia.idRadiologia = '$idImageness'";
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);
			$datos=array(
				'idImagenes' => $ver[0],
				'Cedula' => $ver[1],
				'Nombres' => $ver[2],	
				'Cama' => $ver[3],	
				'Fecha' => $ver[4],	
				'Orden' => $ver[5],	
				'Estado' => $ver[6],	
				'Detalle' => $ver[7],	
				'Contraste' => $ver[8],	
				'Ambulancia' => $ver[9],	
				'Proveedor' => $ver[10],
				'Motivo_Cancelacion' => $ver[11]
				
				);
			return $datos;
		}
		public function motivoDatos($idImagenesD){
			$obj= new conectar();
			$conexion=$obj->conexion();
			
			$sql="SELECT radiologia.idRadiologia,radiologia.Pacientes_Cedula FROM radiologia WHERE idRadiologia = '$idImagenesD'";
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'idRadiologia' => $ver[0],
				'Cedula' => $ver[1]
				);
			return $datos;
		}
		public function actualizar($datos){
			header("Content-Type: application/json");
			$response = array('status'=>false, 'message'=>null);
			$obj= new conectar();
			$conexion=$obj->conexion();
			$sql=mysqli_query($conexion,"UPDATE `radiologia` SET `Estado`='$datos[2]',`Observaciones`='$datos[1]' WHERE `idRadiologia` = 	'$datos[0]'");
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
			public function actualizarMotivos($datos){
				header("Content-Type: application/json");
				$response = array('status'=>false, 'message'=>null);
				$obj= new conectar();
				$conexion=$obj->conexion();
				$sql=mysqli_query($conexion,"UPDATE `radiologia` SET `Motivo_Cancelacion` = '$datos[1]', `Estado`='4' WHERE `idRadiologia` = 	'$datos[0]'");
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
		public function aprobarSolicitud($idImagenes){
				$obj= new conectar();
				$conexion=$obj->conexion();
				$date=date('Y-m-d');
				$sql="UPDATE radiologia SET FRealizacion='$date',Estado='1'
		WHERE  idRadiologia ='$idImagenes'";
				return mysqli_query($conexion,$sql);
			}

		public function rechazarSolicitud($idImagenes){
				$obj= new conectar();
				$conexion=$obj->conexion();

				$sql="UPDATE radiologia SET Estado='4'
		WHERE  idRadiologia ='$idImagenes'";
				return mysqli_query($conexion,$sql);
			}
		
	 }

 ?>