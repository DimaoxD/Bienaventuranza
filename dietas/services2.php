<?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
                $RUT = $_POST["CamaS"];
                
             
                // Codigo para buscar en tu base de datos acá
                $conexion=mysqli_connect('localhost',
                'root',
                '',
                'prueba_bips');
                $Dig=mysqli_query($conexion,"SELECT idCama FROM cama WHERE N_Cama = '$RUT'");
                while($row=mysqli_fetch_row($Dig)){
                    $idDig=$row[0];
                $sqlsi = "SELECT cama.Pacientes_Cedula,pacientes.Nombres FROM cama JOIN pacientes ON cama.Pacientes_Cedula = pacientes.Cedula WHERE N_Cama = '$RUT'";
                $sqlsi2 = "SELECT Tipo_Dieta FROM dietas WHERE idDietas = $idDig";
                $result2=mysqli_query($conexion,$sqlsi2);
                $dato2=mysqli_fetch_row($result2);
                $result=mysqli_query($conexion,$sqlsi);
                if(mysqli_num_rows($result)>0){
                $dato=mysqli_fetch_row($result);
                    
                $CedulasS = $dato[0];
                $NombresS = $dato[1];
                $TDietaS = $dato2[0];
                
                
               echo json_encode([
                'CedulasS' => $CedulasS,
                'NombresS' => $NombresS,
                'TDietaS' => $TDietaS
               ]);
             
            } else {
                    
                    $CedulasS = "Cama";
                    $NombresS = "Desocupada";
                    

                echo json_encode([
                    'CedulasS' => $CedulasS,
                    'NombresS' => $NombresS                    
                ]);

                }
            }
            }

 ?>