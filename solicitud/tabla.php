
<?php 
session_start();
require_once "scripts.php";
require_once "clases/conexion.php";

$obj= new conectar();
$conexion=$obj->conexion();
$sql="SELECT pacientes.Nombres,pacientes.Cedula,cama.N_Cama,solicitud.Fecha_Solicitud,solicitud.Especialidad,solicitud.Prioridad,solicitud.Req,solicitud.Estado,solicitud.FCancelacion,solicitud.idSolicitud,solicitud.adj
FROM solicitud JOIN pacientes on pacientes.Cedula = Pacientes_Cedula JOIN cama on solicitud.Cama_IdCama = idCama";
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
	<option value="Activa">Activa</option>
	<option value="Realizada">Realizada</option>
	<option value="En tramite">En tramite por especialista</option>
	<option value="Cancelada">Cancelada</option>
    </select>
	</div>
</div>
<br>
<div class="row">
  <div class="col-xs-12">
  <label for="FiltroEspecialidad">Especialidad:</label>
	<select id="FiltroEspecialidad">
	<option value="">Selecciona una opcion</option>
							<option value="Cardiologia">Cardiologia</option>
							<option value="Neumologia">Neumologia</option>
							<option value="Infectologia">Infectologia</option>
							<option value="Neurologia">Neurologia</option>
							<option value="Gastroenterologia">Gastroenterologia</option>
							<option value="Psiquiatria">Psiquiatria</option>
							<option value="Nutricion">Nutricion</option>
							<option value="Psicologia">Psicologia</option>
							<option value="Fisiatria">Fisiatria</option>
							<option value="Endocrinologia">Endocrinologia</option>
							<option value="Fonoaudilogia">Fonoaudilogia</option>
							<option value="Ortopedia">Ortopedia</option>
    </select>
	</div>
</div>
<hr>
<div>
<table>
	<table class="table table-hover table-condensed table-bordered table-responsive"  id="iddatatable">
		<thead style="background-color: #dc3545;color: white; font-weight: bold;">
			<tr>
			<th>Nombre</th>
			<th>Documento</th>
			<th>Cama</th>
			<th>F. Solicitud</th>
			<th>Especialidad</th>
			<th>Prioridad</th>
			<th>Solicitud</th>
			<th>Estado</th>
			<th>Opciones</th>
			</tr>
		</thead>
		
		<tbody >
		<tr>
		<?php 
			 while($ver=mysqli_fetch_row($result)){?>
			 	<td><p style="width: 118px; word-wrap: break-word; overflow: hidden; text-overflow: clip;"><?php echo $ver[0] ?></p></td>
				<td><p style="width: 90px; word-wrap: break-word; overflow: hidden; text-overflow: ellipsis;"><?php echo $ver[1]?></p></td>
				<td><p style="width: 80px; word-wrap: break-word; overflow: hidden; text-overflow: ellipsis;"><?php echo $ver[2]?></p></td>
				<td><p style="width: 90px; word-wrap: break-word; overflow: hidden; text-overflow: ellipsis;"><?php echo $ver[3] ?></p></td>
				<td><p style="width: 90px; word-wrap: break-word; overflow: hidden; text-overflow: ellipsis;"><?php echo $ver[4] ?></p></td>
				<td><?php echo $ver[5] ?></td>
				<td><?php echo $ver[6] ?></td>
				<td><?php if($ver[7]==1){ echo "Activa";}
				elseif($ver[7]==2){
					echo "Realizada";
				}elseif($ver[7]==3){
					echo "En tramite";
				}else{
					echo "Cancelada";			
				} ?></td>
				<td style="text-align: center;">
					<div class="dropdown">
					<button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
						<span class="fa-regular fa-bars"> </span> Opciones
			</button>
					<ul class="dropdown-menu">
					<li style="text-align: center;"><a class="dropdown-item" ><?php if ($ver[10]==NULL){ ?>
											<span class="btn btn-danger btn-sm">
											<span class="fa-solid fa-lock"></span>PDF No Cargado
					<li><hr class="dropdown-divider"></li>	
					<a class="dropdown-item" ><span class="btn btn-danger btn-sm"  data-bs-toggle="modal" data-bs-target="#modalCargar" onclick="cargarFrmDatos('<?php echo $ver[9] ?>')">
					<span class="fa-solid fa-pen-to-square"></span> ¿Cargar Archivos?
					</span>
														<?php	}else{ ?>
					<a class="btn btn-primary btn-sm" target="_black" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/datatable - copia/solicitud/procesos/'. $ver['10']; ?>" ><span class="fa-solid fa-pen-to-square"></span>Mostrar PDF</a>
					<?php } ?>					
					</a></li>
					<li><hr class="dropdown-divider"></li>
					<li style="text-align: center;"><a class="dropdown-item"><span class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditar" onclick="agregaFrmActualizar('<?php echo $ver[9] ?>')">
							<span class="fa-solid fa-pen-to-square"></span> Modificar Caso
							</span></a></li>
					<li><hr class="dropdown-divider"></li>
						<li style="text-align: center;"> 
											<?php if($ver[7] == 2 ){ ?>
												<span class="btn btn-success btn-sm">
												<span class="fa-solid fa-pen-to-square"></span> Solicitud Completada
							</span></a></li>
							<?php } elseif($ver[7] == 4 ){ ?>
												<span class="btn btn-secondary btn-sm">
												<span class="fa-solid fa-pen-to-square"></span> Solicitud Cancelada
							</span></a></li>
							<li><hr class="dropdown-divider"></li>	
					<a class="dropdown-item" ><span class="btn btn-danger btn-sm"  data-bs-toggle="modal" data-bs-target="#modalFecha" onclick="cargarFrmFecha('<?php echo $ver[9] ?>')">
					<span class="fa-solid fa-pen-to-square"></span> ¿Ver fecha de cancelacion?
					</span>
							<?php }	 else { ?>						
						<a class="dropdown-item" ><span class="btn btn-danger btn-sm" onclick="eliminarDatos('<?php echo $ver[9] ?>')">
							<span class="fa-solid fa-pen-to-square"></span> Cancelar solicitud
							</span>
							<?php } ?>	
						</a></li>
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
  document.getElementById("FiltroEspecialidad").addEventListener("change", filterTable);

  $.fn.dataTable.ext.search.push(
    function(settings, data, dataIndex) {
      
		
      let userTypeColumnData = data[7] || 0;
	  let userTypeColumnData2 = data[4] || 0;
      let userRegisterDateColumnData = data[3] || 0;

	  if (!filterByUserType(userTypeColumnData)) {
        return false;
      }	
	  if (!filterByUserType2(userTypeColumnData2)) {
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
function filterByUserType2(userTypeColumnData2) {
  let userTypeSelected2 = $('#FiltroEspecialidad').val();

  if (userTypeSelected2 === "") {
    return true;
  }
  
  return userTypeColumnData2 === userTypeSelected2;
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
	order: [[3, 'desc']],
	scrollX: true,
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