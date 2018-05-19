<?php
try {
 include '../config.php';
        $conn = new PDO(serverInfo, UID, PWD);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$n = $_POST['nombre'];
$f = (int)$_POST['facultad'];
$c = $_POST['comentario'];

$sql="INSERT INTO propuestaSemillero(Nombre,IdFacultad,Comentario)"
        . "values('$n', $f, '$c')";

 $resultado=$conn->prepare($sql);
      echo  $resultado->execute();   
} catch (Exception $ex) {
    die ("error".$ex->getMessage());
}


