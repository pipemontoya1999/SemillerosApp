
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
$f = (int)$_POST['idSemillero'];



    $sql2="select* from personaSemillero where IdPersona = $n and IdSemillero = $f";

    $resultado2=$conn->prepare($sql2);
    $resultado2->execute();
    $numero_registro=$resultado2->rowCount();
   


if($numero_registro != 0){
    echo 3;
}else{
  $sql="INSERT INTO personaSemillero(IdPersona,IdSemillero)"
        . "values($n, $f)";
 $resultado=$conn->prepare($sql);
 echo $resultado->execute();    
    }

 
} catch (Exception $ex) {
    die ("error".$ex->getMessage());
}


