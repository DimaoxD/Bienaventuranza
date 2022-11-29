<!DOCTYPE html>
<html>
<head>
	<title>Bienaventuranza IPS</title>
	<?php require_once "scripts.php";  ?>
	<link href="css/estilos.css" rel="stylesheet">
	<style>
       body {
  background: linear-gradient(-45deg, #e3f2fd, #e6f3fd, #eef7fe, #ccdae4);
  background-size: 400% 400%;
  animation: gradient 15s ease infinite;
  height: 100vh;
}

@keyframes gradient {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
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
			<li><a class="dropdown-item" href="http://localhost/datatable%20-%20copia/contrareferencia">Contrareferencia</a></li> 
			<li><a class="dropdown-item" href="http://localhost/datatable%20-%20copia/solicitud">Imagenologia</a></li> 
			<li><a class="dropdown-item" href="http://localhost/datatable%20-%20copia/phd">PHD</a></li> 
			<li><a class="dropdown-item" href="http://localhost/datatable%20-%20copia/dietas">Dietas</a></li> 
			<li><a class="dropdown-item" href="http://localhost/datatable%20-%20copia/oxigeno">Oxigeno</a></li> 
          </ul>
	</li>
	<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">
            Certificados
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="http://localhost/datatable%20-%20copia/defuncion">Defuncion</a></li>
          </ul>
	</li>
		
		  <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/datatable%20-%20copia/dashboard/">
			Dashboard
		  </a>
        </li>
      </ul>
	  <?php
            include("php/conexion.php");
        ?>    
	 
    </div>
  </div>
</nav>
<p>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="card text-left  mb-3 " >
					<div class="card-header ">
					Solicitud de dietas</div>
					<div class="card-body">
						<span class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#agregarsugerencia">
							Agregar sugerencia <span class="fa fa-plus-circle"></span>
						</span>
						<span class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#versugerencia">
							Ver sugerencias <span class="fa fa-plus-circle"></span>
						</span>
               			<button id="notification-icon" name="button" onclick="myFunction()" class="btn btn-dark dropbtn"><span id="notification-count"><?php if($count>0) { echo $count; } ?></span><img src="img/icono.png"/>Abrir notificaciones</button>
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
				<button type="submit" name="submit" id="btnAgregarnuevo" class="btn btn-primary submitBtn">Agregar</button>
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
				<button type="submit" name="submit" id="btnAgregarnuevo" class="btn btn-primary submitBtn">Agregar</button>
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
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
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
