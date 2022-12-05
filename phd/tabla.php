
<?php 
session_start();
require_once "scripts.php";
require_once "clases/conexion.php";

$obj= new conectar();
$conexion=$obj->conexion();
$sql="SELECT phd.idPHD, phd.Fecha, pacientes.Nombres, phd.Pacientes_Cedula, cama.N_Cama, phd.Evolucion, phd.Estado, phd.adjuntos FROM phd
JOIN pacientes ON phd.Pacientes_Cedula=pacientes.Cedula JOIN cama ON phd.Cama_idCama = cama.idCama ";
$result=mysqli_query($conexion,$sql);
?>



<div>
<div class="row">
  <div class="col-xs-12">
    <label for="dateRangePicker">Fecha de solicitud:</label>
    <input id="dateRangePicker" name="dateRangePicker" type="text" />
	</div>
</div>
<br>
<div class="row">
  <div class="col-xs-12">
  <label for="userTypeFilter">Estado:</label>
	<select id="userTypeFilter">
	<option value="" selected>Selecciona una opcion</option>
	<option value="Aceptado">Aceptado</option>
							<option value="Negado">Negado</option>
							<option value="Realizado">Realizado</option>
							<option value="Aplazado">Aplazado</option>
							<option value="En proceso">En proceso</option>
							<option value="Cancelado">Cancelado</option>
    </select>
	</div>
</div>
<br>
<hr>
<div>
<div class="table-responsive">
<table class="table table-hover table-condensed nowrap" style="width:100%" id="iddatatable">
		<thead style="background-color: #009fa5;color: white; font-weight: bold;">
			<tr>
			<th>F. Solicitud</th>
			<th>Nombre</th>
			<th>Documento</th>
			<th>Cama</th>
			<th>Evolucion</th>
			<th>Estado</th>
			<th>Opciones</th>
			</tr>
		</thead>
		<tfoot style="background-color: #009fa5;color: white; font-weight: bold;">
		<tr>
		<th>F. Solicitud</th>
			<th>Nombre</th>
			<th>Documento</th>
			<th>Cama</th>
			<th>Evolucion</th>
			<th>Estado</th>
			<th>Opciones</th>
</tr>
</tfoot>		
		<tbody >
		<tr>
		<?php 
			 while($ver=mysqli_fetch_row($result)){?>
			 	<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[2]?></td>
				<td><?php echo $ver[3]?></td>
				<td><?php echo $ver[4] ?></td>
				<td><div style="height:100px; overflow-y:auto;">
					<?php echo $ver[5] ?> </div></td>
				<td><?php 
				if($ver[6] == 1 ){
					echo "Aceptado";
				}
				elseif($ver[6]== 2 ){
					echo "Negado";
				}
				elseif($ver[6]==3 ){
					echo "Realizado";
				}
				elseif($ver[6]==4 ){
					echo "Aplazado";
				}
				elseif($ver[6]== 5){
					echo "En proceso";
				}
				else{
					echo "Cancelado";
				}

				
				?></td>
				<td style="text-align: center;">
					<div class="dropdown">
					<button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
						<span class="fa-regular fa-bars"> </span> Opciones
			</button>
					<ul class="dropdown-menu">
					<li style="text-align: center;">
					<a class="btn btn-primary btn-sm" target="_black" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/datatable - copia/phd/upload/'. $ver['7']; ?>" ><span class="fa-solid fa-pen-to-square"></span>Mostrar PDF</a>					
					</a></li>
					<li><hr class="dropdown-divider"></li>
						<li style="text-align: center;"> 
											<?php if($ver[6] == 3 OR $ver[6] == 1){ ?>
												<span class="btn btn-success btn-sm">
												<span class="fa-solid fa-pen-to-square"></span> Solicitud Realizada
							</span></a></li>
							<?php } elseif($ver[6] == 6 OR $ver[6] == 2){ ?>
												<span class="btn btn-secondary btn-sm">
												<span class="fa-solid fa-pen-to-square"></span> Solicitud Cancelada
							</span></a></li>
							<?php }	 else { ?>						
								<li><hr class="dropdown-divider"></li>
					<li style="text-align: center;"><a class="dropdown-item"><span class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditar" onclick="agregaFrmActualizar('<?php echo $ver[0] ?>')">
							<span class="fa-solid fa-pen-to-square"></span> Modificar Solicitud
							</span></a></li>
							<li><hr class="dropdown-divider"></li>
					<li style="text-align: center;"><a class="dropdown-item"><span class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalAdjuntar" onclick="adjuntoFrm('<?php echo $ver[0] ?>')">
							<span class="fa-solid fa-pen-to-square"></span> Cambiar Adjunto
							</span></a></li>
							<?php } ?>	
						</a></li>
						<li><hr class="dropdown-divider"></li>
						<li style="text-align: center;"><a class="dropdown-item"><span class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="#modalVer" onclick="verFrm('<?php echo $ver[0] ?>')">
							<span class="fa-solid fa-pen-to-square"></span> Ver Solicitud
							</span></a></li>
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
</div>

<script>
var startDateFilter = "";
var endDateFilter = "";
var table;
const DATE_FORMAT = "DD-MM-YYYY";

$(document).ready(function() {

  initializeDataTable();
  initializeDateRangePicker();

  document.getElementById("userTypeFilter").addEventListener("change", filterTable);
  

  $.fn.dataTable.ext.search.push(
    function(settings, data, dataIndex) {
      
		
      let userTypeColumnData = data[5] || 0;
	  
      let userRegisterDateColumnData = data[0] || 0;

	  if (!filterByUserType(userTypeColumnData)) {
        return false;
      }	
	 
      if (!filterByDateRange(userRegisterDateColumnData)) {
        return false;
      }

      return true;
    }
  );

});

function filterByUserType(userTypeColumnData) {
  let userTypeSelected = $('#userTypeFilter').val();

  if (userTypeSelected === "") {
    return true;
  }
  
  return userTypeColumnData === userTypeSelected;
}


function filterByDateRange(userRegisterDateColumnData) {

  if (startDateFilter === "" || endDateFilter === "") {
    return true;
  } else {
    let momentUserRegisterDate = moment(new Date(userRegisterDateColumnData), DATE_FORMAT);
    let momentStartDateFilter = moment(new Date(startDateFilter), DATE_FORMAT);
    let momentEndDateFilter = moment(new Date(endDateFilter), DATE_FORMAT);

    return momentUserRegisterDate.isSameOrAfter(momentStartDateFilter) && momentUserRegisterDate.isSameOrBefore(momentEndDateFilter);
  }
}

function initializeDataTable() {
  table = $('#iddatatable').DataTable({
	order: [[0, 'desc']],
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
		buttons: [ 'excel', 'pdf' ]	            
    
  });
}

function initializeDateRangePicker() {
  $('input[name="dateRangePicker"]').daterangepicker({
    opens: 'left',
    autoUpdateInput: false,
	locale: {
          cancelLabel: 'Limpiar',
          applyLabel: 'Aplicar'
      }
  }, function(start, end, label) {
    setDateFilter(start, end);
  });


  $('#dateRangePicker').on('cancel.daterangepicker', function(ev, picker) {
    clearDateFilter();
  });
}

function setDateFilter(start, end) {
  startDateFilter = start;
  endDateFilter = end;

  $('#dateRangePicker').val(start.format(DATE_FORMAT) + " - " + end.format(DATE_FORMAT));
  filterTable();
}

function clearDateFilter() {
  startDateFilter = "";
  endDateFilter = "";

  $('#dateRangePicker').val("");
  filterTable();
}

function filterTable() {
  table.draw();
}

</script>