
<?php

  session_start(); 
  if(!isset($_SESSION['USER'])){
       header('location:../index.php'); 
  }
  require('persona.php');
   $sObj = $_SESSION['USER'];                     
   $persona = unserialize($sObj);
?>
<?php
try {
 include 'config.php';
        $conn = new PDO(serverInfo, UID, PWD);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$n = (int)$persona->getId();
$g = (int)$_POST['idGrupo'];
$s = (int)$_POST['idSemillero'];



    $sql2="select PG.IdPersona, PG.IdGrupo from personaGrupo PG, grupoSemillero GS where PG.IdPersona = $n and PG.IdGrupo = GS.IdGrupo and GS.IdSemillero = $s";

    $resultado2=$conn->prepare($sql2);
    $resultado2->execute();
    $numero_registro=$resultado2->rowCount();
   


if($numero_registro != 0){
    echo 3;
}else{
  $sql="INSERT INTO personaGrupo(IdPersona,IdGrupo) values($n, $g)";
 $resultado=$conn->prepare($sql);
 echo $resultado->execute();    
    }

 
} catch (Exception $ex) {
    die ("error".$ex->getMessage());
}


