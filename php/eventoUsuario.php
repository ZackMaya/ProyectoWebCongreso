<?php
session_start();
if(!isset($_SESSION["usuario_email"])){
	header('location: ../index.php');
}
//echo "inciando sesión para:$_SESSION['usuario_email']";
?>

<!DOCTYPE HTML>
<html>
<head>
		<title>Congreso de Robótica</title>

		<!--Codificación de caracteres especiales-->
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />

		<!--Busqueda en descripciones, ya el sitio subido en servidor-->
		<meta name="congresUACM" content="CONGRESO UACM - Desarrollado por un estudiante de la uacm de ingenieria en software, CONGRESO, CONGRESO UACM, UACM Ingeniería de Software" />
		
		
		<!--Script de javascript-->
		<script src="../js/jquery.min.js"></script>
		<script src="../js/skel.min.js"></script>
		<script src="../js/skel-layers.min.js"></script>
		<script src="../js/init.js"></script>
		<script src="../js/script.js"></script>
		<script src="../js/ajaxscript.js"></script>
		<script src="../js/plugins.js"></script>
		<script src="../js/libs/jquery-1.7.1.min.js"></script>
		<!--<script src="js/scriptMenu.js"></script>-->

		<!--JQuery-->
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  		<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  		<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  		<script src="../js/menu.js"></script>

		<!--Estilos con CSS-->
		<link rel="stylesheet" href="../css/skel.css" />
		<link rel="stylesheet" href="../css/style.css" />

		<!--Estilos para redes sociales panel lateral-->
		<link href="../css/iconic.css" media="screen" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="../css/redesSociales.css">
		<link href="../css/fonts.css" media="screen" rel="stylesheet" type="text/css">


				
</head>
<body id="congreso">
	<!-- Cabecera -->
			<header id="header" class="skel-layers-fixed">
				<h4><a href="http://www.uacm.edu.mx" target="_blank">UACM</a><br></h4>
				<nav id="nav">
					<ul>
					<li><a href="panel.php" class="button special">Mi panel</a></li>
					<li><a href="informacionUsuario.php" class="button special"> <?php include('conexion.php');
							$email=$_SESSION["usuario_email"];
							$query="SELECT * FROM persona WHERE email='$email'";
							$resultado=$con->query($query);
							while($row=$resultado->fetch_assoc()){
							echo $row['nombre'];}?></a></li>
					<li><a href="logout.php" class="button special">Cerrar Sesión</a></li>
					<li><center><a href="eventoUsuario.php" class="button special" data-hash="#Evento">Congreso</a></center></li>
					<li><center><a href="comentarUsuario.php" class="button special" data-hash="#Comentario">Dudas y comentarios</a></center></li>
					<!--<li><center><a href="loginAdmin.php" data-hash="#Administrador" class="button special">Administrador</a></center></li>-->
					</ul>
				</nav>
			</header>

			
			<!-- Banner -->
			<section id="banner">
				<div class="inner">
				    <a ><img src="../images/uacm.png" alt="universidad autonoma de la ciudad de mexico" height="52" width="200" /></a>
					<h2>CONGRESO DE ROBÓTICA</h2>
					<h4>28 Marzo del 2016</h4>
					<h4>8:00am-18:00pm</h4><br><br><br>
					<marquee id="marquesina">
						<h5>UACM: Universidad Autónoma de la Ciudad de México.    El congreso anual de robótica
						se llevará a cabo en el plantel San Lorenzo Tezonco.    Puedes obtener tu pase fácilmente
						al registrarte y seleccionar tu evento favorito</h5>
					</marquee><br><br><br>
				</div>
			</section>


	<!--Redes Sociales-->
			<div class="social">
				<ul>
					<li><a href="http://www.facebook.com/netozack" target="_blank" class="icon-facebook" title="Facebook"></a></li>
					<li><a href="http://www.twitter.com/netozack" target="_blank" class="icon-twitter" title="Twitter"></a></li>
					<li><a href="http://www.googleplus.com/ZackMaya" target="_blank" class="icon-google-plus" title="Google+"></a></li>
					<li><a href="mailto:netozack@hotmail.com" class="icon-mail2" title="Mail"></a></li>
				</ul>
			</div><br>


	<!--<div id="fondo"><img src="./images/fondo1.jpg" width="600" height="500px"></div>-->

	<div id="contenedorEvento">
	<div id="menu">
		<ul>
		<center><h4>Cronograma del Congreso<br><center>de Robótica UACM</center></h4></center>
				<li><input class="sombra" type="button" value="Información" onclick="mostrarinformacion()"> </input></li>
				<li><input class="sombra" type="button" value="Presentación" onclick="mostrarpresentacion()"> </input></li>
				<li><input class="sombra" type="button" value="Proyecto Arduino" onclick="mostrararduino()"></input> </li>
				<li><input class="sombra" type="button" value="Impresiones 3D protesís" onclick="mostrarimpresiones()"></input></li>
				<li><input class="sombra" type="button" value="Break" onclick="mostrarbreak()"></input></li>
				<li><input class="sombra" type="button" value="Inteligencia Artificial" onclick="mostrarinteligencia()"></input></li>
				<li><input class="sombra" type="button" value="Batalla de Robots" onclick="mostrarbatalla()"></input></li>
				<li><input class="sombra" type="button" value="Networking" onclick="mostrarnetworking()"></input></li>
				<li><input class="sombra" type="button" value="Cierre" onclick="mostrarcierre()"></input></li>
		</ul>
	</div>


	<!--Información-->
	<div id='informacion' style='display:block'>
		<div id="contenedor">
			<div id="contenido">
	 			<center><h2>Información acerca del congreso de Robótica de la UACM</h2>

				<h4>El evento tendrá lugar en la Universidad Autonóma de la Ciudad de México <a href="http://www.uacm.edu.mx">(UACM)</a>
				, gracias a la colaboración de las Academias de ingeniería se realizará el primer congreso de Robótica, la sede será el plantel San Lorenzo
				Tezonco cuna de nuestra universidad.<br><br>Costo del Evento:<br>Gratuito<br><br>Estacionamiento limitado a 50 autos.<br><br>
				El único requisito para asistir al congreso es el previo registro, todos los asistentes enseñarán su pase de entrada
				al inicio y se les asignará un gafete de bienvenida y sorpresas especiales.<br>
				Este evento será el:<br><br></h4>
				<h2>Día 28 de marzo de 8:00am hasta las 18:00pm<br>UACM San lorenzo Tezonco<br></h2>
				<h2>¿Como Llegar?</h2>
				<h4>Nuestra casa de estudios se encuentra ubicada en la siguiente ruta...</h4>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3765.293413073414!2d-99.06021688561!3d19.313070149497644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce025ef919d837%3A0x8976a765f69064e3!2sUACM+San+Lorenzo+Tezonco!5e0!3m2!1ses-419!2smx!4v1456536081878" width="600" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
				<br><br>
				<h1>Dudas y comentarios favor de mandar un correo a:
				<a href="mailto:ernesto.maya@uacm.edu.mx" class="icon-mail2" title="Mail"> ernesto.maya@uacm.edu.mx</a></h1></center><hr>	
			</div>
		</div><br><br><br><hr>
	 </div>

	<!--Presentación-->
	 <div id='presentacion' style='display:none;'>
	 	<div id="contenedor">
			<div id="contenido">
			<center><h2>Presentación y abertura del congreso de Robótica.</h2>
			<br>
			<h4>La presentación tendrá lugar en el Agora ubicado al fondo de la Universidad plantel San Lorenzo.<br><br>Hora de Inicio:
			<br>8:00am.<br><br>
			Presentado por el rector de la <a href="http:www.uacm.edu.mx">UACM</a> y los representantes de las Academias de Ingeniería.</h4>
			<br>
				<div id="imagenes">
					<img src="../images/agora2.jpg" title="Agora" width="25%" height="200px">
					<img src="../images/agora.jpg" title="Agora" width="25%" height="200px">
					<img src="../images/agora3.jpg" title="Agora" width="25%" height="200px">
				</div><br><br>
			<h1>Dudas y comentarios favor de mandar un correo a:
			<a href="mailto:ernesto.maya@uacm.edu.mx" class="icon-mail2" title="Mail"> ernesto.maya@uacm.edu.mx</a></h1></center><hr>
			</div>
		</div><br><br><br><hr>
	</div> 


	<!--Arduino-->
	<div id='arduino' style='display:none;'>
		<div id="contenedor">
			<div id="contenido">
				<center><h2>Proyecto arduino presentado por alumnos de la academia de Ingeniería.</h2>
				<br>
				<h4>Hora de Inicio: <br>9:00am<br><br>Lugar:<br>Salón LACECI Edificio B.<br><br>
				Exponentes:<br><br>Presentado por los Alumnos de Ingeniería de Software, Industrial, Eléctronicos:<br>
				Luis David Olivares.<br>Sandra Hecheverria cruz.<br>Martin Montero Lopéz.
				<br><br>En colaboración con los profesores:<br>Diana Aurora.<br>Omar Nieto.</h4>
				<br><h4>Se presentan los alumnos de Ingeniería con proyectos inovadores acerca de modelos de robots para la medición del medio ambiente, "Habrá una demostración en vivo".</h4><br><br>
			
			<h1>Dudas y comentarios favor de mandar un correo a:
			<a href="mailto:ernesto.maya@uacm.edu.mx" class="icon-mail2" title="Mail"> ernesto.maya@uacm.edu.mx</a></h1></center>	<hr>
			</div>
		</div><br><br><br><hr>
	</div>


	<!--Impresión-->
	<div id='impresion' style='display:none;'>
		<div id="contenedor">
			<div id="contenido">
				<center><h2>Impresiones 3D para protesís</h2>
				<h4>Hora de Inicio: <br>10:30am<br><br>Lugar:<br>Salón A-005 Edificio A.<br><br>
				Exponentes:<br><br>Presentado por los Alumnos de Ingeniería de Software, Industrial, Eléctronicos:<br>
				Erick Romero Santa Cruz.<br>Rocio Hernández Mina.<br>Jenifer Alcala Mendez.
				<br><br>En colaboración con los profesores:<br>Jesus Cruz.<br>Adriana Pérez.</h4>
				<br><h4>En la actualidad es más barato y ha dado mejores resultados la impresión de protesís para personas discapacitadas, alumnos de la UACM presentan su proyecto "No solo diseñamos e 
					imprimimos, damos mejor calidad de vida". </h4>
			
			<h1>Dudas y comentarios favor de mandar un correo a:
			<a href="mailto:ernesto.maya@uacm.edu.mx" class="icon-mail2" title="Mail"> ernesto.maya@uacm.edu.mx</a></h1></center>	<hr>
			</div>
		</div><br><br><br><hr>
	</div>


	<!--Break-->
	<div id='break' style='display:none;'>
		<div id="contenedor">
			<div id="contenido">
				<center><h2>Break.</h2>
				<h4>Hora de Inicio: <br>12:00pm<br><br>Lugar:<br>Comedor de la Comunidad Universitaria. Edificio B.
				<br><br>Se les invita a usar el comedor de la universidad para un pequeño refrigerio y estancia de descanso
				entre las actividades del congreso.<br><br>Costo de la comida:<br>$10.00 por persona. </h4>
			
			<h1>Dudas y comentarios favor de mandar un correo a:
			<a href="mailto:ernesto.maya@uacm.edu.mx" class="icon-mail2" title="Mail"> ernesto.maya@uacm.edu.mx</a></h1></center><br><br><br>	<hr>
			</div>
		</div><br><br><br><hr>
	</div>


	<!--Inteligencia Artificial-->
	<div id='inteligencia' style='display:none;'>
		<div id="contenedor">
			<div id="contenido">
				<center><h2>Programación de Inteligencia Artificial</h2>
				<h4>Hora de Inicio: <br>2:00pm<br><br>Lugar:<br>Salón A-005 Edificio A.<br><br>
				Exponentes: <br><br>Presentado por alumnos de Ingeniería de Software:<br>
				Damaris Garcia.<br>Eriberto Gomez.<br>Sandra olivares.<br>Fernanda Carmona.<br>
				<br>En colaboración con los profesores:<br>Adalberto Robles.<br>Vivanco.</h4>
				<br><br><h4>La inteligencia artificial no nos acerca a construir modelos de pensamiento humano, sino a mejoras las capacidades de procesamiento de datos, no hacemos algo perfecto de algo imperfecto
					como el ser humano, se hablará y mostrará modelos de robots humanoides.</h4>
				<h1>Dudas y comentarios favor de mandar un correo a:
			<a href="mailto:ernesto.maya@uacm.edu.mx" class="icon-mail2" title="Mail"> ernesto.maya@uacm.edu.mx</a></h1></center>	<hr>
			</div>
		</div><br><br><br><hr>
	</div>


	<!--Batalla Robots-->
	<div id='batalla' style='display:none;'>	
		<div id="contenedor">
			<div id="contenido">
				<center><h2>Batalla de Robots, The Epic Battle Robots-UACM</h2>
				<h4>Hora de Inicio: <br>3:00pm<br><br>Lugar:<br>Agora<br><br>
				Exponentes: <br><br>Presentado por alumnos de Ingeniería de Software, Eléctronicos e Industrial:<br>
				Porfirio Díaz - Avatar YoRevolucionario<br>Max steel - Avatar Destroyer<br>y muchos más....<br>
				<br>En colaboración con los profesores de todas las academias</h4>
				<br><h4>¿Estas listo para una batalla épica?<br>Comienza la batalla de robots UACM, un encuentro de antología
				donde sólo uno vencerá. Gracias a la colaboración de alumnos de los diferentes colegios de Ingeniería-UACM, se invita al público en general a presenciar una
				demostración entre robots, que estamos seguros que será una experiencia maravillosa.</h4>
			<br><h1>Dudas y comentarios favor de mandar un correo a:
			<a href="mailto:ernesto.maya@uacm.edu.mx" class="icon-mail2" title="Mail"> ernesto.maya@uacm.edu.mx</a></h1></center>	<hr>
			</div>
		</div><br><br><br><hr>
	</div>


	<!--Networking-->
	<div id='networking' style='display:none;'>
		<div id="contenedor">
			<div id="contenido">
				<center><h2>Networking. Los procesos personales en IT</h2>
				<h4>Hora de Inicio:<br>5:00pm<br><br>Lugar:<br>Comedor UACM<br><br>
				La mayoria de las personas en el ámbito de la tecnología de la información necesitan del proceso personales
				como lo es la convivencia con grupos de la misma área, por tal motivo se les invita a todos los invitados a establecer realciones
				funcionales. </h4><br>
			<h1>Dudas y comentarios favor de mandar un correo a:
			<a href="mailto:ernesto.maya@uacm.edu.mx" class="icon-mail2" title="Mail"> ernesto.maya@uacm.edu.mx</a></h1></center>	<hr>
			</div>
		</div><br><br><br><hr>
	</div>



	<!--Cierre y sorpresas-->
	<div id='cierre' style='display:none;'>
		<div id="contenedor">
			<div id="contenido">
				<center><h2>Cierre del congreso, Agradecimientos reconocimientos y Rifa.</h2>
				<h4>Hora de Cierre:<br>6:00pm<br><br>Lugar:<br>Agora<br><br>
				Exponentes:<br>Rector de la UACM, Integrantes de la Academia de Tecnología,
				voluntarios y alumnos expositores<br><br>Como parte del cierre se dará una platica final, donde
				participarán todos los miembros de la Academia de CYT de la UACM.</h4>
				<br>
			
			<h1>Dudas y comentarios favor de mandar un correo a:
			<a href="mailto:ernesto.maya@uacm.edu.mx" class="icon-mail2" title="Mail"> ernesto.maya@uacm.edu.mx</a></h1></center>	<hr>
			</div>
		</div>
	</div>




	

		<!-- Footer -->
	<footer id="footer">
			<ul class="copyright">
				<li>Copyright © 2016 UACM-Programación-Web. Todos los Derechos Reservados.</li>
				<li>Diseño: <a href="mailto:netozack@hotmail.com" target="_blank">Ernesto Z. Maya</a></li>
			</ul>
			<!--Fecha-->
						<center><h6>Fecha: <script>
						var f = new Date();
						document.write(f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear());
						</script></h6></center>
	</footer>

</body>
</html>