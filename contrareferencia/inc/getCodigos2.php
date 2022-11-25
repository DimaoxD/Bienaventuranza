<?php

require 'database.php';

$con = new Database();
$pdo = $con->conectar();

$campo = $_POST["Lugar"];

$sql = "SELECT idHospital, Nombre_Hospital FROM hospitales WHERE idHospital LIKE ? OR Nombre_Hospital LIKE ? ORDER BY idHospital LIMIT 4";
$query = $pdo->prepare($sql);
$query->execute(['%' .$campo . '%','%' .$campo . '%']);

$html = "";

while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
	$html .= "<li class='lista3' onclick=\"mostrar('" . $row["Nombre_Hospital"] . "')\">" . $row["Nombre_Hospital"] . "</li>";
}

echo json_encode($html, JSON_UNESCAPED_UNICODE);
