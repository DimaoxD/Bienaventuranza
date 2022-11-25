<!DOCTYPE html>
<html>

<head>
	<title>Bienaventuranza IPS	</title>
	<?php require_once "scripts.php";  ?>
	<link rel="shortcut icon" href="#">
	<style>
		      body{font-family: Arial, Helvetica, sans-serif;}
		input[readonly]
		{
			background-color:#ccc;
		}
		select[readonly]
		{
			background-color:#ccc;
		}
		textarea[readonly]
		{
			background-color:#ccc;
		}

        .autocompletar{
            position: relative;
            
        }
        strong{
            color: black;
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
						Planes de atencion domiciliaria </div>
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
					<h5 class="modal-title" id="exampleModalLabel">Creacion de soliciud de PHD</h5>
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
						<label>Evolucion</label>
  						<textarea class="form-control input-sm" id="Evolucion" name="Evolucion" rows="3"></textarea>
						<label>Estado</label>
						<select type="text" class="form-control input-sm" id="Estado" name="Estado" required>
							<option value="" selected>Selecciona una opcion</option>
							<option value="1">Aceptado</option>
							<option value="2">Negado</option>
							<option value="3">Realizado</option>
							<option value="4">Aplazado</option>
							<option value="5">En proceso</option>
							<option value="6">Cancelado</option>
						</select>
						<label>Funcionario de Referencia</label>
						<select type="text" class="form-control input-sm" id="Referencia" name="Referencia" required>
							<option value="" selected disabled hidden>Selecciona una opcion</option>
							<option value="1">Julieta</option>
							<option value="2">Geraldine</option>
							<option value="3">Milena</option>
							<option value="4">Jeimy</option>
							<option value="5">Astrid</option>
						</select>
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
						<input type="hidden"  id="idPHD" name="idPHD">
						<div>
						<label>Cedula</label>
						<input type="text" class="form-control input-sm" id="CedulaU" name="CedulaU" readonly>
						</div>
						<label>Nombre</label>
						<input type="text" class="form-control input-sm" id="NombresU" name="NombresU" readonly>
						<label>Cama</label>
						<input type="text" class="form-control input-sm" id="CamaU" name="CamaU" readonly>
						<label>Fecha de Solicitud</label>
						<input type="date" class="form-control input-sm" id="FSolicitudU" name="FSolicitudU" readonly>
						<label>Evolucion</label>
  						<textarea class="form-control input-sm" id="EvolucionU" name="EvolucionU" rows="3"></textarea>
						<label>Estado</label>
						<select type="text" class="form-control input-sm" id="EstadoU" name="EstadoU">
							
							<option value="1">Aceptado</option>
							<option value="2">Negado</option>
							<option value="3">Realizado</option>
							<option value="4">Aplazado</option>
							<option value="5">En proceso</option>
							<option value="6">Cancelado</option>
						</select>
						<label>Funcionario de Referencia</label>
						<select type="text" class="form-control input-sm" id="ReferenciaU" name="ReferenciaU">
							
							<option value="1">Julieta</option>
							<option value="2">Geraldine</option>
							<option value="3">Milena</option>
							<option value="4">Jeimy</option>
							<option value="5">Astrid</option>
						</select>
						<br>
						<button type="submit" name="submit" id="btnActualizar" class="btn btn-primary submitBtn">Agregar</button>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
					
				</div>
			</div>
		</div>
	</div>

	<div class="modal" id="modalVer" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-scrollable">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Editar Solicitud</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
					</button>
				</div>
				<div class="modal-body">
					<form id="frmnuevoU">
						<input type="hidden"  id="idPHDA" name="idPHDA">
						<div>
						<label>Cedula</label>
						<input type="text" class="form-control input-sm" id="CedulaA" name="CedulaA" readonly>
						</div>
						<label>Nombre</label>
						<input type="text" class="form-control input-sm" id="NombresA" name="NombresA" readonly>
						<label>Cama</label>
						<input type="text" class="form-control input-sm" id="CamaA" name="CamaA" readonly>
						<label>Fecha de Solicitud</label>
						<input type="date" class="form-control input-sm" id="FSolicitudA" name="FSolicitudA" readonly>
						<label>Evolucion</label>
  						<textarea class="form-control input-sm" id="EvolucionA" name="EvolucionA" rows="3" readonly></textarea>
						<label>Estado</label>
						<select type="text" class="form-control input-sm" id="EstadoA" name="EstadoA" readonly>
							
							<option value="1">Aceptado</option>
							<option value="2">Negado</option>
							<option value="3">Realizado</option>
							<option value="4">Aplazado</option>
							<option value="5">En proceso</option>
							<option value="6">Cancelado</option>
						</select>
						<label>Funcionario de Referencia</label>
						<select type="text" class="form-control input-sm" id="ReferenciaA" name="ReferenciaA" readonly>
							
							<option value="1">Julieta</option>
							<option value="2">Geraldine</option>
							<option value="3">Milena</option>
							<option value="4">Jeimy</option>
							<option value="5">Astrid</option>
						</select>
						
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
					
				</div>
			</div>
		</div>
	</div>
	
	<div class="modal" id="modalAdjuntar" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-scrollable">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Creacion de soliciud de PHD</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
					</button>
				</div>
				<div class="modal-body">
					<form enctype="multipart/form-data" action="" method="POST" id="frmnuevoA">
					<input type="hidden"  id="idPHDB" name="idPHDB">
					<input type="hidden"  id="CedulaB" name="CedulaB">
						<label for="file">Datos adjuntos</label>
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
</body>

</html>



<script type="text/javascript"> //CARGAR TABLA
	$(document).ready(function() {
		$('#tablaDatatable').load('tabla.php');
	});
</script>

<script type="text/javascript">
	//OBTENER DATOS Y ELIMINARLOS
	function agregaFrmActualizar(idPHD) {
		$.ajax({
			type: "POST",
			data: "idPHD=" + idPHD,
			url: "procesos/obtenDatos.php",
			success: function(r) {
				datos = jQuery.parseJSON(r);
				$('#idPHD').val(datos['idPHD']);
				$('#CedulaU').val(datos['Pacientes_Cedula']);
				$('#NombresU').val(datos['Nombres']);
				$('#CamaU').val(datos['N_Cama']);
				$('#FSolicitudU').val(datos['Fecha']);
				$('#EvolucionU').val(datos['Evolucion']);
				$('#EstadoU').val(datos['Estado']);
				$('#ReferenciaU').val(datos['Referencia']);
				}
		});
	}
	function verFrm(idPHDA) {
		$.ajax({
			type: "POST",
			data: "idPHDA=" + idPHDA,
			url: "procesos/verDatos.php",
			success: function(r) {
				datos = jQuery.parseJSON(r);
				$('#idPHDA').val(datos['idPHD']);
				$('#CedulaA').val(datos['Pacientes_Cedula']);
				$('#NombresA').val(datos['Nombres']);
				$('#CamaA').val(datos['N_Cama']);
				$('#FSolicitudA').val(datos['Fecha']);
				$('#EvolucionA').val(datos['Evolucion']);
				$('#EstadoA').val(datos['Estado']);
				$('#ReferenciaA').val(datos['Referencia']);
				}
		});
	}
	function adjuntoFrm(idPHDB) {
		$.ajax({
			type: "POST",
			data: "idPHDB=" + idPHDB,
			url: "procesos/adjuntoDatos.php",
			success: function(r) {
				datos = jQuery.parseJSON(r);
				$('#idPHDB').val(datos['idPHD']);
				$('#CedulaB').val(datos['Cedula']);
				}
		});
	}
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

		$("#frmnuevoU").on('submit', function(e){
        e.preventDefault(); 
			$.ajax({
				type: 'POST',
				url: 'procesos/actualizar.php',
				data: new FormData(this),
				contentType: false,
				cache: false,
				processData: false,
				beforeSend: function() {
					$('.submitBtn').attr("disabled","disabled");
					$('#frmnuevoU').css("opacity", ".5");
				},
				success: function(data) {
					if(data.status){
                        $('#frmnuevoU')[0].reset();
                        $('#tablaDatatable').load('tabla.php');
                        alertify.success("Se agrego con exito :D");
                        return; // Detenemos el código
                	
				
			}else{        //En caso de que exista un error lo mostramose
				alertify.error(data.message);
				$('#frmnuevoU')[0].reset();
                        $('#tablaDatatable').load('tabla.php');
				}
						   $('#frmnuevoU').css("opacity","");
              			   $(".submitBtn").removeAttr("disabled");
				
			}
			});
		});	

		$("#frmnuevoA").on('submit', function(e){
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
					$('#frmnuevoA').css("opacity", ".5");
				},
				success: function(data) {
					if(data.status){
                        $('#frmnuevoA')[0].reset();
                        $('#tablaDatatable').load('tabla.php');
                        alertify.success("Se agrego con exito :D");
                        return; // Detenemos el código
                	
				
			}else{        //En caso de que exista un error lo mostramose
				alertify.error(data.message);
				$('#frmnuevoA')[0].reset();
                        $('#tablaDatatable').load('tabla.php');
				}
						   $('#frmnuevoA').css("opacity","");
              			   $(".submitBtn").removeAttr("disabled");
				
			}
			});
		});	
	});
</script>


