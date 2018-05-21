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
				<th>Nombre del semillero</th>
				<th>Inicio</th>
				<th>Fin</th>
				<th>Facultad</th>
				<th>Ver Grupos</th>
				<th>Ver Info</th>
			</tr>
                        
                        <?php
                            
    try{
        include  '../php/config.php';
        $conn = new PDO(serverInfo, UID, PWD);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT s.IdSemillero, s.Nombre, s.FechaInicio, s.FechaFin, s.Descripcion, f.Nombre as facultad FROM semillero s, facultad f where s.IdFacultad = f.IdFacultad";
        $resultado=$conn->prepare($sql);
        $resultado->execute();
        


      $arrDatos = $resultado->fetchAll(PDO::FETCH_ASSOC);
           foreach ($arrDatos as $value) {
 
               $dato1= $value['Nombre'];
               $dato2 = $value['Descripcion'];
               $dato3 = (int)$value['IdSemillero'];


     ?>  


			<tr>
				<td><?php echo $value['Nombre']; ?></td>
				<td><?php echo $value['FechaInicio']; ?></td>
				<td><?php echo $value ['FechaFin']; ?></td>
				<td><?php echo $value['facultad']; ?></td>
				<td>
                                    <button class="btn btn-success glyphicon glyphicon-tag" data-toggle="modal" data-target="#modalGrupo" onclick="grupoSemillero(<?php echo $dato3 ?>)"></button>
				</td>
				<td>
                                    <button class="btn btn-warning glyphicon glyphicon-list" data-toggle="modal" data-target="#modalInfo" onclick="InfoSemillero('<?php echo $dato1; ?>','<?php echo $dato2; ?>')"></button>
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