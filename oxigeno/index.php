<?php 
require_once "clases/conexion.php";
$obj= new conectar();
$conexion=$obj->conexion();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bienaventuranza IPS</title>
	<?php require_once "scripts.php";  ?>
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
				<div class="card text-left border-primary mb-3 " >
					<div class="card-header ">
Solicitud de oxigeno					</div>
					<div class="card-body">
						<span class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#agregarnuevosdatosmodal">
							Crear nueva solicitud <span class="fa fa-plus-circle"></span>
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
					<h5 class="modal-title" id="exampleModalLabel">Crear nueva solicitud</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
						</button>
				</div>
				<div class="modal-body">
				<form enctype="multipart/form-data" action="" method="POST" id="frmnuevo" autocomplete="off">
						<label>Cedula del paciente:</label>
						<input type="text" class="form-control input-sm" id="Cedula" name="Cedula" >
						<label>Nombre del paciente:</label>
						<input type="text" class="form-control input-sm" id="Nombre" name="Nombre" disabled>
						<label for="file">Datos adjuntos</label>
						<input type="file" class="form-control input-sm" id="file" name="file" accept=".pdf" required/><br><br>
				<br><br>
				<button type="submit" name="submit" id="btnAgregarnuevo" class="btn btn-primary submitBtn">Agregar</button>
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
					<h5 class="modal-title" id="exampleModalLabel">Editar orden</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
						</button>
				</div>
				<div class="modal-body">
					<form id="frmnuevoU">
					<input type="hidden"  id="idOxigeno" name="idOxigeno">
					<label>Cedula del paciente:</label>
						<input type="text" class="form-control input-sm" id="CedulaU" name="CedulaU" >
						<label>Nombre del paciente:</label>
						<input type="text" class="form-control input-sm" id="NombreU" name="NombreU" disabled>
						<label for="file">Datos adjuntos</label>
						<input type="file" class="form-control input-sm" id="file" name="file" accept=".pdf" required/><br><br>
				<br><br>
				<button type="submit" name="submit" id="btnModificar" class="btn btn-primary submitBtn">Agregar</button>
					</form>
				</div>
				<div class="modal-footer">
				
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
					
				</div>
			</div>
		</div>
	</div>

	<!-- Modal -->
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
                    $('#tablaDatatable').load('tabla.php');
                    alertify.success("Se agrego con exito :D");
                    return; // Detenemos el código
                
            
        }else{        //En caso de que exista un error lo mostramose
            alertify.error(data.message);
            
            
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
                $('#frmnuevo').css("opacity", ".5");
            },
            success: function(data) {
                if(data.status){
                    $('#frmnuevoU')[0].reset();
                    $('#tablaDatatable').load('tabla.php');
                    alertify.success("Se agrego con exito :D");
                    return; // Detenemos el código
                
            
    	 	   }else{        //En caso de que exista un error lo mostramose
            		alertify.error(data.message);
            
            
            }
                       $('#frmnuevoU').css("opacity","");
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

<script type="text/javascript">   //OBTENER DATOS Y ELIMINARLOS
	function agregaFrmActualizar(idOxigeno){
		$.ajax({
			type:"POST",
			data:"idOxigeno=" + idOxigeno,
			url:"procesos/obtenDatos.php",
			success:function(r){
				datos=jQuery.parseJSON(r);
				$('#idOxigeno').val(datos['idOxigeno']);
				$('#CedulaU').val(datos['Cedula']);
				$('#NombreU').val(datos['Nombres']);
				
				
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
				document.getElementById("Nombre").value = this.response.Nombre;
				
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
	function aprobarSolicitud(idOxigeno){
		alertify.confirm('¿Quieres aprobar la solicitud?', function(
		
){ 

			$.ajax({
				type:"POST",
				data:"idOxigeno=" + idOxigeno,
				url:"procesos/aprobarSolicitud.php",
				success:function(r){
					if(r==1){
						$('#tablaDatatable').load('tabla.php');
						alertify.success("Aprobado con exito !");
					}else{
						alertify.error("No se pudo aprobar...");
					}
				}
			});

		}
		, function(){

		});
	}
	function rechazarSolicitud(idOxigeno){
		alertify.confirm('¿Quieres negar la solicitud?', function(
		
){ 

			$.ajax({
				type:"POST",
				data:"idOxigeno=" + idOxigeno,
				url:"procesos/negarSolicitud.php",
				success:function(r){
					if(r==1){
						$('#tablaDatatable').load('tabla.php');
						alertify.success("Solicitud negada!");
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