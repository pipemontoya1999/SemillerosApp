<?php
               $data = $_POST['id'];
               include  'config.php';
               $conn = new PDO(serverInfo, UID, PWD );
               $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
               $conn->setAttribute(PDO::SQLSRV_ATTR_ENCODING, PDO::SQLSRV_ENCODING_UTF8);
               $sql2="Select GS.IdGrupo as id, GS.Identificador as identificador, S.Nombre as semillero, D.Nombre as dia, H.HoraInicio, H.HoraFin 
                from semillero S, dia D, horario H, horarioGrupo HG, grupoSemillero GS
                where S.IdSemillero = GS.IdSemillero and GS.IdGrupo = HG.IdGrupo and HG.IdHorario = H.IdHorario
                and H.IdDia = D.IdDia and S.IdSemillero = $data";
               
               $resultado2 = $conn->prepare($sql2);
               $resultado2->execute();
               
               $arrDatos2 = $resultado2->fetchAll(PDO::FETCH_ASSOC);
               $arrayPHP = json_encode($arrDatos2,JSON_UNESCAPED_UNICODE );
               echo $arrayPHP;
               
?>


