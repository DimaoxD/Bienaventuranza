

<?php 

	class conectar{
		public function conexion(){
			$conexion=mysqli_connect('localhost',
										'root',
										'',
										'prueba_bips');
			$conexion -> set_charset(
				'utf8'
			);
			return $conexion;
		}
	}


 ?>