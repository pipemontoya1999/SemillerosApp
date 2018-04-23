<?php
       include 'config.php';
        //$connectionInfo = array( "Database"=>"prueba", "UID"=>"conexionsql", "PWD"=>"1234");
     
  try
{
    $conn = new PDO(serverInfo, UID, PWD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connexion exitosa ';
}
catch (PDOException $e)
{
    die('Connection failed: ' . $e->getMessage());
}

 finally {
    $conn = null;
 }

 

?>