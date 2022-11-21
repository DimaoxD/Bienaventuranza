<?php

require 'database.php';

$con = new Database();
$pdo = $con->conectar();

$CedulaU = $_POST["CedulaU"];

$sql = "SELECT Cedula, Nombres FROM pacientes";
$query = $pdo->prepare($sql);
$query->execute([$CedulaU . '%', $CedulaU . '%']);

$html = "";

while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
	$html .= "<li onclick=\"mostrar('" . $row["Cedula"] . "')\">" . $row["Cedula"] . " - " . $row["Nombres"] . "</li>";
}

echo json_encode($html, JSON_UNESCAPED_UNICODE);
?>