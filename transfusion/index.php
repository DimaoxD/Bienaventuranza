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
						Contrareferencia </div>
					<div class="card-body">
						<span class="btn" style="background-color: #009fa5; color: white;" data-bs-toggle="modal" data-bs-target="#agregarnuevosdatosmodal">
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
					<h5 class="modal-title" id="exampleModalLabel">Creacion de solicitud</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
					</button>
				</div>
				<div class="modal-body">
					<form enctype="multipart/form-data" action="" method="POST" id="frmnuevo" autocomplete="off">
						<div>
						<label>Cedula</label>
						<input type="text" class="form-control input-sm" id="Cedula" name="Cedula" required>
						</div>
						<label>Nombre</label>
						<input type="text" class="form-control input-sm" id="Nombres" name="Nombres" readonly>
						<label>Fecha y hora de presentacion</label>
						<input type="date" class="form-control input-sm" id="FSolicitud" name="FSolicitud">
						<label>Servicio solicitado</label>
						<select class="form-control input-sm" id="Estado" name="Estado" required>
							<option value="" selected>Selecciona una opcion</option>
							<option value="1">Neurocirugia</option>
							<option value="2">Unidad Renal</option>
							<option value="3">Unidad Coronaria</option>
							<option value="4">Unidad de cuidados intensivos</option>
							<option value="5">Unidad de cuidados intermedios</option>
							<option value="6">Cirugia general</option>
							<option value="7">Ortopedia</option>
							<option value="8">Hematoloia</option>
							<option value="9">Oncologia</option>
							<option value="10">Infectologia mayor complejidad</option>
							<option value="11">Dermatologia</option>
							<option value="12">Nefrologia</option>
							<option value="13">Urologia</option>
							<option value="14">Neumologia</option>
							<option value="15">Otro</option>
						</select>
						<label>Motivo de remision:</label>
						<select type="text" class="form-control input-sm" id="Remision" name="Remision" required>
							<option value="" selected disabled hidden>Selecciona una opcion</option>
							<option value="1">Complicacion</option>
							<option value="2">Requiere mayor complejidad</option>
							<option value="3">Cuenta con patologia no presentada en remision y requiere otro nivel</option>
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
						<label>Prioridad</label>
						<select type="text" class="form-control input-sm" id="Prioridad" name="Prioridad" required>
							<option value="" selected disabled hidden>Selecciona una opcion</option>
							<option value="1">Normal</option>
							<option value="2">Urgencia vital</option>
							<option value="3">Traslado primario</option>
							<option value="4">Prioritaria</option>
						</select>
						<hr>
						<button type="submit" name="submit" id="btnAgregarnuevo" style="background-color: #009fa5; color: white;" class="btn submitBtn">Agregar</button>
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
						<input type="hidden"  id="idContrareferencia" name="idContrareferencia">
						<div>
						<label class="form-label">Cedula</label>
						<input type="text" class="form-control input-sm" id="CedulaA" name="CedulaA" disabled>
						</div>
						<label class="form-label">Nombre</label>
						<input type="text" class="form-control input-sm" id="NombresA" name="NombresA" disabled>
						<label class="form-label">Diagnostico</label>
						<input type="text" class="form-control input-sm" id="DiagnosticosA" name="DiagnosticosA" >
						<ul class="lista" id="lista"></ul>
						<label class="form-label">Fecha y hora de presentacion</label>
						<input type="date" class="form-control input-sm" id="FSolicitudA" name="FSolicitudA" disabled>
						<label class="form-label">Fecha y hora de respuesta</label>
						<input type="date" class="form-control input-sm" id="FRespuestaA" name="FRespuestaA" disabled>
						<label class="form-label">Lugar de aceptacion</label>
  						<input type="text" class="form-control input-sm" id="LugarA" name="LugarA">
						<br><hr>
						<label class="form-label">Servicio solicitado</label>
						<select class="form-select" id="EstadoA" name="EstadoA">
							<option value="" selected>Selecciona una opcion</option>
							<option value="1">Neurocirugia</option>
							<option value="2">Unidad Renal</option>
							<option value="3">Unidad Coronaria</option>
							<option value="4">Unidad de cuidados intensivos</option>
							<option value="5">Unidad de cuidados intermedios</option>
							<option value="6">Cirugia general</option>
							<option value="7">Ortopedia</option>
							<option value="8">Hematoloia</option>
							<option value="9">Oncologia</option>
							<option value="10">Infectologia mayor complejidad</option>
							<option value="11">Dermatologia</option>
							<option value="12">Nefrologia</option>
							<option value="13">Urologia</option>
							<option value="14">Neumologia</option>
							<option value="15">Otro</option>
						</select>
						<label class="form-label" Style="display:none" name="inputtextA" id="inputtextA" for="input1A">Mencione el servicio a solicitar:</label>
  						<input Style="display:none" type="text" class="form-control input-sm" id="input1A" name="input1A">
						<br><hr>
						<label class="form-label">Motivo de remision:</label>
						<select type="text" class="form-select" id="RemisionA" name="RemisionA" disabled>
							<option value="" selected disabled hidden>Selecciona una opcion</option>
							<option value="1">Complicacion</option>
							<option value="2">Requiere mayor complejidad</option>
							<option value="3">Cuenta con patologia no presentada en remision y requiere otro nivel</option>
						</select>
						<label class="form-label">Prioridad</label>
						<select type="text" class="form-select" id="PrioridadA" name="PrioridadA" >
							<option value="" selected disabled hidden>Selecciona una opcion</option>
							<option value="1">Normal</option>
							<option value="2">Urgencia vital</option>
							<option value="3">Traslado primario</option>
							<option value="4">Prioritaria</option>
						</select>
						<label class="form-label">Funcionario de Referencia</label>
						<select type="text" class="form-select" id="ReferenciaA" name="ReferenciaA" disabled>
							<option value="" selected disabled hidden>Selecciona una opcion</option>
							<option value="1">Julieta</option>
							<option value="2">Geraldine</option>
							<option value="3">Milena</option>
							<option value="4">Jeimy</option>
							<option value="5">Astrid</option>
						</select>
						<label class="form-label">Estado de solicitud:</label>
						<select type="text" class="form-select"  id="ESolicitud" name="ESolicitud">
							<option value="1">Activo</option>
							<option value="3">En proceso</option>
						</select>
						<br>
						<button type="submit" name="submit" id="btnActualizar" style="background-color: #009fa5; color: white;" class="btn submitBtn">Agregar</button>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
					
				</div>
			</div>
		</div>
	</div>

	<div class="modal" id="modalVer2" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-scrollable">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Ver Solicitud</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
					</button>
				</div>
				<div class="modal-body">
					<form id="frmnuevoC">
					<input type="hidden"  id="idContrareferenciaC" name="idContrareferenciaC">
						<div>
						<label class="form-label">Cedula</label>
						<input type="text" class="form-control input-sm" id="CedulaC" name="CedulaC" disabled>
						</div>
						<label class="form-label">Nombre</label>
						<input type="text" class="form-control input-sm" id="NombresC" name="NombresC" disabled>
						<label class="form-label">Diagnostico</label>
						<input type="text" class="form-control input-sm" id="DiagnosticosC" name="DiagnosticosC" disabled>
						<ul class="lista" id="lista"></ul>
						<label class="form-label">Fecha y hora de presentacion</label>
						<input type="date" class="form-control input-sm" id="FSolicitudC" name="FSolicitudC" disabled>
						<label class="form-label">Fecha y hora de respuesta</label>
						<input type="date" class="form-control input-sm" id="FRespuestaC" name="FRespuestaC" disabled>
						<label class="form-label">Lugar de aceptacion</label>
  						<input type="text" class="form-control input-sm" id="LugarC" name="LugarC" disabled>
						<br><hr>
						<label class="form-label">Servicio solicitado</label>
						<select class="form-select" id="EstadoC" name="EstadoC" disabled>
							<option value="" selected>Selecciona una opcion</option>
							<option value="1">Neurocirugia</option>
							<option value="2">Unidad Renal</option>
							<option value="3">Unidad Coronaria</option>
							<option value="4">Unidad de cuidados intensivos</option>
							<option value="5">Unidad de cuidados intermedios</option>
							<option value="6">Cirugia general</option>
							<option value="7">Ortopedia</option>
							<option value="8">Hematoloia</option>
							<option value="9">Oncologia</option>
							<option value="10">Infectologia mayor complejidad</option>
							<option value="11">Dermatologia</option>
							<option value="12">Nefrologia</option>
							<option value="13">Urologia</option>
							<option value="14">Neumologia</option>
							<option value="15">Otro</option>
						</select>
						<label class="form-label" Style="display:none" name="inputtext1C" id="inputtext1C" for="input1C">Mencione el servicio a solicitar:</label>
  						<input Style="display:none" type="text" class="form-control input-sm" id="input1C" name="input1C" disabled>
						<br><hr>
						<label class="form-label">Motivo de remision:</label>
						<select type="text" class="form-select" id="RemisionC" name="RemisionC" disabled>
							<option value="" selected disabled hidden>Selecciona una opcion</option>
							<option value="1">Complicacion</option>
							<option value="2">Requiere mayor complejidad</option>
							<option value="3">Cuenta con patologia no presentada en remision y requiere otro nivel</option>
						</select>
						<label class="form-label">Prioridad</label>
						<select type="text" class="form-select" id="PrioridadC" name="PrioridadC"disabled >
							<option value="" selected disabled hidden>Selecciona una opcion</option>
							<option value="1">Normal</option>
							<option value="2">Urgencia vital</option>
							<option value="3">Traslado primario</option>
							<option value="4">Prioritaria</option>
						</select>
						<label class="form-label">Funcionario de Referencia</label>
						<select type="text" class="form-select" id="ReferenciaC" name="ReferenciaC" disabled>
							<option value="" selected disabled hidden>Selecciona una opcion</option>
							<option value="1">Julieta</option>
							<option value="2">Geraldine</option>
							<option value="3">Milena</option>
							<option value="4">Jeimy</option>
							<option value="5">Astrid</option>
						</select>
						<hr>
						<label class="form-label">Estado de solicitud:</label>
						<select type="text" class="form-select"  id="ESolicitudC" name="ESolicitudC" disabled>
							<option value="4">Cancelado</option>
							<option value="5">Cancelado por medico</option>
							<option value="6">Familiar no acepta remision</option>
						</select>
						<label class="form-label" Style="display:none" name="inputtextC" id="inputtextC" for="inputC">Cual fue el motivo de cancelacion:</label>
  						<input Style="display:none" type="text" class="form-control input-sm" id="inputC" name="inputC" disabled>
						<hr>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
					
				</div>
			</div>
		</div>
	</div>
	<!-- MODAL-->
	<div class="modal" id="modalVer" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-scrollable">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Ver Solicitud</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
					</button>
				</div>
				<div class="modal-body">
					<form id="frmnuevoD">
					<input type="hidden"  id="idContrareferenciaE" name="idContrareferenciaE">
						<div>
						<label class="form-label">Cedula</label>
						<input type="text" class="form-control input-sm" id="CedulaE" name="CedulaE" disabled>
						</div>
						<label class="form-label">Nombre</label>
						<input type="text" class="form-control input-sm" id="NombresE" name="NombresE" disabled>
						<label class="form-label">Diagnostico</label>
						<input type="text" class="form-control input-sm" id="DiagnosticosE" name="DiagnosticosE" disabled>
						<ul class="lista" id="lista"></ul>
						<label class="form-label">Fecha y hora de presentacion</label>
						<input type="date" class="form-control input-sm" id="FSolicitudE" name="FSolicitudE" disabled>
						<label class="form-label">Fecha y hora de respuesta</label>
						<input type="date" class="form-control input-sm" id="FRespuestaE" name="FRespuestaE" disabled>
						<label class="form-label">Lugar de aceptacion</label>
  						<input type="text" class="form-control input-sm" id="LugarE" name="LugarE" disabled>
						<br><hr>
						<label class="form-label">Servicio solicitado</label>
						<select class="form-select" id="EstadoE" name="EstadoE" disabled>
							<option value="" selected>Selecciona una opcion</option>
							<option value="1">Neurocirugia</option>
							<option value="2">Unidad Renal</option>
							<option value="3">Unidad Coronaria</option>
							<option value="4">Unidad de cuidados intensivos</option>
							<option value="5">Unidad de cuidados intermedios</option>
							<option value="6">Cirugia general</option>
							<option value="7">Ortopedia</option>
							<option value="8">Hematoloia</option>
							<option value="9">Oncologia</option>
							<option value="10">Infectologia mayor complejidad</option>
							<option value="11">Dermatologia</option>
							<option value="12">Nefrologia</option>
							<option value="13">Urologia</option>
							<option value="14">Neumologia</option>
							<option value="15">Otro</option>
						</select>
						<label class="form-label" Style="display:none" name="inputtext1E" id="inputtext1E" for="input1E">Mencione el servicio a solicitar:</label>
  						<input Style="display:none" type="text" class="form-control input-sm" id="input1E" name="input1E" disabled>
						<br><hr>
						<label class="form-label">Motivo de remision:</label>
						<select type="text" class="form-select" id="RemisionE" name="RemisionE" disabled>
							<option value="" selected disabled hidden>Selecciona una opcion</option>
							<option value="1">Complicacion</option>
							<option value="2">Requiere mayor complejidad</option>
							<option value="3">Cuenta con patologia no presentada en remision y requiere otro nivel</option>
						</select>
						<label class="form-label">Prioridad</label>
						<select type="text" class="form-select" id="PrioridadE" name="PrioridadE" disabled>
							<option value="" selected disabled hidden>Selecciona una opcion</option>
							<option value="1">Normal</option>
							<option value="2">Urgencia vital</option>
							<option value="3">Traslado primario</option>
							<option value="4">Prioritaria</option>
						</select>
						<label class="form-label">Funcionario de Referencia</label>
						<select type="text" class="form-select" id="ReferenciaE" name="ReferenciaE" disabled>
							<option value="" selected disabled hidden>Selecciona una opcion</option>
							<option value="1">Julieta</option>
							<option value="2">Geraldine</option>
							<option value="3">Milena</option>
							<option value="4">Jeimy</option>
							<option value="5">Astrid</option>
						</select>
						<label class="form-label">Estado de solicitud:</label>
						<select type="text" class="form-select"  id="ESolicitudE" name="ESolicitudE" disabled>
							<option value="2">Remitido</option>
						</select>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
					
				</div>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal" id="modalAdjuntar" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-scrollable">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Adjuntar orden</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
					</button>
				</div>
				<div class="modal-body">
					<form enctype="multipart/form-data" action="" method="POST" id="frmnuevoA">
					<input type="hidden"  id="idContrareferenciaB" name="idContrareferenciaB">
					<input type="hidden"  id="CedulaB" name="CedulaB">
						<label for="file">Datos adjuntos</label>
						<input type="file" class="form-control input-sm" id="fileU" name="fileU" accept=".pdf" required/><br><br>
						<button type="submit" name="submit" id="btnAgregarnuevo" style="background-color: #009fa5; color: white;" class="btn submitBtn">Agregar</button>
						</form>
						</div>
						<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
				</div>
			</div>
		</div>
	</div>
<!--Modal-->
<div class="modal" id="modalMotivo" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Cancelar orden</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
						</button>
				</div>
				<div class="modal-body">
				<form enctype="multipart/form-data" action="" method="POST" id="frmMotivo" autocomplete="off">
						<input type="hidden"  id="idContrareferenciaD" name="idContrareferenciaD">
						<label class="form-label">Selecciona el motivo de cancelacion:</label>
						<select class="form-select" id="ESolicitudD" name="ESolicitudD">
						<option selected>Selecciona una opcion</option>
						<option value="4">Cancelado</option>
						<option value="5">Cancelado por medico</option>
						<option value="6">Familiar no acepta remision</option>
						</select>	
						<label class="form-label" Style="display:none" name="inputtextE" id="inputtextE" for="inputE">Mencione el motivo de la cancelacion:</label>
  						<input Style="display:none" type="text" class="form-control input-sm" id="inputE" name="inputE">
						<br><br>
				<button type="submit" name="submit" id="btnActualizar" style="background-color: #009fa5; color: white;" class="btn submitBtn">Agregar</button>
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
	<script src="js/peticiones.js"></script>
	<script src="js/peticiones2.js"></script>

</body>

</html>


<script>
//Agregar
const Estado = document.querySelector("#Estado");
const input = document.querySelector("[name=input1]");
const inputtext = document.querySelector("#inputtext");
//Actualizar
const EstadoA = document.querySelector("#EstadoA");
const inputA = document.querySelector("[name=input1A]");
const inputtextA = document.querySelector("#inputtextA");
//Motivo de cancelacion
const ESolicitudD = document.querySelector("#ESolicitudD");
const inputE = document.querySelector("[name=inputE]");
const inputtextE = document.querySelector("#inputtextE");

Estado.addEventListener("change", () => { //Agregar
  if (Estado.value === "15") {
    inputtext.style.display = 'initial';
	input.style.display = 'initial';
  } else {
    input.style.display = 'none';
	inputtext.style.display = 'none';
  }
});
EstadoA.addEventListener("change", () => { //Actualizar
  if (EstadoA.value === "15") {
    inputtextA.style.display = 'initial';
	inputA.style.display = 'initial';
  } else {
    inputA.style.display = 'none';
	inputtextA.style.display = 'none';
  }
});
ESolicitudD.addEventListener("change", () => { //Motivo de cancelacion
  if (ESolicitudD.value === "4") {
    inputtextE.style.display = 'initial';
	inputE.style.display = 'initial';
  } else {
    inputE.style.display = 'none';
	inputtextE.style.display = 'none';
  }
});


	</script>
<script type="text/javascript"> //CARGAR TABLA
	$(document).ready(function() {
		$('#tablaDatatable').load('tabla.php');
	});
</script>

<script type="text/javascript">
	//OBTENER DATOS Y ELIMINARLOS
	function agregaFrmActualizar(idContrareferencia) {
		$.ajax({
			type: "POST",
			data: "idContrareferencia=" + idContrareferencia,
			url: "procesos/obtenDatos.php",
			success: function(r) {
				datos = jQuery.parseJSON(r);
				$('#idContrareferencia').val(datos['idContrareferencia']);
				$('#CedulaA').val(datos['Pacientes_Cedula']);
				$('#NombresA').val(datos['Nombres']);
				$('#DiagnosticosA').val(datos['Diagnosticos']);
				$('#FSolicitudA').val(datos['Fecha_Solicitud']);
				$('#FRespuestaA').val(datos['Fecha_Respuesta']);
				$('#LugarA').val(datos['Lugar_Aceptacion']);
				$('#EstadoA').val(datos['Servicio_Solicitud']);
				$('#RemisionA').val(datos['Motivo']);
				$('#PrioridadA').val(datos['Prioridad']);
				$('#ReferenciaA').val(datos['Recepcion_Cedula']);
				$('#ESolicitud').val(datos['Estado_Solicitud']);
				$('#input1A').val(datos['Inputtext']);
				if(datos['Servicio_Solicitud'] == 15){
					inputtextA.style.display = 'initial';
					inputA.style.display = 'initial';
				}else{
					inputA.style.display = 'none';
					inputtextA.style.display = 'none';
				}
				}
		});
	}
	function verFrm2(idContrareferenciaC) {
		$.ajax({
			type: "POST",
			data: "idContrareferenciaC=" + idContrareferenciaC,
			url: "procesos/verDatos.php",
			success: function(r) {
				datos = jQuery.parseJSON(r);
				$('#idContrareferenciaC').val(datos['idContrareferencia']);
				$('#CedulaC').val(datos['Pacientes_Cedula']);
				$('#NombresC').val(datos['Nombres']);
				$('#DiagnosticosC').val(datos['Diagnosticos']);
				$('#FSolicitudC').val(datos['Fecha_Solicitud']);
				$('#FRespuestaC').val(datos['Fecha_Respuesta']);
				$('#LugarC').val(datos['Lugar_Aceptacion']);
				$('#EstadoC').val(datos['Servicio_Solicitud']);
				$('#RemisionC').val(datos['Motivo']);
				$('#PrioridadC').val(datos['Prioridad']);
				$('#ReferenciaC').val(datos['Recepcion_Cedula']);
				$('#ESolicitudC').val(datos['Estado_Solicitud']);
				$('#input1C').val(datos['Inputtext1']);
				$('#inputC').val(datos['Inputtext2']);
				if(datos['Servicio_Solicitud'] == 15){
					inputtext1C.style.display = 'initial';
					input1C.style.display = 'initial';
				}else{
					input1C.style.display = 'none';
					inputtext1C.style.display = 'none';
				}
				if(datos['Estado_Solicitud'] == 4){
					inputtextC.style.display = 'initial';
					inputC.style.display = 'initial';
				}else{
					inputC.style.display = 'none';
					inputtextC.style.display = 'none';
				}
				}
		});
	}
	function verFrm(idContrareferenciaE) {
		$.ajax({
			type: "POST",
			data: "idContrareferenciaE=" + idContrareferenciaE,
			url: "procesos/verDatos2.php",
			success: function(r) {
				datos = jQuery.parseJSON(r);
				$('#idContrareferenciaE').val(datos['idContrareferencia']);
				$('#CedulaE').val(datos['Pacientes_Cedula']);
				$('#NombresE').val(datos['Nombres']);
				$('#DiagnosticosE').val(datos['Diagnosticos']);
				$('#FSolicitudE').val(datos['Fecha_Solicitud']);
				$('#FRespuestaE').val(datos['Fecha_Respuesta']);
				$('#LugarE').val(datos['Lugar_Aceptacion']);
				$('#EstadoE').val(datos['Servicio_Solicitud']);
				$('#RemisionE').val(datos['Motivo']);
				$('#PrioridadE').val(datos['Prioridad']);
				$('#ReferenciaE').val(datos['Recepcion_Cedula']);
				$('#ESolicitudE').val(datos['Estado_Solicitud']);
				$('#input1E').val(datos['Inputtext1']);
				if(datos['Servicio_Solicitud'] == 15){
					inputtext1E.style.display = 'initial';
					input1E.style.display = 'initial';
				}else{
					input1E.style.display = 'none';
					inputtext1E.style.display = 'none';
				}
				}
		});
	}
	function adjuntoFrm(idContrareferenciaB) {
		$.ajax({
			type: "POST",
			data: "idContrareferenciaB=" + idContrareferenciaB,
			url: "procesos/adjuntoDatos.php",
			success: function(r) {
				datos = jQuery.parseJSON(r);
				$('#idContrareferenciaB').val(datos['idContrareferencia']);
				$('#CedulaB').val(datos['Cedula']);
				
				}
		});
	}
	function motivoFrm(idContrareferenciaD) {
		$.ajax({
			type: "POST",
			data: "idContrareferenciaD=" + idContrareferenciaD,
			url: "procesos/motivoDatos.php",
			success: function(r) {
				datos = jQuery.parseJSON(r);
				$('#idContrareferenciaD').val(datos['idContrareferencia']);
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
	$(document).ready(function(e) { //Agregar
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
						$('#tablaDatatable').DataTable().ajax.reload();
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

		$("#frmnuevoU").on('submit', function(e){ //Actualizar
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

		$("#frmnuevoC").on('submit', function(e){ //VER
        e.preventDefault(); 
			$.ajax({
				type: 'POST',
				url: 'procesos/ver.php',
				data: new FormData(this),
				contentType: false,
				cache: false,
				processData: false,
				beforeSend: function() {
					$('.submitBtn').attr("disabled","disabled");
					$('#frmnuevoC').css("opacity", ".5");
				},
				success: function(data) {
					if(data.status){
                        $('#frmnuevoC')[0].reset();
                        $('#tablaDatatable').load('tabla.php');
                        alertify.success("Se agrego con exito :D");
                        return; // Detenemos el código
                	
				
			}else{        //En caso de que exista un error lo mostramose
				alertify.error(data.message);
				$('#frmnuevoC')[0].reset();
                        $('#tablaDatatable').load('tabla.php');
				}
						   $('#frmnuevoC').css("opacity","");
              			   $(".submitBtn").removeAttr("disabled");
				
			}
			});
		});
		$("#frmnuevoD").on('submit', function(e){ //VER2
        e.preventDefault(); 
			$.ajax({
				type: 'POST',
				url: 'procesos/ver2.php',
				data: new FormData(this),
				contentType: false,
				cache: false,
				processData: false,
				beforeSend: function() {
					$('.submitBtn').attr("disabled","disabled");
					$('#frmnuevoD').css("opacity", ".5");
				},
				success: function(data) {
					if(data.status){
                        $('#frmnuevoD')[0].reset();
                        $('#tablaDatatable').load('tabla.php');
                        alertify.success("Se agrego con exito :D");
                        return; // Detenemos el código
                	
				
			}else{        //En caso de que exista un error lo mostramose
				alertify.error(data.message);
				$('#frmnuevoD')[0].reset();
                        $('#tablaDatatable').load('tabla.php');
				}
						   $('#frmnuevoD').css("opacity","");
              			   $(".submitBtn").removeAttr("disabled");
				
			}
			});
		});
		$("#frmMotivo").on('submit', function(e){ //motivo
    e.preventDefault(); 
        $.ajax({
            type: 'POST',
            url: 'procesos/motivo.php',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function() {
                $('.submitBtn').attr("disabled","disabled");
                $('#frmMotivo').css("opacity", ".5");
            },
            success: function(data) {
                if(data.status){
                    $('#frmMotivo')[0].reset();
                    $('#tablaDatatable').load('tabla.php');
                    alertify.success("Se agrego con exito :D");
                    return; // Detenemos el código
                
            
        }else{        //En caso de que exista un error lo mostramose
            alertify.error(data.message);
            
            
            }
                       $('#frmMotivo').css("opacity","");
                         $(".submitBtn").removeAttr("disabled");
            
        }
        });
    });	
	$("#frmnuevoA").on('submit', function(e){ //VER
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
<script>
		function aprobarSolicitud(idContrareferencia){
		alertify.confirm('¿Quieres remitir paciente?', function(
		
){ 

			$.ajax({
				type:"POST",
				data:"idContrareferencia=" + idContrareferencia,
				url:"procesos/aprobarSolicitud.php",
				success:function(r){
					if(r==1){
						$('#tablaDatatable').load('tabla.php');
						alertify.success("Paciente remitido!");
					}else{
						alertify.error("No se pudo procesar...");
					}
				}
			});

		}
		, function(){

		});
	}
	</script>


