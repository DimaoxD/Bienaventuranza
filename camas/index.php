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


	
	</style>
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
		<div class="row">
			<div class="col-sm-12">
				<div class="card text-left mb-3 " >
					<div class="card-header ">
Reservas de cama					</div>
					<div class="card-body">
						<span class="btn btn-dark" style="background-color: #009fa5;color: white; font-weight: bold;" data-bs-toggle="modal" data-bs-target="#agregarnuevosdatosmodal">
							Agregar paciente <span class="fa fa-plus-circle"></span>
						</span>
						<span class="btn btn-dark" style="background-color: #009fa5;color: white; font-weight: bold;"data-bs-toggle="modal" data-bs-target="#modificardatosmodal">
							Modificar paciente <span class="fa fa-plus-circle"></span>
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
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Agrega nuevo paciente</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
						</button>
				</div>
				<div class="modal-body">
					<form id="frmnuevo" autocomplete="off">
						<label>Nombre</label>
						<input type="text" class="form-control input-sm" id="Nombres" name="Nombres" required >
						<label>Cedula</label>
						<input type="text" class="form-control input-sm" id="Cedula" name="Cedula" required>
				<br><br>
				<button type="submit" name="submit" id="btnAgregarnuevo" style="background-color: #009fa5;color: white; font-weight: bold;" class="btn btn-primary submitBtn">Agregar</button>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
					
				</div>
			</div>
		</div>
	</div>

	<div class="modal" id="modificardatosmodal" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Editar paciente</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
						</button>
				</div>
				<div class="modal-body">
					<form id="frmedit">
					<label>Cedula Actual:</label>
					<input type="text" class="form-control input-sm" id="CedulaA" name="CedulaA" required>
					<label>Nuevo numero de cedula:</label>
					<input type="text" class="form-control input-sm" id="CedulaAA" name="CedulaAA" required>	
					<label>Nombres:</label>
					<input type="text" class="form-control input-sm" id="NombresAA" name="NombresAA" required >
						
				<br><br>
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
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Asignar Cama</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
						</button>
				</div>
				<div class="modal-body">
					<form id="frmnuevoU">
						<input type="text" hidden="" id="id_Cama" name="id_Cama">
						<label>No. Cama</label>
						<input type="text"  class="form-control input-sm" id="NCama" name="NCama">
						
						<div>
						<label for="CedulaU">Cedula</label>
						<input type="text" autocomplete="off" class="form-control input-sm" id="CedulaU" name="CedulaU" placeholder="Ingresa un numero de cedula">
						<span id="search_result"></span>
						</div>
						<label>Nombres</label>
						<input type="text"  class="form-control input-sm" disabled id="NombreU" name="NombreU">
						
						<label>Estado</label>
						<select type="text" class="form-control input-sm" id="Estado" name="Estado">
						
						<option value="3">Ocupado</option>
						<option value="4">Reservada</option>
						<option value="5">Aislamiento</option>

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

	<div class="modal" id="modalEstado" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Editar</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
						</button>
				</div>
				<div class="modal-body">
					<form id="frmestado">
						<input type="text" hidden="" id="id_Cama1" name="id_Cama1">
						<label>No. Cama</label>
						<input type="text"  class="form-control input-sm" id="NCama1" name="NCama1">
						
						<label>Estado</label>
						<select type="text" class="form-control input-sm" id="Estado1" name="Estado1">
						
						<option value="3">Ocupado</option>
						<option value="4">Reservada</option>
						<option value="5">Aislamiento</option>

						</select>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
					<button type="button" class="btn btn-warning" id="btnEstado">Actualizar</button>
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




<script type="text/javascript"> //GUARDAR Y EDITAR DATOS
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

	$("#frmedit").on('submit', function(e){
    e.preventDefault(); 
	$('#content').html('<div class="loading"><img src="img/loader.gif" alt="loading" /><br/>Un momento, por favor...</div>');
        $.ajax({
            type: 'POST',
            url: 'procesos/editPacientes.php',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function() {
                $('.submitBtn').attr("disabled","disabled");
                $('#frmedit').css("opacity", ".5");
            },
            success: function(data) {
                if(data.status){
					$('#content').fadeIn(1000).html(data);
                    $('#frmedit')[0].reset();
                    $('#tablaDatatable').load('tabla.php');
                    alertify.success("Se agrego con exito :D");
                    return; // Detenemos el código
                
            
        }else{        //En caso de que exista un error lo mostramose
            alertify.error(data.message);
            $('#frmedit')[0].reset();
                    $('#tablaDatatable').load('tabla.php');
            }
                       $('#frmedit').css("opacity","");
                         $(".submitBtn").removeAttr("disabled");
            
        }
        });
    });

		$('#btnActualizar').click(function(){
			datos=$('#frmnuevoU').serialize();

			$.ajax({
				type:"POST",
				data:datos,
				url:"procesos/actualizar.php",
				success:function(data){
					if(data.status){
						$('#tablaDatatable').load('tabla.php');
						alertify.success("Se asigno la cama");							
					}else{
						alertify.error(data.message);
					}
				}
			});
		});
		$('#btnEstado').click(function(){
			datos=$('#frmestado').serialize();

			$.ajax({
				type:"POST",
				data:datos,
				url:"procesos/actualizar2.php",
				success:function(data){
					if(data.status){
						$('#tablaDatatable').load('tabla.php');
						alertify.success("Se edito con exito");							
					}else{
						alertify.error(data.message);
					}
				}
			});
		});

	   
	});
</script>
<script type="text/javascript"> //CARGAR TABLA
	$(document).ready(function(){
		$('#tablaDatatable').load('tabla.php');
	});
</script>

<script type="text/javascript">   //OBTENER DATOS Y ELIMINARLOS
	function agregaFrmActualizar(id_Cama){
		$.ajax({
			type:"POST",
			data:"id_Cama=" + id_Cama,
			url:"procesos/obtenDatos.php",
			success:function(r){
				datos=jQuery.parseJSON(r);
				$('#idCama').val(datos['idCama']);
				$('#NCama').val(datos['N_Cama']);
				$('#Estado').val(datos['Estado']);
			}
		});
	}
	function estadoFrmActualizar(id_Cama1){
		$.ajax({
			type:"POST",
			data:"id_Cama1=" + id_Cama1,
			url:"procesos/obtenDatos1.php",
			success:function(r){
				datos=jQuery.parseJSON(r);
				$('#idCama1').val(datos['idCama']);
				$('#NCama1').val(datos['N_Cama']);
				$('#Estado1').val(datos['Estado']);
			}
		});
	}

	function eliminarDatos(id_Cama){
		alertify.confirm('¿Realmente desea desocupar la cama seleccionada?', function(
		
){ 

			$.ajax({
				type:"POST",
				data:"id_Cama=" + id_Cama,
				url:"procesos/eliminar.php",
				success:function(r){
					if(r==1){
						$('#tablaDatatable').load('tabla.php');
						alertify.success("Eliminado con exito !");
					}else{
						alertify.error("No se pudo eliminar...");
					}
				}
			});

		}
		, function(){

		});
	}
	function inhabilitarDatos(id_Cama){
		alertify.confirm('¿Realmente desea deshabilitar la cama seleccionada?', function(
		
){ 

			$.ajax({
				type:"POST",
				data:"id_Cama=" + id_Cama,
				url:"procesos/inhabilitar.php",
				success:function(r){
					if(r==1){
						$('#tablaDatatable').load('tabla.php');
						alertify.success("Cama deshabilitada !");
					}else{
						alertify.error("No se pudo eliminar...");
					}
				}
			});

		}
		, function(){

		});
	}
</script>

<script> //LLAMAR CEDULA Y NOMBRE
    
	document.getElementById("CedulaA").onchange = function(){alerta()};
    function alerta() {
        // Creando el objeto para hacer el request
        var request = new XMLHttpRequest();
		request.responseType = 'json';
        // Objeto PHP que consultaremos
        request.open("POST", "services2.php");
 
        // Definiendo el listener
        request.onreadystatechange = function() {
            // Revision si fue completada la peticion y si fue exitosa
            if(this.readyState === 4 && this.status === 200) {
                // Ingresando la respuesta obtenida del PHP
                document.getElementById("CedulaAA").value = this.response.CedulaAA;
				document.getElementById("NombresAA").value = this.response.NombresAA;
				
            }
        };
 
        // Recogiendo la data del HTML
        var myForm = document.getElementById("frmedit");
        var formData = new FormData(myForm);
 
        // Enviando la data al PHP
        request.send(formData);
    }
</script>

<script> //LLAMAR CEDULA Y NOMBRE
    
	document.getElementById("CedulaU").onchange = function(){alerto()};
    function alerto() {
        // Creando el objeto para hacer el request
        var request = new XMLHttpRequest();
		request.responseType = 'json';
        // Objeto PHP que consultaremos
        request.open("POST", "services.php");
 
        // Definiendo el listener
        request.onreadystatechange = function() {
            // Revision si fue completada la peticion y si fue exitosa
            if(this.readyState === 4 && this.status === 200) {
                // Ingresando la respuesta obtenida del PHP
                document.getElementById("NombreU").value = this.response.NombreU;
				
            }
        };
 
        // Recogiendo la data del HTML
        var myForm = document.getElementById("frmnuevoU");
        var formData = new FormData(myForm);
 
        // Enviando la data al PHP
        request.send(formData);
    }
</script>
