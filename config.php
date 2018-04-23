<?php
define('serverInfo','sqlsrv:server = tcp:semilleros.database.windows.net,1433; Database = Semilleros');
define('UID','conexionsql@semilleros');
define('PWD', 'Semillero99');

//define('serverInfo','sqlsrv:Server=DESKTOP-8PSRS9J\\SQLEXPRESS;Database=Semilleros');
//define('UID','conexionsql');
//define('PWD', '1234');

//-----------------------------------------------------------------------------------------------

// SQL Server Extension Sample Code:
//$connectionInfo = array("UID" => "conexionsql@semilleros", "pwd" => "{your_password_here}", "Database" => "Semilleros", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
//$serverName = "tcp:semilleros.database.windows.net,1433";
//$conn = sqlsrv_connect($serverName, $connectionInfo);
