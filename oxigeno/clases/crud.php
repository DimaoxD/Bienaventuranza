<?php 
	
	class crud{
		
		public function obtenDatos($idOxigeno){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="SELECT oxigeno.idOxigeno, oxigeno.Pacientes_Cedula, pacientes.Nombres FROM oxigeno JOIN pacientes ON oxigeno.Pacientes_Cedula = pacientes.Cedula WHERE idOxigeno = '$idOxigeno'";
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'idOxigeno' => $ver[0],
				'Cedula' => $ver[1],
				'Nombres' => $ver[2],	
				
				);
			return $datos;
		}
		

		public function actualizar($datos){
			header("Content-Type: application/json");
			$response = array('status'=>false, 'message'=>null);
			$obj= new conectar();
			$conexion=$obj->conexion();
			$sql=mysqli_query($conexion,"UPDATE `defuncion` SET `Fecha_Defuncion`='$datos[2]',`Especialistas_Cedula`='$datos[1]' WHERE `idDefuncion` = 	'$datos[0]'");
				$response['message'] = "success"; 
				$response['status'] = true; 
				echo json_encode($response);
				exit(); 
			}

		public function aprobarSolicitud($idOxigeno){
				$obj= new conectar();
				$conexion=$obj->conexion();
	
				$sql="UPDATE oxigeno SET Estado='1'
		WHERE  idOxigeno ='$idOxigeno'";
				return mysqli_query($conexion,$sql);
			}

		public function rechazarSolicitud($idOxigeno){
				$obj= new conectar();
				$conexion=$obj->conexion();
	
				$sql="UPDATE oxigeno SET Estado='3'
		WHERE  idOxigeno ='$idOxigeno'";
				return mysqli_query($conexion,$sql);
			}
		
	 }

 ?>