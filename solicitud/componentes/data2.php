<?Php
error_reporting(0);// With this no error reporting will be there
require "config.php";
$id=$_GET['id'];
$q="select *  from diagnosticos where Cod_Diagnosticos=:id";
//echo $q;
$count=$dbo->prepare($q);
$count->bindParam(":id",$id,PDO::PARAM_INT,5);

if($count->execute()){
$row = $count->fetch(PDO::FETCH_OBJ);
echo "ID: $row->idDiagnosticos,Codigo: $row->Cod_Diagnosticos , Nombre: $row->Nombre_Diagnosticos, Detalle: $row->Detalle_Diagnosticos";
}
?>


