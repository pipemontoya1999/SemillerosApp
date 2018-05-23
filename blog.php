<!DOCTYPE html>
<?php
  session_start(); 
  if(!isset($_SESSION['USER'])){
       header('location:index.php'); 
  }
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Blogs</title>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">

	<script src="librerias/jquery-3.2.1.min.js"></script>
        <script src="js/funciones.js" charset="utf-8"></script>
	<script src="librerias/bootstrap/js/bootstrap.js"></script>
	<script src="librerias/alertifyjs/alertify.js"></script>
  
        
</head>
<body>

	<div class="container">
            
	<div class="row">
	<div class="col-sm-12">
	<h2>Foro de discusion</h2>
		<table class="table table-hover table-condensed table-bordered">
		<caption>
                        <button onclick="location.href='index.php'" type="button" class="btn">Volver</button>
			<button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
				Agregar propuesta
				<span class="glyphicon glyphicon-plus"></span>
			</button>
                    
		</caption>
      
		</table>
              <script>consultarForo();</script>
                  <div id="quepex">
                
                    </div>
	</div>
</div>
	</div>

	<!-- Modal para foro -->


<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nueva discusión</h4>
      </div>
      <div class="modal-body">
        	<label>Titulo</label>
        	<input type="text" name="" id="nombre" class="form-control input-sm">


        	<label>Descripcion</label>
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





</body>


    




<?php  require ('php/persona.php');
$sObj = $_SESSION['USER'];                           
      $persona = unserialize($sObj); ?>
<script type='text/javascript'>
    var pers = <?php echo $persona->getID();?>;
    
	$(document).ready(function(){
		$('#guardarnuevo').click(function(){
                    nombre=$('#nombre').val();
                    
                    comentario=$('#comentario').val();

                   agregarForo(nombre,comentario,pers);
                   
                });
	});
        
</script>

</html>
