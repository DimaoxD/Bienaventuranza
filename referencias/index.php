<!DOCTYPE html>
<html>

<head>
	<title>Bienaventuranza IPS</title>
	<?php require_once "scripts.php";  ?>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="plugins/animate.css">
  	<link rel="stylesheet" href="plugins/slick/slick.css">
 	 <link rel="stylesheet" href="plugins/slick/slick-theme.css">
	  <link rel="icon" type="image/jpg" href="../extras/images/Favicon.jpg"/>
</head>

<style>
	@import url(https://fonts.googleapis.com/css?family=Titillium+Web:300);
.fa-2x {
font-size: 3em;
}
.fa1 {
position: relative;
display: table-cell;
width: 60px;
height: 36px;
text-align: center;
vertical-align: middle;
font-size:10px;
}


.main-menu:hover,nav.main-menu.expanded {
width:250px;
overflow:visible;
}

.main-menu {
background:#2596BE;
border-right:2px solid black;
position:fixed;
top:0;
bottom:0;
height:100%;
left:0;
width:60px;
overflow:hidden;
-webkit-transition:width .05s linear;
transition:width .05s linear;
-webkit-transform:translateZ(0) scale(1,1);
z-index:1000;
}

.main-menu>ul {
margin:7px 0;
}

.main-menu li {
position:relative;
display:block;
width:250px;
}

.main-menu li>a {
position:relative;
display:table;
border-collapse:collapse;
border-spacing:0;
color:white;
font-family: open sans;
font-size: 14px;
text-decoration:none;
-webkit-transform:translateZ(0) scale(1,1);
-webkit-transition:all .1s linear;
transition:all .1s linear;
  
}

.main-menu .nav-icon {
position:relative;
display:table-cell;
width:60px;
height:36px;
text-align:center;
vertical-align:middle;
font-size:16px;
}

.main-menu .nav-text {
position:relative;
display:table-cell;
vertical-align:middle;
width:190px;
  font-family: 'Titillium Web', sans-serif;
}

.main-menu>ul.logout {
position:absolute;
left:0;
bottom:0;
}

.no-touch .scrollable.hover {
overflow-y:hidden;
}

.no-touch .scrollable.hover:hover {
overflow-y:auto;
overflow:visible;
}

a:hover,a:focus {
text-decoration:none;
}

nav {
-webkit-user-select:none;
-moz-user-select:none;
-ms-user-select:none;
-o-user-select:none;
user-select:none;
}

nav ul,nav li {
outline:0;
margin:0;
padding:0;
}
.main-menu li:hover>a,nav.main-menu li.active>a,.dropdown-menu>li>a:hover,.dropdown-menu>li>a:focus,.dropdown-menu>.active>a,.dropdown-menu>.active>a:hover,.dropdown-menu>.active>a:focus,.no-touch .dashboard-page nav.dashboard-menu ul li:hover a,.dashboard-page nav.dashboard-menu ul li.active a {
color:#000;
background-color:#eff6fb;
}
.area {
float: left;
background: #e2e2e2;
width: 100%;
height: 100%;
}
@font-face {
  font-family: 'Titillium Web';
  font-style: normal;
  font-weight: 300;
  src: local('Titillium WebLight'), local('TitilliumWeb-Light'), url(http://themes.googleusercontent.com/static/fonts/titilliumweb/v2/anMUvcNT0H1YN4FII8wpr24bNCNEoFTpS2BTjF6FB5E.woff) format('woff');
}
		input[readonly]
		{
			background-color:#ccc;
		}
		select[readonly]
		{
			background-color:#ccc;
		}	
		.lista {
			list-style-type: none;
			width: 300px;
			height: auto;
			position: absolute;
			margin-top: 10px;
			margin-left: 10px;
		}

		.lista1 {
			padding: 10px;
            cursor: pointer;
            background-color: #009fa5; 
            border-bottom: 1px solid #d4d4d4; 
		}
		.lista2 {
			list-style-type: none;
			width: 300px;
			height: auto;
			position: absolute;
			margin-top: 10px;
			margin-left: 10px;
		}
		.lista3 {
			padding: 10px;
            cursor: pointer;
            background-color: #009fa5; 
            border-bottom: 1px solid #d4d4d4; 
		}

	
    </style>
</head>

<body>
<div class="preloader">
    <div class="loading-mask"></div>
    <div class="loading-mask"></div>
    <div class="loading-mask"></div>
    <div class="loading-mask"></div>
    <div class="loading-mask"></div>
  </div>
  <main class="site-wrapper">
	<div class="container">
	<div class="area"></div><nav class="main-menu">
            <ul>
                <li>
                    <a href="http://justinfarrow.com">
                        <i class="fa fa-home fa1 fa-2x"></i>
                        <span class="nav-text">
                            Inicio
                        </span>
                    </a>
                  
                </li>
                <li class="has-subnav">
                    <a href="http://localhost/datatable%20-%20copia/camas">
                        <i class="fa-regular fa-bed fa1 fa-2x"></i>
                        <span class="nav-text">
                            Camas
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="http://localhost/datatable%20-%20copia/referencias">
                       <i class="fa fa-book fa1 fa-2x"></i>
                        <span class="nav-text">
                            Bitacora
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="http://localhost/datatable%20-%20copia/solicitud">
                       <i class="fa fa-certificate fa1 fa-2x"></i>
                        <span class="nav-text">
                            Solicitudes o interconsulta
                        </span>
                    </a>
                   
                </li>
                <li>
                    <a href="http://localhost/datatable%20-%20copia/defuncion">
                        <i class="fa fa-address-card fa1 fa-2x"></i>
                        <span class="nav-text">
                            Certificados de defuncion
                        </span>
                    </a>
                </li>
                <li>
                    <a href="http://localhost/datatable%20-%20copia/oxigeno">
                        <i class="fa fa-stethoscope fa1 fa-2x"></i>
                        <span class="nav-text">
                           Oxigeno
                        </span>
                    </a>
                </li>
                <li>
                   <a href="http://localhost/datatable%20-%20copia/phd">
                        <i class="fa fa-map-marker fa1 fa-2x"></i>
                        <span class="nav-text">
                            PHD
                        </span>
                    </a>
                </li>
                <li>
                    <a href="http://localhost/datatable%20-%20copia/imagenes">
                       <i class="fa fa-camera fa1 fa-2x"></i>
                        <span class="nav-text">
                            Imagenologia 
                        </span>
                    </a>
                </li>
				<li>
                    <a href="http://localhost/datatable%20-%20copia/dietas">
                       <i class="fa fa-cutlery fa1 fa-2x"></i>
                        <span class="nav-text">
                            Dietas 
                        </span>
                    </a>
                </li> 
				<li>
                    <a href="http://localhost/datatable%20-%20copia/Contrareferencia">
                       <i class="fa fa-refresh fa1 fa-2x"></i>
                        <span class="nav-text">
                            Contrareferencia 
                        </span>
                    </a>
                </li>
            </ul>
        </nav>
	<p>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="card text-left">
					<div class="card-header">
						Bitacora de Referencia </div>
					<div class="card-body">
						<span class="btn btn-primary" data-bs-toggle="modal" style="background-color: #009fa5;color: white; font-weight: bold;" data-bs-target="#agregarnuevosdatosmodal">
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
					<form enctype="multipart/form-data" action="" method="POST" id="frmnuevo" autocomplete="off">
						<div>
							<label>Cedula</label>
							<input type="text" class="form-control input-sm" id="Cedula" name="Cedula" onblur="verificarCedula($('#Cedula').val())" required>
						</div>
						<label>Nombre</label>
						<input type="text" class="form-control input-sm" id="Nombres" name="Nombres" readonly>
						<label>Fecha y hora de presentacion</label>
						<input type="datetime-local" class="form-control input-sm" id="FPresentacion" name="FPresentacion" required>
						<label>Fecha y hora de respuesta</label>
						<input type="datetime-local" class="form-control input-sm" id="FRespuesta" name="FRespuesta">
						<label>Paciente Covid</label>
						<select type="text" class="form-control input-sm" id="Covid" name="Covid" required>
							<option value="">Selecciona una opcion</option>
							<option value="VERDADERO">Positivo</option>
							<option value="FALSO">Falso</option>
						</select>
						
						<label for="Diagnosticos">Diagnostico</label>
						<input class="form-control" type="text" id="Diagnosticos" name="Diagnosticos" autocomplete="off">
						<ul class="lista" id="lista"></ul>
						
						<label>IPS Remitente</label>
						<input type="text" class="form-control input-sm" id="IPS" name="IPS" required>
						<label>Funcionario de Referencia</label>
						<select type="text" class="form-control input-sm" id="Referencia" name="Referencia" required>
							<option value="" selected disabled hidden>Selecciona una opcion</option>
							<option value="1">Julieta</option>
							<option value="2">Geraldine</option>
							<option value="3">Milena</option>
							<option value="4">Jeimy</option>
							<option value="5">Astrid</option>
						</select>
						<label>Especialista que da respuesta</label>
						<select type="text" class="form-control input-sm" id="Especialista" name="Especialista">
							<option value="">Selecciona una opcion</option>
							<option value="1">Camilo Barros</option>
							<option value="2">Pilar Gonzalez</option>
							<option value="3">Camilo Vera</option>
							<option value="4">Dani Espiti</option>
							<option value="5">Andres Lamos</option>
							<option value="6">Moises</option>
							<option value="0">No presentado</option>
						</select>
						<label>Respuesta al caso</label>
						<select type="text" class="form-control input-sm" id="Rcaso" name="Rcaso" required>
							<option value="" selected disabled hidden>Selecciona una opcion</option>
							<option value="1">Aceptado</option>
							<option value="2">No aceptado</option>
						</select>
						<label>Motivo de no aceptacion</label>
						<select type="text" class="form-control input-sm" id="Maceptacion" name="Maceptacion" >
							<option id=a value="0">Selecciona una opcion</option>
							<option id=a2 value="No disponibilidad de camas por ocupacion">No disponibilidad de camas por ocupacion</option>
							<option id=a3 value="No disponibilidad de cama">No disponibilidad de cama</option>
							<option id=a4 value="No disponbilidad de especialidad">No disponbilidad de especialidad</option>
							<option id=a5 value="Requiere mayor complejidad">Requiere mayor complejidad</option>
							<option id=a1  value="No aplica">No aplica</option>
						</select>
						<label>Fecha de Ingreso</label>
						<input type="datetime-local" class="form-control input-sm" id="FIngreso" name="FIngreso" value="1980-01-01" readonly>
						<label for="file">Datos adjuntos</label>
						<input type="file" class="form-control input-sm" id="file" name="file" accept=".pdf" required/><br><br>
						<button type="submit" name="submit" id="btnAgregarnuevo" style="background-color: #009fa5;color: white; font-weight: bold;" class="btn btn-primary submitBtn">Agregar</button>
					</form>
					<p class="statusMsg"></p>
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
						<input type="hidden"  id="id_Referencias" name="id_Referencias">
						<div>
							<label>Cedula</label>
							<input type="text" class="form-control input-sm" id="CedulaU" readonly name="CedulaU">
							<span id="search_result"></span>
						</div>
						<label>Nombre</label>
						<input type="text" class="form-control input-sm" id="NombresU" disabled name="NombresU">
						<label>Fecha y hora de presentacion</label>
						<input type="datetime-local" class="form-control input-sm" id="FPresentacionU" disabled name="FPresentacionU">
						<label>Fecha y hora de respuesta</label>
						<input type="datetime-local" class="form-control input-sm" id="FRespuestaU"  name="FRespuestaU">
						<label>Paciente Covid</label>
						<select type="text" class="form-control input-sm" id="CovidU" disabled name="CovidU">
							<option value="">Selecciona una opcion</option>
							<option value="VERDADERO">Positivo</option>
							<option value="FALSO">Falso</option>
						</select>
						<label>Diagnostico</label>
						<input type="text" class="form-control input-sm" id="DiagnosticoU" disabled name="DiagnosticoU">
						<label>IPS Remitente</label>
						<input type="text" class="form-control input-sm" id="IPSU" disabled name="IPSU">
						<label>Funcionario de Referencia</label>
						<select type="text" class="form-control input-sm" id="ReferenciaU" disabled name="ReferenciaU">
							<option value="" selected disabled hidden>Selecciona una opcion</option>
							<option value="1">Julieta</option>
							<option value="2">Geraldine</option>
							<option value="3">Milena</option>
							<option value="4">Jeimy</option>
							<option value="5">Astrid</option>
						</select>
						<label>Especialista que da respuesta</label>
						<select type="text" class="form-control input-sm" id="EspecialistaU"  name="EspecialistaU" disabled>
							<option value="">Selecciona una opcion</option>
							<option value="1">Camilo Barros</option>
							<option value="2">Pilar Gonzalez</option>
							<option value="3">Camilo Vera</option>
							<option value="4">Dani Espiti</option>
							<option value="5">Andres Lamos</option>
							<option value="6">Moises</option>
							<option value="0">No presentado</option>
						</select>
						<label>Respuesta al caso</label>
						<select type="text" class="form-control input-sm" id="RcasoU" name="RcasoU">
							<option value="" selected disabled hidden>Selecciona una opcion</option>
							<option value="1">Aceptado</option>
							<option value="2">No aceptado</option>
						</select>					
						<label>Motivo de no aceptacion</label>
						<select type="text" class="form-control input-sm" id="MaceptacionU" name="MaceptacionU" disabled>
						
						<option id=b value="">Selecciona una opcion</option>
							<option id=b2 value="No disponibilidad de camas por ocupacion">No disponibilidad de camas por ocupacion</option>
							<option id=b3 value="No disponibilidad de cama">No disponibilidad de cama</option>
							<option id=b4 value="No disponbilidad de especialidad">No disponbilidad de especialidad</option>
							<option id=b5 value="Requiere mayor complejidad">Requiere mayor complejidad</option>
							<option id=b1  value="No aplica">No aplica</option>
						</select>
						<label>Fecha de Ingreso</label>
						<input type="datetime-local" class="form-control input-sm" id="FIngresoU" name="FIngresoU" value="1980-01-01" readonly>
						<label>Motivo de cancelacion</label>
						<select type="text" class="form-control input-sm" id="McancelacionU" name="McancelacionU" >
							<option value="">Selecciona una opcion</option>
							<option value="EPS Cancela">EPS Cancela</option>
							<option value="Paciente no acepta">Paciente no acepta</option>
							<option value="Familiar no acepta">Familiar no acepta</option>
							<option value="Paciente tuvo egreso">Paciente tuvo egreso</option>
							<option value="Remitido a otra IPS">Remitido a otra IPS</option>
							<option value="Paciente Fallece">Paciente fallece</option>
						</select>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
					<button type="button" class="btn btn-warning" style="background-color: #009fa5;color: white; font-weight: bold;" id="btnActualizar">Actualizar</button>
				</div>
			</div>
		</div>
	</div>
	
	</main>
	<script src="js/script.js"></script>
	<script src="plugins/jquery.nicescroll.min.js"></script>
<script src="plugins/isotope/isotope.pkgd.min.js"></script>
<script src="plugins/slick/slick.min.js"></script>
	<script src="js/peticiones.js"></script>
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



					} else {
						alertify.error("Fallo al actualizar :(");
					}
				}
			});
		});

		$("#frmnuevoU").on('#btnActualizar', function(e){
        e.preventDefault(); 
			$.ajax({
				type: 'POST',
				url: 'procesos/actualizar.php',
				data: new FormData(this),
				contentType: false,
				cache: false,
				processData: false,
				beforeSend: function() {
					
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
              			  
				
			}
			});
		});

	});
</script>
<script>
	$(function() {
		$("#Rcaso").change(function() {
			if ($(this).val() === "1") {
				
				
				$("#Maceptacion").prop("disabled", true);

				$("#FIngreso").prop("readonly", false);
				
			} else {
				
				$("#Maceptacion").prop("disabled", false);
				
				$("#FIngreso").prop("readonly", true);
			}
		});
	});

	$(function() {
		$("#RcasoU").change(function() {
			if ($(this).val() === "1") {
				
				
				$("#MaceptacionU").prop("disabled", true);

				$("#FIngresoU").prop("readonly", false);
				
				
			} else {
			
				$("#MaceptacionU").prop("disabled", false);
				
				$("#FIngresoU").prop("readonly", true);
				
			}
		});
	});
</script>
<script type="text/javascript">
	//CARGAR TABLA
	$(document).ready(function() {
		$('#tablaDatatable').load('tabla.php');
	});
</script>

<script type="text/javascript">
	//OBTENER DATOS Y ELIMINARLOS
	function agregaFrmActualizar(id_Referencias) {
		$.ajax({
			type: "POST",
			data: "id_Referencias=" + id_Referencias,
			url: "procesos/obtenDatos.php",
			success: function(r) {
				datos = jQuery.parseJSON(r);
				$('#id_Referencias').val(datos['idReferencias']);
				$('#CedulaU').val(datos['Pacientes_Cedula']);
				$('#NombresU').val(datos['Nombres']);
				$('#FPresentacionU').val(datos['F_Presentacion']);
				$('#FRespuestaU').val(datos['F_Respuesta']);
				$('#CovidU').val(datos['Covid']);
				$('#DiagnosticoU').val(datos['Diagnostico']);
				$('#IPSU').val(datos['IPS_Remitente']);
				$('#ReferenciaU').val(datos['Recepcion_Nombre']);
				$('#EspecialistaU').val(datos['Especialistas_Nombre']);
				$('#RcasoU').val(datos['Respuesta_Referencia']);
				$('#MaceptacionU').val(datos['Motivo_Aceptacion']);
				$('#McancelacionU').val(datos['Motivo_Cancelacion']);
				$('#FIngresoU').val(datos['F_Ingreso']);
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

		// Objeto PHP que consultaremos
		request.open("POST", "componentes/search_data.php");

		// Definiendo el listener
		request.onreadystatechange = function() {
			// Revision si fue completada la peticion y si fue exitosa
			if (this.readyState === 4 && this.status === 200) {
				// Ingresando la respuesta obtenida del PHP
				document.getElementById("Nombres").value = this.responseText;
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
	
</script>
<script>
	function verificarCedula(Cedula){
    var parametros = {Cedula:Cedula};
    $.ajax({
        url:"procesos/validarCedula.php",
        data:parametros,
        type:"post",
        success:function(data){
        if(data.status){
			alertify.confirm(data.message, function(
		
		){ 
		
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

	});
		
				}
				, function(){
		
				});
	
        }else{
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

	});
					}
        } 
    });
}
	</script>

