
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
$g = (int)$_POST['idg'];
$s = (int)$_POST['idp'];



    $sql2="delete from personaGrupo where IdPersona=$s and IdGrupo=$g";

    $resultado2=$conn->prepare($sql2);
  echo  $resultado2->execute();

   

 
} catch (Exception $ex) {
    die ("error".$ex->getMessage());
}

