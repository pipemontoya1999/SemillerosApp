<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Semilleros</title>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">

	<script src="librerias/jquery-3.2.1.min.js"></script>
        <script src="js/funciones.js"></script>
	<script src="librerias/bootstrap/js/bootstrap.js"></script>
	<script src="librerias/alertifyjs/alertify.js"></script>
</head>
<body>

	<div class="container">
		<div id="tabla"></div>
	</div>

	<!-- Modal para propuestas -->


<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Propuesta Semillero</h4>
      </div>
      <div class="modal-body">
        	<label>Nombre Semillero</label>
        	<input type="text" name="" id="nombre" class="form-control input-sm">
        	<label>Facultad</label>
                <select name="" id="facultad" class="form-control">
                    <option value="1">Ingeniería</option> 
                    <option value="2">Derecho y Ciencias Políticas</option>
                    <option value="3">Comunicación</option>
                    <option value="4">Enfermería y Rehabilitación</option> 
                    <option value="5">Medicina</option> 
                    <option value="6">Psicología</option>  
                </select>
        	<label>Comentarios</label>
        	 <textarea class="form-control" rows="4" id="comentario"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo">
        Agregar
        </button>
       
      </div>
    </div>
  </div>
</div>

<!-- Modal para información de semilleros-->

<div class="modal fade" id="modalInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Información</h4>
      </div>
      <div class="modal-body">
        	<label>Nombre</label>
                <input type="text" name="" id="nombreu" class="form-control input-sm" disabled>
        	<label>Descripción</label>
                <textarea class="form-control" rows="4" id="comentariou" disabled></textarea>
      </div>
      <div class="modal-footer">
       
        
      </div>
    </div>
  </div>
</div>

</body>
</html>

<script type='text/javascript'>
	$(document).ready(function(){
		$('#tabla').load('componentes/tabla.php');
	});
</script>
<script type='text/javascript'>
	$(document).ready(function(){
		$('#guardarnuevo').click(function(){
                    nombre=$('#nombre').val();
                    facultad=$('#facultad').val();
                    comentario=$('#comentario').val();

                   agregarPropuesta(nombre,facultad,comentario);
                   
                });
	});
        
</script>

