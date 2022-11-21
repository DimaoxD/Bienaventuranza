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
Reservas de cama					</div>
					<div class="card-body">
						<span class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#agregarnuevosdatosmodal">
							Agregar paciente <span class="fa fa-plus-circle"></span>
						</span>
						<span class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modificardatosmodal">
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
					<button type="button" class="btn btn-warning" id="btnActualizar">Actualizar</button>
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
