
<?php 
session_start();
require_once "scripts.php";
require_once "clases/conexion.php";

$obj= new conectar();
$conexion=$obj->conexion();
$sql="SELECT distinct referencias.F_Presentacion,referencias.F_Respuesta,referencias.Pacientes_Cedula,pacientes.Nombres,referencias.Respuesta_Referencia,
referencias.Covid,referencias.IPS_Remitente,diagnosticos.Nombre_Diagnosticos,referencias.Motivo_Aceptacion,recepcion.Nombre, especialistas.Nombre, referencias.Motivo_Cancelacion,referencias.idReferencias,referencias.adjuntos, referencias.F_Ingreso
FROM referencias JOIN pacientes on pacientes.Cedula = Pacientes_Cedula JOIN recepcion on Recepcion_Cedula = Recepcion.Cedula JOIN
especialistas on Especialistas_Cedula = especialistas.Cedula JOIN diagnosticos on diagnosticos.idDiagnosticos= referencias.idDiagnosticos";
$result=mysqli_query($conexion,$sql);
?>



<div>
<div class="table-responsive">
	<table class="table table-hover table-condensed table-bordered nowrap" style="width:100%" id="iddatatable">
		<thead style="background-color: #dc3545;color: white; font-weight: bold;">
			<tr>
			<th>F. Presentacion</th>
			<th>F. Respuesta</th>
			<th>Cedula</th>
			<th>Nombre</th>
			<th>Respuesta al Caso</th>
			<th>COVID</th>
			<th>IPS Remitente</th>
			<th>Diagnostico</th>
			<th>Motivo de Aceptacion</th>
			<th>Referencista</th>
			<th>Especialista que aprueba</th>
			<th>Motivo de Cancelacion</th>
			<th>Fecha de Ingreso</th>
			
				<th>Editar</th>
				<th>Mostrar PDF</th>
			</tr>
		</thead>
		
		<tbody >
		<tr>
		<?php 
			 while($ver=mysqli_fetch_row($result)){?>
			 	<td><?php echo $ver[0] ?></td>
				<td><?php if($ver[1]==NULL){
					echo "Sin definir";} 
					else{
						echo $ver[1];
					}
					?></td>
				<td><?php echo $ver[2]?></td>
				<td><?php echo $ver[3] ?></td>
				<td><?php if ( $ver[4]==1){
					echo "Aceptado";} else{
					echo "No aceptado";} ?></td>
				<td><?php echo $ver[5] ?></td>
				<td><?php echo $ver[6] ?></td>
				<td><?php echo $ver[7] ?></td>
				<td><?php if($ver[8]==NULL){
					echo "Sin establecer";
				}else{
					echo $ver[8];
				} ?></td>
				 <td><?php echo $ver[9] ?></td> 
				<td><?php echo $ver[10] ?></td>
				<td><?php if($ver[11]==NULL){
					echo "Sin establercer";
				} else {
					echo $ver[11];
				}
					?></td>
				<td ><?php if( $ver[14] == '1980-01-01' OR $ver[14] == NULL ){ echo "Sin definir";}
				else{
					echo  $ver[14];
				}
				?></td>
			
				
					<td style="text-align: center;">  
						
							<span class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditar" onclick="agregaFrmActualizar('<?php echo $ver[12] ?>')">
							<span class="fa-solid fa-pen-to-square"></span> 
							</span>
					</td>
					<td style="text-align: center;">
					<?php if ($ver[13]=='0'){ ?>
											<span class="btn btn-danger btn-sm">
											<span class="fa-solid fa-lock"></span>

														<?php	}else{ ?>
					<a class="btn btn-primary btn-sm" target="_black" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/datatable - copia/referencias/procesos/'. $ver['13']; ?>" ><span class="fa-solid fa-pen-to-square"></span></a>
					<?php } ?>
					</td>
				</tr>
				<?php 
			}
			?>
		</tbody>
	</table>
</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$('#iddatatable').DataTable({
			order: [[0, 'desc']],
			responsive:true,
			pageLength: 50,
		language: {
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No se encontraron resultados",
                "info": "Mostrando del _START_ al _END_ de un total de _TOTAL_ registros",
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


