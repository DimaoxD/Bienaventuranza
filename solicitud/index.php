<!DOCTYPE html>
<html>

<head>
	<title>Bienaventuranza IPS	</title>
	<?php require_once "scripts.php";  ?>
	<link rel="shortcut icon" href="#">
	<style>
        body{font-family: Arial, Helvetica, sans-serif;}
        
        .autocompletar{
            position: relative;
            
        }
        strong{
            color: black;
        }
       
        .lista-autocompletar-items{
            
            position: absolute;
            border: 1px solid #d4d4d4;
            border-bottom: none;
            border-top: none;
            z-index: 99;
            /*position the autocomplete items to be the same width as the container:*/
            top: 100%;
            left: 20px;
            right: 0;
            width: 93%;
        }
        .lista-autocompletar-items div {
            padding: 10px;
            cursor: pointer;
            background-color: #fff; 
            border-bottom: 1px solid #d4d4d4; 
        }
        .lista-autocompletar-items div:hover {
            /*when hovering an item:*/
            background-color: #e9e9e9; 
        }
        .autocompletar-active {
                /*when navigating through the items using the arrow keys:*/
            background-color: DodgerBlue !important; 
            color: #a1caff; 
        }
        .autocompletar-active strong{
                /*when navigating through the items using the arrow keys:*/
            color: #ffffff; 
        }
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand" href="http://localhost/datatable%20-%20copia/camas/">
	<img src="img/logo.png" alt="logo" width="150px">
	</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/datatable%20-%20copia/camas/">
			Camas
		  </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">
            Solicitudes
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="http://localhost/datatable%20-%20copia/referencias">Referencias</a></li>
            <li><a class="dropdown-item" href="http://localhost/datatable%20-%20copia/solicitud">Solicitudes - Interconsultas</a></li>    
          </ul>
		  <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/datatable%20-%20copia/dashboard/">
			Dashboard
		  </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
	<p>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="card text-left">
					<div class="card-header">
						Bitacora de Referencia </div>
					<div class="card-body">
						<span class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#agregarnuevosdatosmodal">
						Nueva Solicitud <span class="fa fa-plus-circle"></span>
						</span>
						<hr>
						<div id="tablaDatatable"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal" id="agregarnuevosdatosmodal" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-scrollable">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Creacion de soliciud de referencia</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
					</button>
				</div>
				<div class="modal-body">
					<form enctype="multipart/form-data" action="" method="POST" id="frmnuevo">
						<div>
						<label>Cedula</label>
						<input type="text" class="form-control input-sm" id="Cedula" name="Cedula" required>
						</div>
						<label>Nombre</label>
						<input type="text" class="form-control input-sm" id="Nombres" name="Nombres" readonly>
						<label>Cama</label>
						<input type="text" class="form-control input-sm" id="Cama" name="Cama" readonly>
						<label>Fecha de Solicitud</label>
						<input type="date" class="form-control input-sm" id="FSolicitud" name="FSolicitud">
						<label>Especialidad</label>
						<select type="text" class="form-control input-sm" id="Especialidad" name="Especialidad" required>
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
						<label>Prioridad</label>
						<select type="text" class="form-control input-sm" type="text" id="Prioridad" name="Prioridad" required>
							<option value="">Selecciona una opcion</option>
							<option value="Alta">Alta</option>
							<option value="Urgente">Urgente</option>
							<option value="Programable">Programable</option>
						</select>
						<label>Requerimiento</label>
						<select type="text" class="form-control input-sm" type="text" id="Requerimiento" name="Requerimiento" required>
						<option value="">Selecciona una opcion</option>
						<option value="Interconsulta">Interconsulta</option>
						<option value="Ecoestres">Ecoestres</option>
						<option value="Ecocardiograma">Ecocardiograma</option>
						<option value="Holter">Holter</option>
						<option value="Telemetria">Telemetria</option>
						<option value="Electroencefalograma">Electroencefalograma</option>
						<option value="Puncion Lumbar">Puncion Lumbar</option>
						<option value="Electromiografia">Electromiografia</option>
						<option value="Endoscopia">Endoscopia</option>
						<option value="Colonoscopia">Colonoscopia</option>
						<option value="Endoscopia Colonoscopia">Endoscopia Colonoscopia</option>
						<option value="Perfusion">Perfusion</option>
						<option value="Polisomnografia">Polisomnografia</option>
						</select>
						<label>Estado</label>
						<select type="text" class="form-control input-sm" id="Estado" name="Estado" required>
							<option value="" selected>Selecciona una opcion</option>
							<option value="1">Activa</option>
							<option value="2">Realizada</option>
							<option value="3">En tramite por especialista</option>
							<option value="4">Cancelada</option>
						</select>
						<label>Fecha de Cancelacion</label>
						<input type="date" class="form-control input-sm" id="FCancelacion" name="FCancelacion">
						<label for="file">Datos adjuntos</label>
						<input type="file" class="form-control input-sm" id="file" name="file" accept=".pdf" required/><br><br>
						<button type="submit" name="submit" id="btnAgregarnuevo" class="btn btn-primary submitBtn">Agregar</button>
						</form>
						</div>
						<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
				</div>
			</div>
		</div>
	</div>


	<!-- Modal -->
	<div class="modal" id="modalEditar" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-scrollable">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Editar Solicitud</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
					</button>
				</div>
				<div class="modal-body">
					<form id="frmnuevoU">
						<input type="hidden"  id="idSolicitud" name="idSolicitud">
						<div>
						<label>Cedula</label>
						<input type="text" class="form-control input-sm" id="CedulaU" name="CedulaU" required>
						</div>
						<label>Nombre</label>
						<input type="text" class="form-control input-sm" id="NombresU" name="NombresU" disabled>
						<label>Cama</label>
						<input type="text" class="form-control input-sm" id="CamaU" name="CamaU" disabled>
						<label>Fecha de Solicitud</label>
						<input type="date" class="form-control input-sm" id="FSolicitudU" name="FSolicitudU">
						<label>Especialidad</label>
						<select type="text" class="form-control input-sm" id="EspecialidadU" name="EspecialidadU" required>
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
						<label>Prioridad</label>
						<select type="text" class="form-control input-sm" type="text" id="PrioridadU" name="PrioridadU" required>
							<option value="">Selecciona una opcion</option>
							<option value="Alta">Alta</option>
							<option value="Urgente">Urgente</option>
							<option value="Programable">Programable</option>
						</select>
						<label>Requerimiento</label>
						<select type="text" class="form-control input-sm" type="text" id="RequerimientoU" name="RequerimientoU" required>
						<option value="">Selecciona una opcion</option>
						<option value="Interconsulta">Interconsulta</option>
						<option value="Ecoestres">Ecoestres</option>
						<option value="Ecocardiograma">Ecocardiograma</option>
						<option value="Holter">Holter</option>
						<option value="Telemetria">Telemetria</option>
						<option value="Electroencefalograma">Electroencefalograma</option>
						<option value="Puncion Lumbar">Puncion Lumbar</option>
						<option value="Electromiografia">Electromiografia</option>
						<option value="Endoscopia">Endoscopia</option>
						<option value="Colonoscopia">Colonoscopia</option>
						<option value="Endoscopia Colonoscopia">Endoscopia Colonoscopia</option>
						<option value="Perfusion">Perfusion</option>
						<option value="Polisomnografia">Polisomnografia</option>
						</select>
						<label>Estado</label>
						<select type="text" class="form-control input-sm" id="EstadoU" name="EstadoU" required>
							<option value="" selected>Selecciona una opcion</option>
							<option value="1">Activa</option>
							<option value="2">Realizada</option>
							<option value="3">En tramite por especialista</option>
							<option value="4">Cancelada</option>
						</select>
						<label>Fecha de Cancelacion</label>
						<input type="date" class="form-control input-sm" id="FCancelacionU" name="FCancelacionU">
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
					<button type="button" class="btn btn-warning" id="btnActualizar">Actualizar</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal" id="modalCargar" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-scrollable">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Editar Solicitud</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
					</button>
				</div>
				<div class="modal-body">
				<form enctype="multipart/form-data" action="" method="POST" id="cargardatos">
						<input type="hidden"  id="idSolicitudU" name="idSolicitudU">
						<input type="hidden" id="CedulaA" name="CedulaA">
						<label for="fileU">Datos adjuntos</label>
						<input type="file" class="form-control input-sm" id="fileU" name="fileU" accept=".pdf" required/><br><br>
						<button type="submit" name="submit" id="btnAgregarnuevo" class="btn btn-primary submitBtn">Agregar</button>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
					
				</div>
			</div>
		</div>
	</div>
	<div class="modal" id="modalFecha" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-scrollable">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Fecha de Cancelacion</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
					</button>
				</div>
				<div class="modal-body">
				<form enctype="multipart/form-data" action="" method="POST" id="cargarfecha">
						<input type="hidden"  id="idSolicitudU" name="idSolicitudU">
						<input type="hidden" id="CedulaA" name="CedulaA">
						<label>Fecha de Cancelacion</label>
						<input type="date" class="form-control input-sm" id="FCancelacion1" name="FCancelacion1" disabled>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
					
				</div>
			</div>
		</div>
	</div>

	
</body>

</html>



<script type="text/javascript">
	//EDITAR DATOS
	$(document).ready(function() {
		$('#btnActualizar').click(function() {
			datos = $('#frmnuevoU').serialize();

			$.ajax({
				type: "POST",
				data: datos,
				url: "procesos/actualizar.php",
				success: function(r) {
					if (r == 1) {
						$('#tablaDatatable').load('tabla.php');
						alertify.success("Actualizado con exito :D");
						console.log(datos);


					} else {
						alertify.error("Fallo al actualizar :(");
					}
				}
			});
		});
	});
</script>
<script type="text/javascript"> //CARGAR TABLA
	$(document).ready(function() {
		$('#tablaDatatable').load('tabla.php');
	});
</script>

<script type="text/javascript">
	//OBTENER DATOS Y ELIMINARLOS
	function agregaFrmActualizar(idSolicitud) {
		$.ajax({
			type: "POST",
			data: "idSolicitud=" + idSolicitud,
			url: "procesos/obtenDatos.php",
			success: function(r) {
				datos = jQuery.parseJSON(r);
				$('#idSolicitud').val(datos['idSolicitud']);
				$('#CedulaU').val(datos['Pacientes_Cedula']);
				$('#NombresU').val(datos['Nombres']);
				$('#CamaU').val(datos['N_Cama']);
				$('#FSolicitudU').val(datos['Fecha_Solicitud']);
				$('#EspecialidadU').val(datos['Especialidad']);
				$('#PrioridadU').val(datos['Prioridad']);
				$('#RequerimientoU').val(datos['Req']);
				$('#EstadoU').val(datos['Estado']);
				$('#FCancelacionU').val(datos['FCancelacion']);
				}
		});
	}
	function cargarFrmDatos(idSolicitudU) {
		$.ajax({
			type: "POST",
			data: "idSolicitudU=" + idSolicitudU,
			url: "procesos/obtenRuta.php",
			success: function(r) {
				datos = jQuery.parseJSON(r);
				$('#idSolicitudU').val(datos['idSolicitud']);
				$('#CedulaA').val(datos['Pacientes_Cedula']);
				
				}
		});
	}
	function cargarFrmFecha(idSolicitudU) {
		$.ajax({
			type: "POST",
			data: "idSolicitudU=" + idSolicitudU,
			url: "procesos/obtenFecha.php",
			success: function(r) {
				datos = jQuery.parseJSON(r);
				$('#idSolicitudU').val(datos['idSolicitud']);
				$('#FCancelacion1').val(datos['FCancelacion']);
				
				}
		});
	}
</script>
<script>
	function eliminarDatos(idSolicitud){
		alertify.confirm('¿Realmente desea cancelar la solicituds?', function(
		
){ 

			$.ajax({
				type:"POST",
				data:"idSolicitud=" + idSolicitud,
				url:"procesos/estado.php",
				success:function(r){
					if(r==1){
						$('#tablaDatatable').load('tabla.php');
						alertify.success("Se ha cancelado la solicitud!");
					}else{
						alertify.error("No se pudo cancelar...");
					}
				}
			});

		}
		, function(){

		});
	}
</script>
<script>
	
$(document).ready(function(e) {
		$("#cargardatos").on('submit', function(e){
        e.preventDefault(); 
			$.ajax({
				type: 'POST',
				url: 'procesos/cargar.php',
				data: new FormData(this),
				contentType: false,
				cache: false,
				processData: false,
				beforeSend: function() {
					$('.submitBtn').attr("disabled","disabled");
					$('#cargardatos').css("opacity", ".5");
				},
				success: function(data) {
					if(data.status){
                        $('#cargardatos')[0].reset();
                        $('#tablaDatatable').load('tabla.php');
                        alertify.success("Se agrego con exito :D");
                        return; // Detenemos el código
                	
				
			}else{        //En caso de que exista un error lo mostramose
				alertify.error(data.message);
				$('#cargardatos')[0].reset();
                        $('#tablaDatatable').load('tabla.php');
				}
						   $('#cargardatos').css("opacity","");
              			   $(".submitBtn").removeAttr("disabled");
				
			}
			});
		});

		//file type validation
		$("#fileU").change(function() {
			var file = this.files[0];
			var imagefile = file.type;
			var match = ["application/pdf"];
			if (!((imagefile == match[0]))) {
				alert('Please select a valid image file (pdf).');
				$("#fileU").val('');
				return false;
			}
		});
	});

</script>
<script>
	//LLAMAR NOMBRE
	document.getElementById("Cedula").onchange = function() {
		alerta()
	};

	function alerta() {
		// Creando el objeto para hacer el request
		var request = new XMLHttpRequest();
		request.responseType = 'json';

		// Objeto PHP que consultaremos
		request.open("POST", "componentes/search_data.php");

		// Definiendo el listener
		request.onreadystatechange = function() {
			// Revision si fue completada la peticion y si fue exitosa
			if (this.readyState === 4 && this.status === 200) {
				// Ingresando la respuesta obtenida del PHP
				document.getElementById("Nombres").value = this.response.Nombres;
				document.getElementById("Cama").value = this.response.Cama;
			}
		};
		// Recogiendo la data del HTML
		var myForm = document.getElementById("frmnuevo");
		var formData = new FormData(myForm);

		// Enviando la data al PHP
		request.send(formData);
	}
</script>


<script>
	$(document).ready(function(e) {
		$("#frmnuevo").on('submit', function(e){
        e.preventDefault(); 
			$.ajax({
				type: 'POST',
				url: 'procesos/agregar.php',
				data: new FormData(this),
				contentType: false,
				cache: false,
				processData: false,
				beforeSend: function() {
					$('.submitBtn').attr("disabled","disabled");
					$('#frmnuevo').css("opacity", ".5");
				},
				success: function(data) {
					if(data.status){
                        $('#frmnuevo')[0].reset();
                        $('#tablaDatatable').load('tabla.php');
                        alertify.success("Se agrego con exito :D");
                        return; // Detenemos el código
                	
				
			}else{        //En caso de que exista un error lo mostramose
				alertify.error(data.message);
				$('#frmnuevo')[0].reset();
                        $('#tablaDatatable').load('tabla.php');
				}
						   $('#frmnuevo').css("opacity","");
              			   $(".submitBtn").removeAttr("disabled");
				
			}
			});
		});

		//file type validation
		$("#file").change(function() {
			var file = this.files[0];
			var imagefile = file.type;
			var match = ["application/pdf"];
			if (!((imagefile == match[0]))) {
				alert('Please select a valid image file (pdf).');
				$("#file").val('');
				return false;
			}
		});
	});
</script>


