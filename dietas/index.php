<!DOCTYPE html>
<html>
<head>
	<title>Bienaventuranza IPS</title>
	<?php require_once "scripts.php";  ?>
	<?php
            include("php/conexion.php");
        ?>    
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="plugins/animate.css">
  	<link rel="stylesheet" href="plugins/slick/slick.css">
 	 <link rel="stylesheet" href="plugins/slick/slick-theme.css">
	  <link rel="icon" type="image/jpg" href="../extras/images/Favicon.jpg"/>
	<link href="css/estilos.css" rel="stylesheet">
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
			background-color:#e9ecef;
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
				<div class="card text-left  mb-3 " >
					<div class="card-header ">
					Solicitud de dietas</div>
					<div class="card-body">
						<span class="btn btn-dark" style="background-color: #009fa5;color: white; font-weight: bold;" data-bs-toggle="modal" data-bs-target="#agregarsugerencia">
							Agregar sugerencia <span class="fa fa-plus-circle"></span>
						</span>
						<span class="btn btn-dark" style="background-color: #009fa5;color: white; font-weight: bold;" data-bs-toggle="modal" data-bs-target="#versugerencia">
							Ver sugerencias <span class="fa fa-plus-circle"></span>
						</span>
               			<button id="notification-icon" name="button" onclick="myFunction()" style="background-color: #009fa5;color: white; font-weight: bold;" class="btn btn-dark dropbtn"><span id="notification-count"><?php if($count>0) { echo $count; } ?></span><img src="img/icono.png"/>Abrir notificaciones</button>
               			<div id="notification-latest">
						</div>
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
					<h5 class="modal-title" id="exampleModalLabel">Asignar dieta</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
						</button>
				</div>
				<div class="modal-body">
					<form id="frmnuevo" autocomplete="off">
					<input type="text" hidden="" id="id_Cama" name="id_Cama">
						<label>Nombre:</label>
						<input type="text" class="form-control input-sm" id="Nombres" name="Nombres" readonly >
						<label>Cedula:</label>
						<input type="text" class="form-control input-sm" id="Cedula" name="Cedula" readonly>
						<label>Numero de cama:</label>
						<input type="text" class="form-control input-sm" id="NCama" name="NCama" readonly>
						<hr>
						<label>Tipo de dieta:</label>
						<select class="form-select"  id="TDieta" name="TDieta" required>
						<option>Seleccione una opcion</option>
						<option value="1">NORMAL</option>
						<option value="2">BLANDA</option>
						<option value="3">SEMIBLANDA</option>
						<option value="4">TODO PURE</option>
						<option value="5">LIQUIDA TOTAL</option>
						<option value="6">LIQUIDA CLARA</option>
						<option value="7">HIPERCALORICA HIPERPROTEICA</option>
						<option value="8">HIPOGRASA</option>
						<option value="9">RENAL</option>
						<option value="10">RENAL DIALISIS</option>
						<option value="11">HIPLOGUCIDA</option>
						<option value="12">HIPOSODICA</option>
						<option value="13">NADA VIA ORAL</option>
						<option value="14">SIN DIETA</option>
						</select>
						<hr>
						<label>Observaciones</label>
						<input type="text" class="form-control input-sm" id="Observaciones" name="Observaciones">
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

	<div class="modal" id="agregarsugerencia" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Agregar sugerencia</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
						</button>
				</div>
				<div class="modal-body">
					<form id="frmedit">
					<label>Cama:</label>
					<input type="text" class="form-control input-sm" id="CamaS" name="CamaS" required autocomplete="off">
					<ul class="lista" id="lista"></ul>
					<label>Cedula:</label>
					<input type="text" class="form-control input-sm" id="CedulaS" name="CedulaS" readonly>	
					<label>Nombres:</label>
					<input type="text" class="form-control input-sm" id="NombresS" name="NombresS" disabled >
					<hr>
					<label>Dieta:</label>
					<label>Tipo de dieta:</label>
						<select class="form-select"  id="TDietaS" name="TDietaS" required>
						<option>Seleccione una opcion</option>
						<option value="1">Normal</option>
						<option value="2">Blanda</option>
						<option value="3">Semiblanda</option>
						<option value="4">Todo pure</option>
						<option value="5">Liquida total</option>
						<option value="6">Liquida clara</option>
						<option value="7">Hipercalorica hiperproteica</option>
						<option value="8">Hipograsa</option>
						<option value="9">Renal</option>
						<option value="10">Renal Dialisis</option>
						<option value="11">Hipoglucida</option>
						<option value="12">Hiposodica</option>
						<option value="13">Nada via oral</option>
						<option value="14">Sin dieta</option>
						</select>
					<hr>
					<label>Fecha de solicitud</label>
					<input type="date" class="form-control input-sm" id="FechaS" name="FechaS" required>
					<label>Observaciones</label>
					<input type="text" class="form-control input-sm" id="Observaciones" name="Observaciones">
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
<!--Modal-->
<div class="modal" id="versugerencia" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-fullscreen">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Ver sugerencia</h5>
					<button type="button" class="btn-close" style="background-color: #009fa5;color: white; font-weight: bold;" data-bs-dismiss="modal" aria-label="Close">
						</button>
				</div>
				<div class="modal-body">
				<div id="tablaDatatable2"></div>
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

</body>
</html>




<script type="text/javascript"> //GUARDAR Y EDITAR DATOS
	$(document).ready(function(e) {
    $("#frmnuevo").on('submit', function(e){
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

	$("#frmedit").on('submit', function(e){
    e.preventDefault(); 
	$('#content').html('<div class="loading"><img src="img/loader.gif" alt="loading" /><br/>Un momento, por favor...</div>');
        $.ajax({
            type: 'POST',
            url: 'procesos/observaciones.php',
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
	});
</script>
<script type="text/javascript"> //CARGAR TABLA
	$(document).ready(function(){
		$('#tablaDatatable').load('tabla.php');
	});
</script>
<script type="text/javascript"> //CARGAR TABLA
	$(document).ready(function(){
		$('#tablaDatatable2').load('tabla2.php');
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
				$('#id_Cama').val(datos['idCama']);
				$('#Nombres').val(datos['Nombres']);
				$('#NCama').val(datos['N_Cama']);
				$('#TDieta').val(datos['Tipo_Dieta']);
				$('#Observaciones').val(datos['Observaciones']);
				if((datos['Cedula']==2) || (datos['Cedula']==1)){
					$Cedula1 = "";
					$('#Cedula').val($Cedula1);
				}else{
					$('#Cedula').val(datos['Cedula']);
				}
			}
		});
	}
</script>

<script> //LLAMAR CEDULA Y NOMBRE
    
	document.getElementById("CamaS").onchange = function(){alerta()};
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
                document.getElementById("CedulaS").value = this.response.CedulasS;
				document.getElementById("NombresS").value = this.response.NombresS;
				document.getElementById("TDietaS").value = this.response.TDietaS;
				
            }
        };
 
        // Recogiendo la data del HTML
        var myForm = document.getElementById("frmedit");
        var formData = new FormData(myForm);
 
        // Enviando la data al PHP
        request.send(formData);
    }
</script>
<script type="text/javascript">
      function myFunction() {
        $.ajax({
          url: "php/notificaciones.php",
          type: "POST",
          processData:false,
          success: function(data){
            $("#notification-count").remove();     
            $("#notification-latest").show();
			$("#notification-latest").html(data);
          },
          error: function(){}           
        });
      }
                                 
      $(document).ready(function() {
        $('body').click(function(e){
          if ( e.target.id != 'notification-icon'){
            $("#notification-latest").hide();
          }
        });
      });                                     
    </script>
