<?php $conexion=mysqli_connect('localhost',
										'root',
										'',
										'prueba_bips');
			$conexion -> set_charset(
				'utf8'
			);

            header("Content-Type: application/json");
            $response = array('status'=>false, 'message'=>null);

            if(isset($_POST["Cedula"])){
                $respuesta="";  
                $Cedula =$_POST["Cedula"];
                $result=mysqli_query($conexion,"SELECT Pacientes_Cedula FROM referencias WHERE Pacientes_Cedula='$Cedula'");
                if(mysqli_num_rows($result)>0){
                    $fecha=mysqli_query($conexion,"SELECT MAX(`F_Presentacion`) AS `F_Presentacion` FROM referencias WHERE `Pacientes_Cedula` = '$Cedula'");
                    while($row=mysqli_fetch_row($fecha)){
                        $idFecha=$row[0];
                    $response['message'] = 'Este paciente cuenta con un registro en la siguiente fecha:'.' '.$idFecha; 
                    $response['status'] = true; 
                    }}
                    echo json_encode($response);
                }
            

?>

