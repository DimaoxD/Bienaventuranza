<?php

$conexion = new mysqli("localhost","root","","prueba_bips");

$Cedula=$_GET['q'];

$resultado=$conexion->query("SELECT * FROM pacientes WHERE Cedula LIKE '%$Cedula%'");

$datos = array ();

while($row=$resultado->fetch_assoc()){
    $datos[]=$row['Cedula'];
}
echo json_encode($datos);
?>