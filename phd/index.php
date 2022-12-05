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
						Planes de atencion domiciliaria </div>
					<div class="card-body">
						<span class="btn btn-primary" style="background-color: #009fa5;color: white; font-weight: bold;" data-bs-toggle="modal" data-bs-target="#agregarnuevosdatosmodal">
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
						<button type="submit" name="submit" id="btnAgregarnuevo" style="background-color: #009fa5;color: white; font-weight: bold;" class="btn btn-primary submitBtn">Agregar</button>
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
						<button type="submit" name="submit" id="btnActualizar" style="background-color: #009fa5;color: white; font-weight: bold;" class="btn btn-primary submitBtn">Agregar</button>
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
						<button type="submit" name="submit" id="btnAgregarnuevo" style="background-color: #009fa5;color: white; font-weight: bold;" class="btn btn-primary submitBtn">Agregar</button>
						</form>
						</div>
						<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
				</div>
			</div>
		</div>
	</div>
	</main>
	<script src="js/script.js"></script>
	<script src="plugins/jquery.nicescroll.min.js"></script>
<script src="plugins/isotope/isotope.pkgd.min.js"></script>
<script src="plugins/slick/slick.min.js"></script>
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


