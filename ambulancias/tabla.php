
<?php 
session_start();
require_once "scripts.php";
require_once "clases/conexion.php";
$obj= new conectar();
$conexion=$obj->conexion();

$sql="SELECT cama.idCama,cama.N_Cama,cama.Estado,cama.Pacientes_Cedula, pacientes.Nombres FROM cama 
Join pacientes on cama.Pacientes_Cedula = pacientes.Cedula";
$result=mysqli_query($conexion,$sql);
?>


<div>
	<table class="table table-hover table-condensed table-bordered" id="iddatatable">
		<thead style="background-color: #dc3545;color: white; font-weight: bold;">
			<tr>
			    <td>No. Cama</td>
				<td>Estado</td>
				<td>Cedula</td>
				<td>Nombre</td>
				<td>Editar</td>
				<td>Eliminar</td>
			</tr>
		</thead>
		<tfoot style="background-color: #ccc;color: white; font-weight: bold;">
			<tr>
			<td>No. Cama</td>
				<td>Estado</td>
				<td>Cedula</td>
				<td>Nombre</td>
				<td>Editar</td>
				<td>Eliminar</td>
			</tr>
		</tfoot>
		<tbody >
		<tr>
		<?php 
			 while($ver=mysqli_fetch_row($result)){?>
				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[2];?></td>
				<td><?php if($ver[3]==1){
					echo "";
				} else{echo $ver[3]; }
				?></td>
				<td><?php echo $ver[4] ?></td>
				
					<td style="text-align: center;">  <?php if($ver[2]=='Activo'){ ?>
						<span class="btn btn-warning btn-sm" data-bs-toggle="modal"  data-bs-target="#modalDenegado">
						<span class="fa-solid fa-location-pin-lock"></span>
						</span> <?php } else{ ?>
							<span class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditar" onclick="agregaFrmActualizar('<?php echo $ver[0] ?>')">
							<span class="fa-solid fa-pen-to-square"></span> <?php } ?>
					</td>
					<td style="text-align: center;">
						<span class="btn btn-danger btn-sm" onclick="eliminarDatos('<?php echo $ver[0] ?>')">
							<span class="fa fa-trash"></span>
						</span>
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

