
<?php 
session_start();
require_once "scripts.php";
require_once "clases/conexion.php";
$obj= new conectar();
$conexion=$obj->conexion();

$sql="SELECT idCama, cama.N_Cama, dietas.Fecha, Tipo_Dieta, Observaciones, cama.Pacientes_Cedula, pacientes.Nombres FROM cama 
Join pacientes on cama.Pacientes_Cedula = pacientes.Cedula JOIN dietas on dietas.Cama_idCama = cama.idCama";
$result=mysqli_query($conexion,$sql);
?>


<div>
<div class="table-responsive">
	<table class="table table-hover table-condensed table-bordered nowrap" style="width:100%" id="iddatatable">
		<thead style="background-color: #dc3545;color: white; font-weight: bold;">
			<tr>
				<td>Fecha</td>
			    <td>No. Cama</td>
				<td>Cedula</td>
				<td>Nombre</td>
				<td>Tipo de dieta</td>
				<td>Opciones</td>
				
			</tr>
		</thead>
		<tfoot style="background-color: #ccc;color: white; font-weight: bold;">
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
				<td><?php if($ver[3]==1) echo "Normal,$ver[4]";
				elseif($ver[3]==2) echo "Blanda,$ver[4]";
				elseif($ver[3]==3) echo "Semiblanda,$ver[4]";
				elseif($ver[3]==4) echo "Todo pure,$ver[4]";
				elseif($ver[3]==5) echo "Liquida total,$ver[4]";
				elseif($ver[3]==6) echo "Liquida clara,$ver[4]";
				elseif($ver[3]==7) echo "Hipercalorica hiperproteica,$ver[4]";
				elseif($ver[3]==8) echo "Hipograsa,$ver[4]";
				elseif($ver[3]==9) echo "Renal,$ver[4]";
				elseif($ver[3]==10) echo "Renal Dialisis,$ver[4]";
				elseif($ver[3]==11) echo "Hipoglucida,$ver[4]";
				elseif($ver[3]==12) echo "Hiposodica,$ver[4]";
				elseif($ver[3]==13) echo "Nada via oral,$ver[4]";
				elseif($ver[3]==14) echo "Sin dieta,$ver[4]"; ?></td>				
					<!-- Esto es el dropdown -->
					<td style="text-align: center;">
					<div class="dropdown">
					<button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
						<span class="fa-regular fa-bars"> </span> Opciones
			</button>
					<ul class="dropdown-menu">
					<li style="text-align: center;"><a class="dropdown-item" ><?php if ($ver[3]){ ?>
						<span class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#agregarnuevosdatosmodal" onclick="agregaFrmActualizar('<?php echo $ver[0] ?>')">
							<span class="fa-solid fa-pen-to-square"></span> Asignar Cama </span>
					
					
														<?php	}elseif($ver[2]=='3' OR $ver[2]=='4' OR $ver[2]='5'){ ?>
						<span class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEstado" onclick="estadoFrmActualizar('<?php echo $ver[0] ?>')">
						<span class="fa-solid fa-location-pin-lock"></span> Cambiar estado
						</span> 
					<?php }elseif($ver[2]=='2'){ ?>
						<span class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditar" onclick="agregaFrmActualizar('<?php echo $ver[0] ?>')">
							<span class="fa-solid fa-pen-to-square"></span> Asignar Cama </span><?php } else {?>					
							<span class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditar" onclick="agregaFrmActualizar('<?php echo $ver[0] ?>')">
							<span class="fa-solid fa-pen-to-square"></span> Asignar Cama </span><?php } ?>					
					</a></li>
					<li><hr class="dropdown-divider"></li>
					<li style="text-align: center;"><span class="btn btn-danger btn-sm" onclick="eliminarDatos('<?php echo $ver[0] ?>')">
							<span class="fa fa-trash"></span> Desocupar cama
						</span></li>
					<li><hr class="dropdown-divider"></li>
					<li style="text-align: center;"><span class="btn btn-success btn-sm" onclick="inhabilitarDatos('<?php echo $ver[0] ?>')">
							<span class="fa fa-hourglass"></span> Inhabilitar cama
						</span></li>
					</ul>
					</div>

					
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
        buttons:[ 
			{
				extend:    'excelHtml5',
				text:      '<i class="fas fa-file-excel"></i> ',
				titleAttr: 'Exportar a Excel',
				className: 'btn btn-success'
			},
			{
				extend:    'pdfHtml5',
				text:      '<i class="fas fa-file-pdf"></i> ',
				titleAttr: 'Exportar a PDF',
				className: 'btn btn-danger'
			},
			{
				extend:    'print',
				text:      '<i class="fa fa-print"></i> ',
				titleAttr: 'Imprimir',
				className: 'btn btn-info'
			},
		]	        
    });     
});

</script>

