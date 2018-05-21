<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
    <link rel="stylesheet" href="css/formulario.css">
    <title>Login</title>
</head>
<body>
    

    
    <?php
    session_start();
       if(!isset($_SESSION['USER'])){
    require ("php/persona.php");
    $Estado = TRUE;
    if(isset($_POST['entrar'])){
        
    include 'php/config.php';
    try{
        $conn = new PDO(serverInfo, UID, PWD);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT* FROM persona WHERE usuario= :user AND contrasena= :password";
        $resultado=$conn->prepare($sql);
        $user= htmlentities(addslashes($_POST['user']));
        $pass= htmlentities(addslashes($_POST['password']));
        $resultado->bindValue(":user", $user);
        $resultado->bindValue(":password", $pass);
        $resultado->execute();
        $numero_registro=$resultado->rowCount();
    
      if ($numero_registro != 0){
          $arrDatos = $resultado->fetchAll(PDO::FETCH_ASSOC);
           foreach ($arrDatos as $value) {
    $cargo = $value['IdCargo'];
    $nombre = $value['Nombre'];
    $apellido = $value['Apellido'];
    $idPersona = $value['IdPersona'];
    }
    if($cargo == 1){
        $cargo = "Estudiante";
    }
    if($cargo == 2){
        $cargo = "Profesor";
    }
    if($cargo == 3){
        $cargo = "administrador";
    }
          
          $persona = new persona($idPersona, $nombre, $apellido, $_POST['user'], $cargo);
          $persona = serialize($persona);
        session_start();
        $_SESSION['USER']= $persona;
        $Estado=TRUE;
        
        header('location:index.php');
        
        }else{$Estado=false;}
      }
    catch (Exception $e){
    die ("error".$e->getMessage());
   }
 }
?>
    <div class="login__container">
       <div class="login__top">
          <img  class="login__img" src="img/unisabana.png" alt="">
          <h2 class="login__title">Semi <span>Sabana</span></h2>
       </div>
        
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?> " class="login__form">
            <input type="email" name="user" placeholder="&#128100; usuario" required autofocus>
            <input type="password" name="password" placeholder="&#x1F512; contraseña" required>
            <input class="btn__submit" type="submit" name="entrar" value="ENTRAR">
            <a class="form__recover" href="">Olvidaste la contraseña?</a><br>
            <?php
            if (!$Estado){
                echo '<a class="form__bad">Usuario o contraseña incorrectos</a>';
              }
            ?>

        </form>
    </div>
       <?php }else{
            header('location:index.php');  
       }?>
</body>
</html>