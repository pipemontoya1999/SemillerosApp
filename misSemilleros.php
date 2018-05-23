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
	<title>Semilleros</title>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">

	<script src="librerias/jquery-3.2.1.min.js"></script>
        <script src="js/funciones.js" charset="utf-8"></script>
	<script src="librerias/bootstrap/js/bootstrap.js"></script>
	<script src="librerias/alertifyjs/alertify.js"></script>
        <?php require('php/persona.php');
                           $sObj = $_SESSION['USER'];
                           $persona = unserialize($sObj);
        ?>

</head>
<body>
        <script > var id = <?php echo $persona->getId(); ?>
            
    consultarSemillero(id)</script>
	<div class="container">
            
		<div id="tabla"></div>
	</div>



</body>


    


<script type='text/javascript'>
	$(document).ready(function(){
		$('#tabla').load('componentes/tablaB.php');
	});
</script>



</html>
