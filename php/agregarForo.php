<?php
try {
 include 'config.php';
        $conn = new PDO(serverInfo, UID, PWD);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$n = $_POST['nombre'];
$f = (int)$_POST['id'];
$c = $_POST['comentario'];

$sql="INSERT INTO foro(descripcion,IdPersona,fecha,titulo)"
        . "values('$c', $f, getdate() ,'$n')";

 $resultado=$conn->prepare($sql);
      echo  $resultado->execute();   
} catch (Exception $ex) {
    die ("error".$ex->getMessage());
}
