<?php
session_start();
if(isset($_SESSION["usuario_email"])){
	header('location: ./php/panel.php');
}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Congreso de Robótica UACM</title>
		<!--Codificación de caracteres especiales-->
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />

		<!--Busqueda en descripciones, ya el sitio subido en servidor-->
		<meta name="congresUACM" content="CONGRESO UACM - Desarrollado por un estudiante de la uacm de ingenieria en software, CONGRESO, CONGRESO UACM, UACM Ingeniería de Software" />
		
		
		<!--Script de javascript-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<script src="js/script.js"></script>
		<script src="js/ajaxscript.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/libs/jquery-1.7.1.min.js"></script>

		<!--JQuery-->
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  		<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  		<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

		<!--Estilos con CSS-->
		<link rel="stylesheet" href="css/skel.css" />
		<link rel="stylesheet" href="css/style.css" />

		<!--Estilos para redes sociales panel lateral-->
		<link href="css/iconic.css" media="screen" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="css/redesSociales.css">
		<link rel="stylesheet" href="css/fonts.css">

	</head>
	<body id="top">

		<!-- Cabecera -->
			<header id="header" class="skel-layers-fixed">
				<h1><a href="http://www.uacm.edu.mx" target="_blank">UACM</a><br></h1>
				<nav id="nav">
					<ul>
					<li><a href="index.php">Inicio</a></li>
					<li><a href="./php/formulario.php" class="button special">Iniciar sesión</a></li>
					<li><center><a href="./php/evento.php" class="button special" data-hash="#Evento">Congreso</a></center></li>
					<li><center><a href="./php/comentar.php" class="button special" data-hash="#Comentario">Dudas y comentarios</a></center></li>
					<li><center><a href="./php/loginAdmin.php" data-hash="#Administrador" class="button special">Administrador</a></center></li>
					</ul>
				</nav>
			</header>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
				    <a ><img src="images/uacm.png" alt="universidad autonoma de la ciudad de mexico" height="52" width="200" /></a>
					<h2>CONGRESO DE ROBÓTICA</h2>
					<h4>28 Marzo del 2016</h4>
					<h4>8:00am-18:00pm</h4>
					<ul class="actions">
						<li><a href="./php/formulario.php" class="button big special">INICIAR SESION</a>
						<a href="./php/registrousuario.php" class="button big alt">REGISTRARSE</a></li>
					</ul><br><br><br>
					<marquee id="marquesina">
						<h5>UACM: Universidad Autónoma de la Ciudad de México.    El congreso anual de robótica
						se llevará a cabo en el plantel San Lorenzo Tezonco.    Puedes obtener tu pase fácilmente
						al registrarte y seleccionar tu evento favorito</h5>
					</marquee><br>

				</div>
			</section><br><br><br>

						


			<!--Redes Sociales-->
			<div class="social">
				<ul>
					<li><a href="http://www.facebook.com/netozack" target="_blank" class="icon-facebook" title="Facebook"></a></li>
					<li><a href="http://www.twitter.com/netozack" target="_blank" class="icon-twitter" title="Twitter"></a></li>
					<li><a href="http://www.googleplus.com/ZackMaya" target="_blank" class="icon-google-plus" title="Google+"></a></li>
					<li><a href="mailto:netozack@hotmail.com" class="icon-mail2" title="Mail"></a></li>
				</ul>
			</div><br>
		
		<!-- 1 -->
		<center>
			<section id="seccion">
				<header class="major">
					<h2>CONGRESO DE ROBÓTICA</h2>
					<h2>¿Sabias que en la universidad UACM se realizará el congreso anual de Robótica 2016?</h2>
					<h1>Se mostrarán avances tecnológicos de nuestra casa de estudios y demostraciones en vivo</h1>
				</header>
			</section><hr>

			<script>
  				$(function() {
   				$( "#accordion" ).accordion();
  				});
  			</script>

		<!-- 2 -->
			<div id="accordion">
 		 			<h3>Proyectos con Arduino</h3>
  				<div>
    				<div class="redondo"><img src="./images/arduino.png" width="350px" height="120px"><br></div>
					<br><h4>Se presentan los alumnos de Ingeniería con proyectos inovadores acerca de modelos de robots para la medición del medio ambiente, "Habrá una demostración en vivo".</h4>
  				</div>


  					<h3>Impresiones 3d para protesís</h3>
  				<div>
					<div class="redondo"><img src="./images/protesis.jpg" wwidth="350px" height="120px"><br></div>
					<br><h4>En la actualidad es más barato y ha dado mejores resultados la impresión de protesís para personas discapacitadas, alumnos de la UACM presentan su proyecto "No solo diseñamos e 
					imprimimos, damos mejor calidad de vida". </h4>
  				</div>

  					 <h3>Programación en Inteligencia artificial</h3>
 				 <div>
					<div class="redondo"><img src="./images/artificial.jpg" width="350px" height="120px"><br></div>
					<br><h4>La inteligencia artificial no nos acerca a construir modelos de pensamiento humano, sino a mejoras las capacidades de procesamiento de datos, no hacemos algo perfecto de algo imperfecto
					como el ser humano, se hablará y mostrará modelos de robots humanoides.</h4>

  				</div>

  					 <h3>Batalla uacemita de Robots</h3>
 				 <div>
					<div class="redondo"><img src="./images/batalla.jpg" width="350px" height="120px"><br></div>
					<br><h4>¿Estas listo para una batalla épica?<br>Comienza la batalla de robots UACM, un encuentro de antología
						donde sólo uno vencerá. Gracias a la colaboración de alumnos de los diferentes colegios de Ingeniería-UACM, se invita al público en general a presenciar una
						demostración entre robots, que estamos seguros que será una experiencia maravillosa.</h4>

  				</div>
  			</div><br><br><hr>

		
		<!-- 3 -->

			<div class="container1"><br>
					<h2>¿Que es un CONGRESO?</h2>
					<h4>Un congreso es una reunión o conferencia, generalmente periódica, donde los miembros de un cuerpo u organismo se reúnen para debatir cuestiones de diversa índole, aunque generalmente con fines políticos, asociativos, divulgativos o de investigación...</h4>
					<a href="https://es.wikipedia.org/wiki/Congreso" class="button alt">Leer Más...</a><br><br>
			</div><br><br>

				

		<!-- 4 -->	

			<div id="seccionFinal">
				<p>La Universidad Autónoma de la Ciudad de México hace el honor de invitarte al Congreso Anual de Robótica presentado en esta ocación en el 
				plantel San Lorenzo tezonco, con el fin de alcanzar la excelencia de sus alumnos pone a la disposición del público en general la entrada a un 
				día lleno de eventos de robótica, en los cuales se mostrarán avances tecnólogicos y de gran interés no sólo para quienes gustan de esta área de la tecnología sino para aquellos que buscan una forma de inovación y de emprendimiento.</p>
				<br>
			</div>
			
	
			
		<!-- Footer -->
			<footer id="footer">
			<ul class="copyright">
						<li>Copyright © 2016 UACM-Programación-Web. Todos los Derechos Reservados.</li>
						<li>Diseño: <a href="mailto:netozack@hotmail.com" target="_blank">Ernesto Z. Maya</a></li>
					</ul>
					<!--Fecha-->
						<h6>Fecha: <script>
						var f = new Date();
						document.write(f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear());
						</script></h6>
			</footer>
	</body>
</html>