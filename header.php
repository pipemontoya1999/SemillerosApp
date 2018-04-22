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

	
	<header>
		<div class="wrapp">
			<div class="logo">
				<a href="#"><img src="img/unisabana.png" alt="Pipemontoya"></a>
			</div>
                    
                                
			<nav>
				<ul>
                                
                                        <li><a href="index.php">Inicio</a></li>
					<li><a href="blog.php">Blog</a></li>
					<li><a href="acerca_de.php">Acerca de</a></li>
					<li><a href="contacto.php">Contacto</a></li>
                             
                                </ul>
			</nav>
		</div> 
        

	</header>

	

<session>
    
                       <?php
                           require_once ('persona.php');
                           session_start(); 
                          if(isset($_SESSION['USER'])){
                                        
                           $persona = $_SESSION['USER'];
                        echo '<div class="dropdown">
                        <button onclick="myFunction()" class="dropbtn">'.$persona->getUsuario().'</button>
                        <div id="myDropdown" class="dropdown-content">
                        <a href="borrar.php">cerrar sesión</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                        </div>
                        </div>';             
                           }else{
                               echo '<div class="dropdown">
                        <button onclick="location.href='."'login.php'".'"class="dropbtn">Inicia sesión</button>
                        </div>';
                           }
                                           ?>
 
</session>

			
		