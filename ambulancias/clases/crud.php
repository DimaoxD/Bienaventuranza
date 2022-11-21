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

		public function actualizar($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$resultados=mysqli_query($conexion, "SELECT * FROM pacientes WHERE Cedula='$datos[0]'");
			if(mysqli_num_rows($resultados)>0){
			$sql="UPDATE cama set Pacientes_Cedula='$datos[0]',
								  Estado='$datos[1]'
							  where N_Cama='$datos[2]'";
			return mysqli_query($conexion,$sql);
			}}


		public function eliminar($id_Cama){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="UPDATE cama, pacientes SET Estado='Inactivo',Pacientes_Cedula=1 
	WHERE  idCama='$id_Cama'";
			return mysqli_query($conexion,$sql);
		}
	}

 ?>