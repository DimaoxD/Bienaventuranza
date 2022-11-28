<?php

require 'database.php';

$con = new Database();
$pdo = $con->conectar();

$campo = $_POST["CamaS"];

$sql = "SELECT idCama, N_Cama FROM cama WHERE idCama LIKE ? OR N_Cama LIKE ? ORDER BY idCama ASC LIMIT 0, 4";
$query = $pdo->prepare($sql);
$query->execute(['%' .$campo . '%','%' .$campo . '%']);

$html = "";

while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
	$html .= "<li class='lista1' onclick=\"mostrar('" . $row["N_Cama"] . "')\">" . $row["N_Cama"] .  "</li>";
}

echo json_encode($html, JSON_UNESCAPED_UNICODE);
