<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <title>Login</title>
</head>
<body>
    <div class="login__container">
       <div class="login__top">
          <img  class="login__img" src="img/unisabana.png" alt="">
          <h2 class="login__title">Semi <span>Sabana</span></h2>
       </div>
        
        <form method="POST" action="login.php" class="login__form">
            <input type="text" name="user" placeholder="&#128100; usuario" required autofocus>
            <input type="password" name="password" placeholder="&#x1F512; contraseña" required>
            <input class="btn__submit" type="submit" name="entrar" value="ENTRAR">
            <a class="form__recover" href="">Olvidaste la contraseña?</a>
            <?php
            if(isset($_POST['entrar'])){
                $user = (string)$_POST['user'];
                $password = (string)$_POST['password'];
                $consulta = "SELECT usuario, contrasena FROM persona";

                include "ConexionDB.php";
                $ejecutar = sqlsrv_query($conn,$consulta);
                
                while($fila = sqlsrv_fetch_array($ejecutar)){
                    $usuario = (string)$fila['usuario'];
                    $pass = (string)$fila['contrasena'];

                        if($pass == $password && $usuario == $user){
                        echo '<a class="form__good">Sesion Iniciada</a>';
                    }
                    else{echo '<a class="form__bad">Sesion Iniciada</a>';}
                       
                }


                        
       
            }
             
                    ?>
            
        </form>
    </div>
</body>
</html>