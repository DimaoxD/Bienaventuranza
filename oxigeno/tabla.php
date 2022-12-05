
<?php 
session_start();
require_once "scripts.php";
require_once "clases/conexion.php";
$obj= new conectar();
$conexion=$obj->conexion();

$sql="SELECT oxigeno.idOxigeno,oxigeno.Estado,oxigeno.Observaciones,oxigeno.Pacientes_Cedula,pacientes.Nombres
FROM oxigeno JOIN pacientes ON oxigeno.Pacientes_Cedula = pacientes.Cedula";
$result=mysqli_query($conexion,$sql);
?>


<div>
<div class="table-responsive">
<table class="table table-hover table-condensed  nowrap" style="width:100%" id="iddatatable">
		<thead style="background-color: #009fa5;color: white; font-weight: bold;">
			<tr>
			    <td>Cedula del paciente</td>
				<td>Nombre del paciente</td>
				<td>Estado de la solicitud</td>
				<td>Mostrar PDF</td>
				
				
			</tr>
		</thead>
		<tfoot style="background-color: #009fa5;color: white; font-weight: bold;">
			<tr>
			<td>Cedula del paciente</td>
				<td>Nombre del paciente</td>
				<td>Estado de la solicitud</td>
				<td>Mostrar PDF</td>
				
			</tr>
		</tfoot>
		<tbody >
		<tr>
		<?php 
			 while($ver=mysqli_fetch_row($result)){?>
				<td><?php echo $ver[3] ?></td>
				<td><?php echo $ver[4] ?></td>
				<td><?php if($ver[1]==2){
					echo "En proceso";
				}elseif($ver[1]==1){
					echo "Aprobado";
				}else{
					echo "Rechazado";
				} ?></td>
				<td><div class="dropdown">
					<button class="btn btn-primary btn-sm dropdown-toggle" style="background-color: #009fa5;color: white; font-weight: bold;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
						<span class="fa-regular fa-bars"> </span> Opciones
			</button>
					<ul class="dropdown-menu">
					<li style="text-align: center;"><a class="dropdown-item" ><?php if ($ver[1]==2){ ?>
											<span class="btn btn-warning btn-sm">
											Solicitud en proceso</span>
					<li><hr class="dropdown-divider"></li>	
					<a class="dropdown-item" ><span class="btn btn-success btn-sm"  onclick="aprobarSolicitud('<?php echo $ver[0] ?>')">
					<span class="fa-solid fa-pen-to-square"></span> Aprobar solicitud
					</span>
					<li><hr class="dropdown-divider"></li>	
					<a class="dropdown-item" ><span class="btn btn-danger btn-sm"  onclick="rechazarSolicitud('<?php echo $ver[0] ?>')">
					<span class="fa-solid fa-pen-to-square"></span> Rechazar solicitud
					</span>
					<li><hr class="dropdown-divider"></li>
					<li style="text-align: center;"> <span style="background-color: #009fa5;color: white; font-weight: bold;" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modificardatosmodal" onclick="agregaFrmActualizar('<?php echo $ver[0] ?>')">
							<span class="fa-solid fa-pen-to-square"></span> Modificar Orden </span></li>
														<?php	}elseif($ver[1]==1){ ?>
															<span class="btn btn-success btn-sm">
															Solicitud aprobada</span>
					<?php } else{ ?>
													<span class="btn btn-danger btn-sm">
													Solicitud rechazada</span>
					<?php }?>					
					</a></li>
					<li><hr class="dropdown-divider"></li>
					<li style="text-align: center;"> <a class="btn btn-primary btn-sm" style="background-color: #009fa5;color: white; font-weight: bold;" target="_black" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/datatable - copia/oxigeno/upload/'. $ver['2']; ?>" ><span class="fa-solid fa-pen-to-square"></span>Mostrar PDF</a></li>
					

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

