<?php

require 'database.php';

$con = new Database();
$pdo = $con->conectar();

$campo = $_POST["Diagnosticos"];

$sql = "SELECT Cod_Diagnosticos, Nombre_Diagnosticos FROM diagnosticos WHERE Cod_Diagnosticos LIKE ? OR Nombre_Diagnosticos LIKE ? ORDER BY Cod_Diagnosticos ASC LIMIT 0, 4";
$query = $pdo->prepare($sql);
$query->execute([$campo . '%', $campo . '%']);

$html = "";

while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
	$html .= "<li class='lista1' onclick=\"mostrar('" . $row["Nombre_Diagnosticos"] . "')\">" . $row["Cod_Diagnosticos"] . " - " . $row["Nombre_Diagnosticos"] . "</li>";
}

echo json_encode($html, JSON_UNESCAPED_UNICODE);
