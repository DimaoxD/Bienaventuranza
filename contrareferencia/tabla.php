
<?php 
session_start();
require_once "scripts.php";
require_once "clases/conexion.php";

$obj= new conectar();
$conexion=$obj->conexion();
$sql="SELECT idContrareferencia,Fecha_Presentacion,Fecha_Respuesta,pacientes.Nombres,Pacientes_Cedula,diagnosticos.Nombre_Diagnosticos,Lugar_Aceptacion,Servicio_Solicitado,Estado_Solicitud,Prioridad,Motivo,Adjuntos,recepcion.Nombre FROM contrareferencia JOIN pacientes ON pacientes.Cedula = contrareferencia.Pacientes_Cedula JOIN diagnosticos ON diagnosticos.idDiagnosticos = contrareferencia.Diagnosticos JOIN recepcion ON recepcion.Cedula = contrareferencia.Recepcion_Cedula";
$result=mysqli_query($conexion,$sql);
?>




<br>
<hr>
<div>
<table>
	<table class="table table-condensed table-bordered table-striped"  id="iddatatable">
		<thead style="background-color: #009fa5;color: white; font-weight: bold;">
			<tr>
			<th>F. Presentacion</th>
			<th>F. Respuesta</th>
			<th>Nombre</th>
			<th>Documento</th>
			<th>Diagnostico</th>
			<th>Lugar de aceptacion</th>
			<th>Servicio solicitado</th>
			<th>Estado de solicitud</th>
			<th>Prioridad</th>
			<th>Opciones</th>
			</tr>
		</thead>
		
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
				<td><?php echo $ver[6];	?></td>
				<td><?php 
				
				if ($ver[7]==1){ echo "Neurocirugia";}
							elseif ($ver[7]==2){ echo "Unidad Renal";}
							elseif ($ver[7]==3){ echo "Unidad Coronaria";}
							elseif ($ver[7]==4){ echo "Unidad de cuidados intensivos";}
							elseif ($ver[7]==5){ echo "Unidad de cuidados intermedios";}
							elseif ($ver[7]==6){ echo "Cirugia general";}
							elseif ($ver[7]==7){ echo "Ortopedia";}
							elseif ($ver[7]==8){ echo "Hematoloia";}
							elseif ($ver[7]==9){ echo "Oncologia";}
							elseif ($ver[7]==10){ echo "Infectologia mayor complejidad";}
							elseif ($ver[7]==11){ echo "Dermatologia";}
							elseif ($ver[7]==12){ echo "Nefrologia";}
							elseif ($ver[7]==13){ echo "Urologia";}
							elseif ($ver[7]==14){ echo "Neumologia";}
							else{ echo $ver[7];}
				
				?></td>
				<td><?php 
				
				if($ver[8]==1){ echo "Activo";}	
				elseif($ver[8]==2){ echo "Remitido";}
				elseif($ver[8]==3){ echo "En proceso";}
				elseif($ver[8]==4){ echo "Cancelado";}
				elseif($ver[8]==5){ echo "Cancelado por medico";}
				elseif($ver[8]==6){ echo "Familiar no acepta remision";}	
				
				?></td>

				<td><?php 

				if($ver[9]==1){ echo "Normal";}
				elseif($ver[9]==2){ echo "Urgencia vital";}
				elseif($ver[9]==3){ echo "Traslado primario";}
				elseif($ver[9]==4){ echo "Prioritaria";}

				?></td>
				<td><div class="dropdown">
					<button class="btn btn-sm dropdown-toggle" style="background-color: #009fa5; color: white;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
						<span class="fa-regular fa-bars"> </span> Opciones
			</button> 
			<!-- Activo -->
					<ul class="dropdown-menu">
					<li style="text-align: center;"><a class="dropdown-item" ><?php if ($ver[8]==1 OR $ver[8]==3){ ?>
					<label>Esta solicitud esta activa</label>
					<hr class="dropdown-divider">
					<li style="text-align: center;"><a class="dropdown-item" ><span class="btn btn-sm" style="background-color: #009fa5; color: white;" data-bs-toggle="modal" data-bs-target="#modalEditar" onclick="agregaFrmActualizar('<?php echo $ver[0] ?>')">
					<span class="fa-solid fa-pen-to-square"></span> Modificar solicitud
					</span>
									
					<li style="text-align: center;"><a class="dropdown-item" ><span class="btn btn-sm" style="background-color: #009fa5; color: white;" data-bs-toggle="modal" data-bs-target="#modalMotivo"  onclick="motivoFrm('<?php echo $ver[0] ?>')">
					<span class="fa-solid fa-pen-to-square"></span> Cancelar solicitud
					</span>
					<hr class="dropdown-divider">
					<li style="text-align: center;">¿Se realizo solicitud?
					<a class="dropdown-item" ><span class="btn btn-sm" style="background-color: #009fa5; color: white;" onclick="aprobarSolicitud('<?php echo $ver[0] ?>')">
					<span class="fa-solid fa-pen-to-square"></span> Informar realizacion
					</span>
					<hr class="dropdown-divider">
					<li style="text-align: center;"><a class="dropdown-item" ><span class="btn btn-sm" style="background-color: #009fa5; color: white;" data-bs-toggle="modal" data-bs-target="#modalAdjuntar" onclick="adjuntoFrm('<?php echo $ver[0] ?>')">
					<span class="fa-solid fa-pen-to-square"></span> Cambiar PDF
					</span>
					
														<?php	}elseif($ver[8]==2){ ?>
					<label>Esta solicitud esta cerrada</label>
					<hr class="dropdown-divider">
					<li style="text-align: center;"><a class="dropdown-item" ><span class="btn btn-success btn-sm">
															Solicitud realizada</span>
					<hr class="dropdown-divider">
					<li style="text-align: center;"><a class="dropdown-item" ><span class="btn btn-sm" style="background-color: #009fa5; color: white;" data-bs-toggle="modal" data-bs-target="#modalVer" onclick="verFrm('<?php echo $ver[0] ?>')">
					<span class="fa-solid fa-pen-to-square"></span> Ver solicitud
					</span>
					<?php } elseif($ver[8]==4 OR $ver[8]==5 OR $ver[8]==6){ ?>
					<label>Esta solicitud esta cerrada</label>
					<hr class="dropdown-divider">
					<li style="text-align: center;"><span class="btn btn-danger btn-sm">
													Solicitud cancelada</span>
					<hr class="dropdown-divider">
					<li style="text-align: center;"><a class="dropdown-item" ><span class="btn btn-sm" style="background-color: #009fa5; color: white;" data-bs-toggle="modal" data-bs-target="#modalVer2" onclick="verFrm2('<?php echo $ver[0] ?>')">
					<span class="fa-solid fa-pen-to-square"></span> Ver solicitud
					<?php }?>					
					</a></li>
					<li style="text-align: center;"> <hr class="dropdown-divider">
					<a class="btn btn-sm" style="background-color: #009fa5; color: white;" target="_black" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/datatable - copia/contrareferencia/upload/'. $ver['11']; ?>" ><span class="fa-solid fa-pen-to-square"></span>Mostrar PDF</a></li>
					

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
  document.getElementById("Prioridad").addEventListener("change", filterTable);
  

  $.fn.dataTable.ext.search.push(
    function(settings, data, dataIndex) {
      
		
      let userTypeColumnData = data[7] || 0;

	  let userTypeColumnData2 = data[8] || 0;
	  
      let userRegisterDateColumnData = data[0] || 0;

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
  let userTypeSelected1 = $('#userTypeFilter').val();

  if (userTypeSelected1 === "") {
    return true;
  }
  
  return userTypeColumnData === userTypeSelected1;
}

function filterByUserType2(userTypeColumnData2) {
  let userTypeSelected2 = $('#Prioridad').val();

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
	"columnDefs": [
                    {
                        "targets": [ 8 ],
                        "visible": false,
                        "searchable": true
                    }
                ],
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
        buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]	        
    
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