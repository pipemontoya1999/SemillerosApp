
<?php
        $serverName = "DESKTOP-8PSRS9J\SQLEXPRESS"; //serverName\instanceName
        $connectionInfo = array( "Database"=>"prueba", "UID"=>"conexionsql", "PWD"=>"1234");
        $conn = sqlsrv_connect( $serverName, $connectionInfo);

    if( $conn ) {
      echo "Conexión establecida.<br />";
      
               

     }else{
      echo "No se pudo establecer la Conexión.<br />";
      die( print_r( sqlsrv_errors(), true));
    }
?>

