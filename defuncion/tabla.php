
<?php 
session_start();
require_once "scripts.php";
require_once "clases/conexion.php";
$obj= new conectar();
$conexion=$obj->conexion();

$sql="SELECT especialistas.Nombre, codigos_defuncion.certificado, pacientes.Cedula, pacientes.Nombres, defuncion.Fecha_Defuncion, defuncion.idDefuncion
FROM defuncion JOIN especialistas ON especialistas.Cedula = Especialistas_Cedula  JOIN codigos_defuncion ON codigos_defuncion.id = id_codigos JOIN pacientes ON pacientes.Cedula = Pacientes_Cedula";
$result=mysqli_query($conexion,$sql);
?>


<div>
<div class="table-responsive">
<table class="table table-hover table-condensed  nowrap" style="width:100%" id="iddatatable">
		<thead style="background-color: #009fa5;color: white; font-weight: bold;">
			<tr>
			    <td>Numero de certificado</td>
				<td>Cedula del paciente</td>
				<td>Nombres del paciente</td>
				<td>Nombre del medico</td>
				<td>Fecha de la solicitud</td>
				<td>Opciones</td>
				
			</tr>
		</thead>
		<tfoot style="background-color: #009fa5;color: white; font-weight: bold;">
			<tr>
			<td>Numero de certificado</td>
				<td>Cedula del paciente</td>
				<td>Nombres del paciente</td>
				<td>Nombre del medico</td>
				<td>Fecha de la solicitud</td>
				<td>Opciones</td>
			</tr>
		</tfoot>
		<tbody >
		<tr>
		<?php 
			 while($ver=mysqli_fetch_row($result)){?>
				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[2] ?></td>
				<td><?php echo $ver[3] ?></td>
				<td><?php echo $ver[0] ?></td>
				<td><?php echo $ver[4] ?></td>				
					<!-- Esto es el dropdown -->
					<td style="text-align: center;">
						<span class="btn btn-primary btn-sm" style="background-color: #009fa5;color: white; font-weight: bold;" data-bs-toggle="modal" data-bs-target="#modificardatosmodal" onclick="agregaFrmActualizar('<?php echo $ver[5] ?>')">
							<span class="fa-solid fa-pen-to-square"></span>Modificar Datos </span>
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

