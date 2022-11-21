<?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
                $RUT1 = $_POST["CedulaU"];
             
                // Codigo para buscar en tu base de datos acá
                $conexion=mysqli_connect('localhost',
                'root',
                '',
                'prueba_bips');

                $sqlsi = "SELECT Cedula, Nombres FROM pacientes WHERE Cedula = '$RUT1'";
                $result=mysqli_query($conexion,$sqlsi);
                if(mysqli_num_rows($result)>0){
			$dato=mysqli_fetch_row($result);
                          
                    $NombreU = $dato[1];
                echo json_encode(['NombreU' => $NombreU]);
             
            } else {
                $NombreU = "Paciente no registrado";
                echo json_encode(['NombreU' => $NombreU]);
            }}

 ?>
