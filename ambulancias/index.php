<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php require_once "scripts.php";  ?>
</head>
<body>
<nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand" href="http://localhost/datatable%20-%20copia">
	<img src="img/logo.png" alt="logo" width="150px">
	</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/datatable%20-%20copia/">
			Inicio
		  </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/datatable%20-%20copia/referencias">Referencia</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
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
Reservas de cama					</div>
					<div class="card-body">
						<span class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#agregarnuevosdatosmodal">
							Agregar nuevo <span class="fa fa-plus-circle"></span>
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
					<h5 class="modal-title" id="exampleModalLabel">Agrega nuevos juegos</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
						</button>
				</div>
				<div class="modal-body">
					<form id="frmnuevo">
						<label>Nombre</label>
						<input type="text" class="form-control input-sm" id="Nombres" name="Nombres">
						<label>Cedula</label>
						<input type="text" class="form-control input-sm" id="Cedula" name="Cedula">
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
					<button type="button" id="btnAgregarnuevo" class="btn btn-primary">Agregar nuevo</button>
				</div>
			</div>
		</div>
	</div>


	<!-- Modal -->
	<div class="modal" id="modalEditar" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Actualizar juego</h5>
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

						<option value="Activo">Activo</option>
            			<option value="Inactivo">Inactivo</option>

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
	<div class="modal" id="modalDenegado" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Lo sentimos.</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Esta cama ya esta reservada o usada por un paciente</p>
      </div>
      
      </div>
    </div>
  </div>
</div>

</body>
</html>


<script>


function get_text(event)
{
	var string = event.textContent;

	//fetch api

	fetch("process_data.php", {

		method:"POST",

		body: JSON.stringify({
			search_query : string
		}),

		headers : {
			"Content-type" : "application/json; charset=UTF-8"
		}
	}).then(function(response){

		return response.json();

	}).then(function(responseData){

		document.getElementsByName('search_box')[0].value = string;
	
		document.getElementById('search_result').innerHTML = '';

	});

	

}

function load_data(query)
{
	if(query.length > 2)
	{
		var form_data = new FormData();

		form_data.append('query', query);

		var ajax_request = new XMLHttpRequest();

		ajax_request.open('POST', 'process_data.php');

		ajax_request.send(form_data);

		ajax_request.onreadystatechange = function()
		{
			if(ajax_request.readyState == 4 && ajax_request.status == 200)
			{
				var response = JSON.parse(ajax_request.responseText);

				var html = '<div class="list-group">';

				if(response.length > 0)
				{
					for(var count = 0; count < response.length; count++)
					{
						html += '<a href="#" class="list-group-item list-group-item-action" onclick="get_text(this)">'+response[count].post_title+'</a>';
					}
				}
				else
				{
					html += '<a href="#" class="list-group-item list-group-item-action disabled">No Data Found</a>';
				}

				html += '</div>';

				document.getElementById('search_result').innerHTML = html;
			}
		}
	}
	else
	{
		document.getElementById('search_result').innerHTML = '';
	}
}

/*var ignore_element = document.getElementById('search_box');

document.addEventListener('click', function(event) {
    var check_click = ignore_element.contains(event.target);
    if (!check_click) 
    {
        document.getElementById('search_result').innerHTML = '';
    }
});*/

</script>

<script type="text/javascript"> //GUARDAR Y EDITAR DATOS
	$(document).ready(function(){
		$('#btnAgregarnuevo').click(function(){
			datos=$('#frmnuevo').serialize();

			$.ajax({
				type:"POST",
				data:datos,
				url:"procesos/agregar.php",
				success:function(r){
					if(r==1){
						$('#frmnuevo')[0].reset();
						$('#tablaDatatable').load('tabla.php');
						alertify.success("agregado con exito :D");
					}else{
						alertify.error("Fallo al agregar :(");
					}
				}
			});
		});

		$('#btnActualizar').click(function(){
			datos=$('#frmnuevoU').serialize();

			$.ajax({
				type:"POST",
				data:datos,
				url:"procesos/actualizar.php",
				success:function(r){
					if(r==1){
						$('#tablaDatatable').load('tabla.php');
						alertify.success("Actualizado con exito :D");
						

						
					}else{
						alertify.error("Fallo al actualizar :(");
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
</script>
<script> //LLAMAR NOMBRE
    document.getElementById("CedulaU").onchange = function(){alerta()};
    function alerta() {
        // Creando el objeto para hacer el request
        var request = new XMLHttpRequest();
 
        // Objeto PHP que consultaremos
        request.open("POST", "services.php");
 
        // Definiendo el listener
        request.onreadystatechange = function() {
            // Revision si fue completada la peticion y si fue exitosa
            if(this.readyState === 4 && this.status === 200) {
                // Ingresando la respuesta obtenida del PHP
                document.getElementById("NombreU").value = this.responseText;
            }
        };
 
        // Recogiendo la data del HTML
        var myForm = document.getElementById("frmnuevoU");
        var formData = new FormData(myForm);
 
        // Enviando la data al PHP
        request.send(formData);
    }
</script>
