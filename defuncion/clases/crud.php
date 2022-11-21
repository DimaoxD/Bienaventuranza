<?php 
	
	class crud{
		
		public function obtenDatos($idDefuncion){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="SELECT defuncion.idDefuncion,especialistas.Cedula, codigos_defuncion.certificado, pacientes.Nombres, defuncion.Fecha_Defuncion
			FROM defuncion JOIN especialistas ON defuncion.Especialistas_Cedula = especialistas.Cedula JOIN codigos_defuncion ON defuncion.id_codigos = codigos_defuncion.id JOIN pacientes ON defuncion.Pacientes_Cedula = pacientes.Cedula
			WHERE idDefuncion = '$idDefuncion'";
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'idDefuncion' => $ver[0],
				'Cedula' => $ver[1],
				'id' => $ver[2],	
				'Nombres' => $ver[3],
				'Fecha_Defuncion' => $ver[4]
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

		
	 }

 ?>