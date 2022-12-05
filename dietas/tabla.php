
<?php 
session_start();
require_once "scripts.php";
require_once "clases/conexion.php";
$obj= new conectar();
$conexion=$obj->conexion();

$sql="SELECT cama.idCama, cama.N_Cama, dietas.Fecha, Tipo_Dieta, Observaciones, cama.Pacientes_Cedula, pacientes.Nombres FROM cama 
Join pacientes on cama.Pacientes_Cedula = pacientes.Cedula JOIN dietas on dietas.Cama_idCama = cama.idCama";
$result=mysqli_query($conexion,$sql);
?>


<div>
	<table class="table table-condensed table-bordered table-striped no-wrap" id="iddatatable">
		<thead style="background-color: #009fa5;color: white; font-weight: bold;">
			<tr>
				<td>Fecha</td>
			    <td>No. Cama</td>
				<td>Cedula</td>
				<td>Nombre</td>
				<td>Tipo de dieta</td>
				<td>Opciones</td>
				
			</tr>
		</thead>
		<tfoot style="background-color: #009fa5;color: white; font-weight: bold;">
			<tr>
			<td>Fecha</td>
			    <td>No. Cama</td>
				<td>Cedula</td>
				<td>Nombre</td>
				<td>Tipo de dieta</td>
				<td>Opciones</td>				
			</tr>
		</tfoot>
		<tbody >
		<tr>
		<?php 
			 while($ver=mysqli_fetch_row($result)){?>
				<td><?php echo $ver[2]?></td>
				<td><?php echo $ver[1]?></td>
				<td><?php if($ver[5]==1){
					echo "";
				}elseif($ver[5]==2){
					echo "";
				}else{
					echo $ver[5];
				}?></td>
				<td><?php echo $ver[6]?></td>
				<td><?php if($ver[3]==1) echo "NORMAL,$ver[4]";
				elseif($ver[3]==2) echo "BLANDA,$ver[4]";
				elseif($ver[3]==3) echo "SEMIBLANDA,$ver[4]";
				elseif($ver[3]==4) echo "TODO PURE,$ver[4]";
				elseif($ver[3]==5) echo "LIQUIDA TOTAL,$ver[4]";
				elseif($ver[3]==6) echo "LIQUIDA CLARA,$ver[4]";
				elseif($ver[3]==7) echo "HIPERCALORICA HIPERPROTEICA,$ver[4]";
				elseif($ver[3]==8) echo "HIPOGRASA,$ver[4]";
				elseif($ver[3]==9) echo "RENAL,$ver[4]";
				elseif($ver[3]==10) echo "RENAL DIALISIS,$ver[4]";
				elseif($ver[3]==11) echo "HIPLOGUCIDA,$ver[4]";
				elseif($ver[3]==12) echo "HIPOSODICA,$ver[4]";
				elseif($ver[3]==13) echo "NADA VIA ORAL,$ver[4]";
				elseif($ver[3]==14) echo "SIN DIETA,$ver[4]"; ?></td>				
					<td>
					<?php 					
					if(($ver[5]==1) OR ($ver[5]==2)){?>
					<span class="btn btn-info btn-sm"><span class="fa-regular fa-hand"></span> Cama Desocupada </span>					
					<?php }else{ ?>
						<span class="btn btn-primary btn-sm" data-bs-toggle="modal" style="background-color: #009fa5;color: white; font-weight: bold;" data-bs-target="#agregarnuevosdatosmodal" onclick="agregaFrmActualizar('<?php echo $ver[0] ?>')">
						<span class="fa-solid fa-pen-to-square"></span> Asignar Dieta </span>
					<?php }?>
					</td>
				</tr>
				<?php 
			}
			?>
		</tbody>
	</table>
</div>


<script type="text/javascript">
	$(document).ready(function() {
		$('#iddatatable').DataTable({
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
        dom: 'Bfrtilp',       
		buttons: [ 'excel', 'pdf' ]	           
    });     
});

</script>

