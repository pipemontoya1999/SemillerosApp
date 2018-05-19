

<div class="row">
	<div class="col-sm-12">
	<h2>Lista de Semilleros</h2>
		<table class="table table-hover table-condensed table-bordered">
		<caption>
			<button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
				Agregar propuesta
				<span class="glyphicon glyphicon-plus"></span>
			</button>
		</caption>
			<tr>
				<td>Nombre del semillero</td>
				<td>Inicio</td>
				<td>Fin</td>
				<td>Facultad</td>
				<td>Agregar</td>
				<td>Ver Info</td>
			</tr>
                        
                        <?php
                            
    try{
        include  '../config.php';
        $conn = new PDO(serverInfo, UID, PWD);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT s.Nombre, s.FechaInicio, s.FechaFin, s.Descripcion, f.Nombre as facultad FROM semillero s, facultad f where s.IdFacultad = f.IdFacultad";
        $resultado=$conn->prepare($sql);
        $resultado->execute();

      $arrDatos = $resultado->fetchAll(PDO::FETCH_ASSOC);
           foreach ($arrDatos as $value) {
 
               $dato1= $value['Nombre'];
               $dato2 = $value['Descripcion'];
       
     ?>  

			<tr>
				<td><?php echo $value['Nombre']; ?></td>
				<td><?php echo $value['FechaInicio']; ?></td>
				<td><?php echo $value['FechaFin']; ?></td>
				<td><?php echo $value['facultad']; ?></td>
				<td>
					<button class="btn btn-success glyphicon glyphicon-plus" >
						
					</button>
				</td>
				<td>
                                    <button class="btn btn-warning glyphicon glyphicon-list-alt" data-toggle="modal" data-target="#modalInfo" onclick="InfoSemillero('<?php echo $dato1; ?>','<?php echo $dato2; ?>')"></button>
				</td>
			</tr>
                        
           <?php }  
                                    }
    catch (Exception $e){
    die ("error".$e->getMessage());
   }
                        
                        ?>
                        
		</table>
	</div>
</div>