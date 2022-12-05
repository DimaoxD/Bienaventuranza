<?php
$conn = new mysqli("localhost","root","","prueba_bips");

$sql = "UPDATE log_dietas SET estado = 1 WHERE estado = 0";	
$result = mysqli_query($conn, $sql);

$sql = "SELECT cama.N_Cama,pacientes.Cedula,pacientes.Nombres,FCambio,EstadoNotificaciones FROM log_dietas JOIN pacientes ON log_dietas.Pacientes_Cedula = pacientes.Cedula JOIN dietas ON log_dietas.Dietas_IdDietas = dietas.idDietas JOIN cama ON log_dietas.Cama_idCama = cama.idCama WHERE FCambio > CURRENT_DATE";
$result = mysqli_query($conn, $sql);

$response='';

while($row=mysqli_fetch_array($result)) {
	if($row["EstadoNotificaciones"] == 1 ){

	$response = $response . "<hr>". "<ul class='list-group list-group-light'>". "<li class='list-group-item px-3 border-0 rounded-3 list-group-item-success mb-2'>" . "LA CAMA". " ". $row["N_Cama"] ." ". "HA SIDO OCUPADA POR EL PACIENTE" . " " . $row["Nombres"]  . " " . "</li>" . "</ul>";
	}elseif($row["EstadoNotificaciones"] ==2){
		
	$response = $response . "<hr>". "<ul class='list-group list-group-light'>". "<li class='list-group-item px-3 border-0 rounded-3 list-group-item-danger mb-2'>" . "LA CAMA". " ". $row["N_Cama"] ." ". "HA SIDO DESOCUPADA POR EL PACIENTE" . " " . $row["Nombres"]  . " " . "</li>" . "</ul>";
	
	}
}
if(!empty($response)) {
	print $response;
}


?>