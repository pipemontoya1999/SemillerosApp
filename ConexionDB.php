<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ConexionDB
 *
 * @author Montoya
 */
class ConexionDB {
    
    var $conn;
    
    
   
   function conectadb(){
        
        $serverName = "DESKTOP-8PSRS9J\SQLEXPRESS"; //serverName\instanceName
        $connectionInfo = array( "Database"=>"prueba", "UID"=>"conexionsql", "PWD"=>"1234");
        $this->conn = sqlsrv_connect( $serverName, $connectionInfo);

    if( $this->conn ) {
      echo "Conexión establecida.<br />";

     }else{
      echo "No se pudo establecer la Conexión.<br />";
      die( print_r( sqlsrv_errors(), true));
}
        
    }
}

$lol = new ConexionDB();

$lol->conectadb();
