

<?php 

	class conectar{
		public function conexion(){
			$conexion=mysqli_connect("localhost",
										"jgarciabienaventuranza",
										"DbB1en@v3ntuR@nzA",
										"prueba_bips");
			$conexion -> set_charset(
				'utf8'
			);
			return $conexion;
		}
	}


 ?>