
<?php 
session_start();
require_once "scripts.php";
require_once "clases/conexion.php";
$obj= new conectar();
$conexion=$obj->conexion();

$sql="SELECT radiologia.idRadiologia, radiologia.Fecha, radiologia.Observaciones, radiologia.Estado,radiologia.Contraste, radiologia.Ambulancia,radiologia.Pacientes_Cedula,pacientes.Nombres,cama.N_Cama,radiologia.Orden, radiologia.Motivo_Cancelacion, radiologia.FRealizacion,radiologia.Adjuntos FROM radiologia JOIN pacientes ON radiologia.Pacientes_Cedula = pacientes.Cedula JOIN cama on radiologia.Cama_idCama = cama.idCama";
$result=mysqli_query($conexion,$sql);
?>

<div>
<div class="row">
  <div class="col-xs-12">
    <label for="dateRangePicker">Fecha de solicitud:</label><br>
    <input class="form-control form-control-sm" id="dateRangePicker" name="dateRangePicker" type="text" />
	</div>
</div>
<br>
<div class="row">
  <div class="col-xs-12">
  <label for="userTypeFilter">Estado:</label><br>
	<select class="form-select form-select-sm" id="userTypeFilter">
	<option value="" selected>Selecciona una opcion</option>
						<option value="Realizado">Realizado</option>
						<option value="Aplazado">Aplazado</option>
						<option value="En proceso de especialista">En proceso de especialista</option>
						<option value="Cancelado">Cancelado</option>
						<option value="Activo">Activo</option>
    </select>
	</div>
</div>
<br>
<hr>
<div>
<div class="table-responsive">
	<table class="table table-hover table-condensed table-bordered" style="width:100%" id="iddatatable">
		<thead style="background-color: #dc3545;color: white; font-weight: bold;">
			<tr>
			    <td>Fecha de Solicitud</td>
				<td>Nombres del paciente</td>
				<td>Cedula del paciente</td>
				<td>Numero de cama</td>
				<td>Orden</td>
				<td>Observaciones</td>
				<td>Estado</td>
				<td>Opciones</td>
			</tr>
		</thead>
		<tfoot style="background-color: #ccc;color: white; font-weight: bold;">
			<tr>
			<td>Fecha de Solicitud</td>
				<td>Nombres del paciente</td>
				<td>Cedula del paciente</td>
				<td>Numero de cama</td>
				<td>Orden</td>
				<td>Observaciones</td>
				<td>Estado</td>
				<td>Opciones</td>
			</tr>
		</tfoot>
		<tbody >
		<tr>
		<?php 
			 while($ver=mysqli_fetch_row($result)){?>
				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[7] ?></td>
				<td><?php echo $ver[6] ?></td>
				<td><?php echo $ver[8] ?></td>
				<td><?php
				if($ver[9]==1){
					 echo "Ecografia";
							}
				elseif($ver[9]==2){ 
					echo "Radiografia";
				}
				elseif($ver[9]==3){ 
					echo "Radiologia intervencionista";
				}
				elseif($ver[9]==4){ 
					echo "Tomografia";
				}
				elseif($ver[9]==5){
					echo "Resonancia";
				}
				elseif($ver[9]==6){
					echo "Gamagrafia";
				}
				elseif($ver[9]==7){
					echo "Angiotac";
				}
				elseif($ver[9]==8){
				echo "Colangioresonancia";
				}
				elseif($ver[9]==9){ 
				echo "Fibrobroncoscopia";
				}
				elseif($ver[9]==10){
				echo "Doppler" ;
				}?></td>
				<td><?php echo $ver[2] ?></td>
				<td><?php 
				if($ver[3]==1){ echo "Realizado"; }
				elseif($ver[3]==2){ echo "Aplazado"; }
				elseif($ver[3]==3){ echo "En proceso de especialista"; }
				elseif($ver[3]==4){ echo "Cancelado"; }
				elseif($ver[3]==5){ echo "Activo"; }
				?></td>
				<td><div class="dropdown">
					<button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
						<span class="fa-regular fa-bars"> </span> Opciones
			</button> 
			<!-- Activo -->
					<ul class="dropdown-menu">
					<li style="text-align: center;"><a class="dropdown-item" ><?php if ($ver[3]==5 OR $ver[3]==3 OR $ver[3]==2){ ?>
					<label>Esta solicitud esta activa</label>
					<hr class="dropdown-divider">
					<li style="text-align: center;"><a class="dropdown-item" ><span class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditar" onclick="agregaFrmActualizar('<?php echo $ver[0] ?>')">
					<span class="fa-solid fa-pen-to-square"></span> Modificar solicitud
					</span>
									
					<li style="text-align: center;"><a class="dropdown-item" ><span class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalMotivo"  onclick="motivoFrm('<?php echo $ver[0] ?>')">
					<span class="fa-solid fa-pen-to-square"></span> Cancelar solicitud
					</span>
					<hr class="dropdown-divider">
					<li style="text-align: center;">¿Se realizo solicitud?
					<a class="dropdown-item" ><span class="btn btn-warning btn-sm" onclick="aprobarSolicitud('<?php echo $ver[0] ?>')">
					<span class="fa-solid fa-pen-to-square"></span> Informar realizacion
					</span>
					<hr class="dropdown-divider">
					<li style="text-align: center;"><a class="dropdown-item" ><span class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalCargar" onclick="adjuntoFrm('<?php echo $ver[0] ?>')">
					<span class="fa-solid fa-pen-to-square"></span> Cambiar PDF
					</span>
					
														<?php	}elseif($ver[3]==1){ ?>
					<label>Esta solicitud esta cerrada</label>
					<hr class="dropdown-divider">
					<li style="text-align: center;"><a class="dropdown-item" ><span class="btn btn-success btn-sm">
															Solicitud realizada</span>
					<hr class="dropdown-divider">
					<li style="text-align: center;"><a class="dropdown-item" ><span class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#modalVer" onclick="verFrm('<?php echo $ver[0] ?>')">
					<span class="fa-solid fa-pen-to-square"></span> Ver solicitud
					</span>
					<?php } elseif($ver[3]==4){ ?>
					<label>Esta solicitud esta cerrada</label>
					<hr class="dropdown-divider">
					<li style="text-align: center;"><span class="btn btn-danger btn-sm">
													Solicitud rechazada</span>
					<hr class="dropdown-divider">
					<li style="text-align: center;"><a class="dropdown-item" ><span class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#modalVer2" onclick="verFrm2('<?php echo $ver[0] ?>')">
					<span class="fa-solid fa-pen-to-square"></span> Ver solicitud
					<?php }?>					
					</a></li>
					<li style="text-align: center;"> <hr class="dropdown-divider">
					<a class="btn btn-primary btn-sm" target="_black" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/datatable - copia/imagenes/upload/'. $ver['12']; ?>" ><span class="fa-solid fa-pen-to-square"></span>Mostrar PDF</a></li>
					

				</td>
				</tr>
				<?php 
			}
			?>
		</tbody>
	</table>
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
      
		
      let userTypeColumnData = data[6] || 0;
	  
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