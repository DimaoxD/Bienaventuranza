<?php
// Si no hay búsqueda, mostrar un arreglo vacío y salir
if (empty($_GET["busqueda"])) {
    echo "[]";
    exit;
}
$bd = include_once "bd.php";
$busqueda = $_GET["busqueda"];
$sentencia = $bd->prepare("select * from diagnosticos where Nombre_Diagnosticos like ?");
$sentencia->execute(["%$busqueda%"]);
$diagnosticos = $sentencia->fetchAll(PDO::FETCH_OBJ);
echo json_encode($diagnosticos);