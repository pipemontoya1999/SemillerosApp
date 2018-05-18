<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inicio</title>
	<link rel="stylesheet" href="css/Estilo.css">
        
                <script type="text/javascript">
                function myFunction() {
                document.getElementById("myDropdown").classList.toggle("show");
                }

// Close the dropdown menu if the user clicks outside of it
                window.onclick = function(event) {
                if (!event.target.matches('.dropbtn')) {

                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
                }
               }
              }
             }
            </script>
</head>
<body>

	


	


    
                       <?php
                           require_once ('persona.php');
                           session_start(); 
                          if(isset($_SESSION['USER'])){
                                        
                           $persona = $_SESSION['USER'];
                        echo '	<header>
		<div class="wrapp">
			<div class="logo">
				 <img  class="login__img" src="img/unisabana.png" alt="">
                                  <h2 class="login__title">Semi <span>Sabana</span></h2>
			</div>
                    
                                
			<nav>
				<ul>
                                
                                        <li><a href="index.php">Inicio</a></li>
					<li><a href="blog.php">Blog</a></li>
					<li><a href="semilleros.php">Semilleros</a></li>
					<li><a href="contacto.php">Contacto</a></li>
                             
                                </ul>
			</nav>
		</div> 
        

	</header>
                            <session>
                            <div class="dropdown">
                        <button onclick="myFunction()" class="dropbtn">'.$persona->getUsuario().'</button>
                        <div id="myDropdown" class="dropdown-content">
                        <a href="borrar.php">cerrar sesión</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                        </div>
                        </div>
                        </session>';             
                           }else{
                               echo '	<header>
		<div class="wrapp">
			<div class="logo">
				 <img  class="login__img" src="img/unisabana.png" alt="">
                                  <h2 class="login__title">Semi <span>Sabana</span></h2>
			</div>
                    
                                
			<nav>
				<ul>
                                
                                        <li><a href="index.php">Inicio</a></li>
					<li><a href="semilleros.php">Semilleros</a></li>
					<li><a href="contacto.php">Contacto</a></li>
                             
                                </ul>
			</nav>
		 </div> 
        

	            </header>
                                   <session>
                                   <div class="dropdown">
                        <button onclick="location.href='."'login.php'".'"class="dropbtn">Inicia sesión</button>
                        </div>
                        </session>';
                           }
                                           ?>
 

			
		