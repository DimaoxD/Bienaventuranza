<?php 
require_once "clases/conexion.php";
$obj= new conectar();
$conexion=$obj->conexion();
$sql="SELECT * FROM codigos_defuncion WHERE estado = '1'";
$result=mysqli_query($conexion,$sql);
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
Registro de defunciones					</div>
					<div class="card-body">
						<span class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#agregarnuevosdatosmodal">
							Crear nuevo registro <span class="fa fa-plus-circle"></span>
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
					<h5 class="modal-title" id="exampleModalLabel">Crear nuevo registro</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
						</button>
				</div>
				<div class="modal-body">
					<form id="frmnuevo" autocomplete="off">
						<label>Nombre del medico:</label>
						<select type="text" class="form-control input-sm" id="Nombres" name="Nombres"  >
						<option value="">Selecciona una opcion</option>
							<option value="1">Camilo Barros</option>
							<option value="2">Pilar Gonzalez</option>
							<option value="3">Camilo Vera</option>
							<option value="4">Dani Espiti</option>
							<option value="5">Andres Lamos</option>
							<option value="6">Moises</option>
						</select>
						<label>Numero del certificado:</label>
						<select type="text" class="form-control input-sm" id="Certificado" name="Certificado"  >
						<option value="">Selecciona una opcion</option>
					<?php	while ($row=mysqli_fetch_array($result)){
						 echo '<option value="'.$row['id'].'">'.$row['certificado'].'</option>';
					}
						?>	
						</select>
						<label>Cedula del paciente:</label>
						<input type="text" class="form-control input-sm" id="Cedula" name="Cedula" >
						<label>Fecha en que se realiza el registo:</label>
						<input type="datetime-local" class="form-control input-sm" id="Fecha" name="Fecha" >
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
					<form id="frmnuevoU">
					<input type="hidden"  id="idDefuncion" name="idDefuncion">
					<label>Nombre del medico:</label>
						<select type="text" class="form-control input-sm" id="NombresU" name="NombresU" required >
						<option value="">Selecciona una opcion</option>
							<option value="1">Camilo Barros</option>
							<option value="2">Pilar Gonzalez</option>
							<option value="3">Camilo Vera</option>
							<option value="4">Dani Espiti</option>
							<option value="5">Andres Lamos</option>
							<option value="6">Moises</option>
						</select>
						<label>Numero del certificado:</label>
						<input type="text" class="form-control input-sm" id="CertificadoU" name="CertificadoU" disabled >
						<label>Cedula del paciente:</label>
						<input type="text" class="form-control input-sm" id="CedulaU" name="CedulaU" disabled>
						<label>Fecha en que se realiza el registo:</label>
					<input type="datetime-local" class="form-control input-sm" id="FechaU" name="FechaU" required>
				<br><br>
					</form>
				</div>
				<div class="modal-footer">
				<button type="button" id="btnActualizar" class="btn btn-primary">Agregar</button>
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

	
		$('#btnActualizar').click(function(){
			datos=$('#frmnuevoU').serialize();

			$.ajax({
				type:"POST",
				data:datos,
				url:"procesos/actualizar.php",
				success:function(data){
					if(data.status){
						$('#frmnuevo')[0].reset();
						$('#tablaDatatable').load('tabla.php');
						alertify.success("Se actualizo correctamente");							
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
	function agregaFrmActualizar(idDefuncion){
		$.ajax({
			type:"POST",
			data:"idDefuncion=" + idDefuncion,
			url:"procesos/obtenDatos.php",
			success:function(r){
				datos=jQuery.parseJSON(r);
				$('#idDefuncion').val(datos['idDefuncion']);
				$('#NombresU').val(datos['Cedula']);
				$('#CertificadoU').val(datos['id']);
				$('#CedulaU').val(datos['Nombres']);
				$('#FechaU').val(datos['Fecha_Defuncion']);
			}
		});
	}


	</script>


