<?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
                $RUT = $_POST["CedulaA"];
                
             
                // Codigo para buscar en tu base de datos acá
                $conexion=mysqli_connect('localhost',
                'root',
                '',
                'prueba_bips');

                $sqlsi = "SELECT Cedula,Nombres FROM pacientes WHERE Cedula = '$RUT'";
                $result=mysqli_query($conexion,$sqlsi);
                if(mysqli_num_rows($result)>0){
                $dato=mysqli_fetch_row($result);
                    
                $CedulaAA = $dato[0];
                $NombresA = $dato[1];
                
                
               echo json_encode([
                'CedulaAA' => $CedulaAA,
                'NombresAA' => $NombresA      
               ]);
             
            } else {
                    
                    $CedulaAA = "No existe";
                    $NombresA = "Paciente";
                    

                echo json_encode([
                    'CedulaAA' => $CedulaAA,
                    'NombresAA' => $NombresA                    
                ]);

                }

            }

 ?>