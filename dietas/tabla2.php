
<?php 
session_start();
require_once "scripts.php";
require_once "clases/conexion.php";
$obj= new conectar();
$conexion=$obj->conexion();

$sql="SELECT `idSugerencias`, sugerencias.Fecha, `Observaciones`, `Tipo_dieta`, cama.N_Cama, cama.Pacientes_Cedula, pacientes.Nombres FROM `sugerencias`
JOIN cama ON cama.idCama = sugerencias.Cama_idCama  JOIN pacientes ON pacientes.Cedula = cama.Pacientes_Cedula WHERE sugerencias.Fecha = CURRENT_DATE";
$result=mysqli_query($conexion,$sql);
?>


<div>
<div class="table-responsive">
<table class="table table-hover table-condensed  nowrap" style="width:100%" id="iddatatable2">
		<thead style="background-color: #009fa5;color: white; font-weight: bold;">
			<tr>
				<td>Fecha</td>
			    <td>No. Cama</td>
				<td>Cedula</td>
				<td>Nombre</td>
				<td>Sugerencia de dieta</td>		
			</tr>
		</thead>
		<tfoot style="background-color: #009fa5;color: white; font-weight: bold;">
			<tr>
			<td>Fecha</td>
			<td>No. Cama</td>
			<td>Cedula</td>
			<td>Nombre</td>
			<td>Sugerencia de dieta</td>
			</tr>
		</tfoot>
		<tbody >
		<tr>
		<?php 
			 while($ver=mysqli_fetch_row($result)){?>
				<td><?php echo $ver[1]?></td>
				<td><?php echo $ver[4]?></td>
				<td><?php echo $ver[5]?></td>
				<td><?php echo $ver[6]?></td>
				<td><?php if($ver[3]==1) echo "Normal,$ver[2]";
				elseif($ver[3]==2) echo "Blanda,$ver[2]";
				elseif($ver[3]==3) echo "Semiblanda,$ver[2]";
				elseif($ver[3]==4) echo "Todo pure,$ver[2]";
				elseif($ver[3]==5) echo "Liquida total,$ver[2]";
				elseif($ver[3]==6) echo "Liquida clara,$ver[2]";
				elseif($ver[3]==7) echo "Hipercalorica hiperproteica,$ver[2]";
				elseif($ver[3]==8) echo "Hipograsa,$ver[2]";
				elseif($ver[3]==9) echo "Renal,$ver[2]";
				elseif($ver[3]==10) echo "Renal Dialisis,$ver[2]";
				elseif($ver[3]==11) echo "Hipoglucida,$ver[2]";
				elseif($ver[3]==12) echo "Hiposodica,$ver[2]";
				elseif($ver[3]==13) echo "Nada via oral,$ver[2]";
				elseif($ver[3]==14) echo "Sin dieta,$ver[2]"; ?></td>				
					</tr>
				<?php 
			}
			?>
		</tbody>
	</table>
</div>


<script type="text/javascript">
	$(document).ready(function() {
		$('#iddatatable2').DataTable({
		language: {
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No se encontraron resultados",
                "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sSearch": "Buscar:",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast":"Último",
                    "sNext":"Siguiente",
                    "sPrevious": "Anterior"
			     },
			     "sProcessing":"Procesando...",
            },
        //para usar los botones   
        responsive: "true",
        dom: 'rtilp',       
		buttons: [ 'excel', 'pdf' ]	   	        
    });     
});

</script>

