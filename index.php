
<!DOCTYPE html>
<?php include ('header.php'); ?>

	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Bienvenido!</h1>
			</div>

			<div class="articulo">
				<?php if (!isset($_SESSION['USER'])){  ?>
					<p>Esta pagina tiene como fin facilitar la consulta e inscripcion de los semilleros 
                                            disponibles en toda la universidad para los estudiantes y profesores en la Universidad
                                            de la Sabana.</p>
					<br/>
                                        
                                        <p>Para comenzar a hacer uso de las funcionalidades en la plataforma
                                            inicia una sesión con tu cuenta institucional: </p> <p> <a href="login.php">Inicia sesion</a> </p>
					
                                <?php }else{
                                        echo '<p>Bienvenido.<br/> Para comenzar dale un vistazo a los semilleros disponibles
                                            desde la pestaña superior.
                                            Recuerda únicamente inscribir los semilleros acorde a tus horas libres en tu horario.
                                         </p>
					<br/>
                                        
                                        <p>Estas registrado como: '.$persona->getNombre().' '.$persona->getApellido().'</p>';
                                }?>
                        
                        
                        
                        </div>

			<?php include ('sidebar.php'); ?>
		</div>
	</section>
	<footer>
		<div class="wrapp">
			<p>semilleros.sabana.edu.co</p>
		</div>
	</footer>
</body>
</html>