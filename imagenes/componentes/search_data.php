<?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
                $RUT = $_POST["Cedula"];
             
                // Codigo para buscar en tu base de datos acá
                $conexion=mysqli_connect('localhost',
                'root',
                '',
                'prueba_bips');

                $sqlsi = "SELECT DISTINCT pacientes.Nombres, cama.N_Cama FROM cama JOIN pacientes on pacientes.Cedula = Pacientes_Cedula WHERE Pacientes_Cedula = '$RUT'";
                $sqlsi2= "SELECT * FROM pacientes WHERE Cedula = '$RUT'";
                $result=mysqli_query($conexion,$sqlsi);
                $result2=mysqli_query($conexion,$sqlsi2);
                if(mysqli_num_rows($result)>0){
			    $dato=mysqli_fetch_row($result);
                
                $Nombres = $dato[0];
                $Cama = $dato[1];
                
               echo json_encode([
                'Nombre' => $Nombres,
                'Cama' => $Cama
               ]);
             
            } else {

                if(mysqli_num_rows($result2)>0){

                    $Nombres = "Paciente existe pero no tiene cama asignada";
                    $Cama = "Por favor, asignar cama. ";
                
                echo json_encode([
                    'Nombre' => $Nombres,
                    'Cama' => $Cama
                ]);

                }else{
                
                 $Nombres = "Paciente no existente";
                 $Cama = "";
                 echo json_encode([
                    'Nombre' => $Nombres,
                    'Cama' => $Cama
                 ]);

                }
            }}

 ?>

