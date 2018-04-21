<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inicio</title>
	<link rel="stylesheet" href="css/Estilo.css">
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
                                           <?php
                                        require_once ('persona.php');
                                        session_start(); 
                                        if(isset($_SESSION['USER'])){
                                        
                                            $persona = $_SESSION['USER'];
                                        echo'<session >'
                                            . '<li> <a>'. $persona->getNombre() .'</a></li>'
                                                . '<ul class="acorh">
                                    <li id="opcion1"><a href="#opcion1">OPCIÓN 1</a>
                                      <ul>
                                    <li><a href="URL11">Opción 1.1</a></li>
                                      <li><a href="URL12">Opción 1.2</a></li>
                                        </ul>
                                        </li>
                                                    
                                        </ul>'
                                         . '</session>';} ?>
                                        
				
                            
   
			</nav>
                 
		</div>
	</header>