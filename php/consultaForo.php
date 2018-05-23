<?php
               $data = $_POST['id'];
               include  'config.php';
               $conn = new PDO(serverInfo, UID, PWD );
               $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
               $conn->setAttribute(PDO::SQLSRV_ATTR_ENCODING, PDO::SQLSRV_ENCODING_UTF8);
               $sql2="Select f.titulo,f.descripcion, f.fecha, p.Usuario from foro f, persona p where f.IdPersona = p.IdPersona";
               
               $resultado2 = $conn->prepare($sql2);
               $resultado2->execute();
               
               $arrDatos2 = $resultado2->fetchAll(PDO::FETCH_ASSOC);
               $arrayPHP = json_encode($arrDatos2,JSON_UNESCAPED_UNICODE );
               echo $arrayPHP;
               
?>

