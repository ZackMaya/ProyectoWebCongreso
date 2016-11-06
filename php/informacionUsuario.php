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
		<title>Congreso de Robótica- Modo Usuario</title>
		
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

		<!--JQuery-->
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  		<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  		<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

		<!--Estilos con CSS-->
		<link rel="stylesheet" href="../css/skel.css" />
		<link rel="stylesheet" href="../css/style.css" />

		<!--Estilos para redes sociales panel lateral-->
		<link href="../css/iconic.css" media="screen" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="../css/redesSociales.css">
		<link rel="stylesheet" href="../css/fonts.css">

		<!--Formulario bootstrap-->
		<link rel="stylesheet" href="../css/bootstrap.css">
		<link rel="stylesheet" href="../css/main.css">

	</head>
	<body id="top">

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
			</div><br><hr>

			<!--Registrado-->		
  					<div class="row" style="margin-top:20px">
   						 <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
      						
      							<form action="" method="get">


						        <fieldset>
						        <center><h2>Información de usuario, Datos y Eventos </h2></center><br><br>
						        <hr>
						        <!--evento-->
									<div class="form-group">
											<div style="background-color: #ffffff">
											<h4 for="nombre">Nombre de Usuario :
											<?php include('conexion.php');
												$email=$_SESSION["usuario_email"];
												$query="SELECT * FROM persona WHERE email='$email'";
												$resultado=$con->query($query);
												while($row=$resultado->fetch_assoc()){
												echo $row['nombre'];}?></h4><br><hr>

											<h4 for="nombre">Correo de Usuario : 
											<?php include('conexion.php');
												$email=$_SESSION["usuario_email"];
												$query="SELECT * FROM persona WHERE email='$email'";
												$resultado=$con->query($query);
												while($row=$resultado->fetch_assoc()){
												echo $row['email'];}?></h4><br><hr>

											<h4 for="nombre">Mayor de edad con :
											<?php include('conexion.php');
												$email=$_SESSION["usuario_email"];
												$query="SELECT * FROM persona WHERE email='$email'";
												$resultado=$con->query($query);
												while($row=$resultado->fetch_assoc()){
												echo $row['edad'];}?> años</h4><br><hr>
											</div>
											
											
											<div style="background-color: skyblue">
											<h4 for="Evento">Evento : 
											<?php include('conexion.php');
												$email=$_SESSION["usuario_email"];
												$query="SELECT * FROM registroxusuario,evento,persona,universidad WHERE registroxusuario.id_evento= evento.id_evento AND registroxusuario.email=persona.email AND persona.email='$email'";
												$resultado=$con->query($query);
												while($row=$resultado->fetch_assoc()){
												echo $row['nombreEvento'];}?> </h4><br><hr>

											<h4 for="Evento">Hora y Fecha : 
											<?php include('conexion.php');
												$email=$_SESSION["usuario_email"];
												$query="SELECT * FROM registroxusuario,evento,persona,universidad WHERE registroxusuario.id_evento= evento.id_evento AND registroxusuario.email=persona.email AND persona.email='$email'";
												$resultado=$con->query($query);
												while($row=$resultado->fetch_assoc()){
												echo $row['horario'];}?> </h4><br><hr>



											<h4 for="Evento">Número de lugar : 
											<?php include('conexion.php');
												$email=$_SESSION["usuario_email"];
												$query="SELECT * FROM registroxusuario,evento,persona,universidad WHERE registroxusuario.id_evento= evento.id_evento AND registroxusuario.email=persona.email AND persona.email='$email'";
												$resultado=$con->query($query);
												while($row=$resultado->fetch_assoc()){
												echo $row['lugar'];}?> </h4><br><hr>

											<h4 for="Evento">Número de Boletos : 
											<?php include('conexion.php');
												$email=$_SESSION["usuario_email"];
												$query="SELECT * FROM registroxusuario,evento,persona,universidad WHERE registroxusuario.id_evento= evento.id_evento AND registroxusuario.email=persona.email AND persona.email='$email'";
												$resultado=$con->query($query);
												while($row=$resultado->fetch_assoc()){
												echo $row['boletos'];}?> </h4><br><hr>

												
											<h4 for="Evento">SEDE : 
											<?php include('conexion.php');
												$email=$_SESSION["usuario_email"];
												$query="SELECT * FROM registroxusuario,evento,persona,universidad WHERE registroxusuario.id_evento= evento.id_evento AND registroxusuario.email=persona.email AND persona.email='$email'";
												$resultado=$con->query($query);
												while($row=$resultado->fetch_assoc()){
												echo $row['nombreUniversidad']; }?> </h4><br><hr>

											<h4 for="Evento">Plantel : 
											<?php include('conexion.php');
												$email=$_SESSION["usuario_email"];
												$query="SELECT * FROM registroxusuario,evento,persona,universidad WHERE registroxusuario.id_evento= evento.id_evento AND registroxusuario.email=persona.email AND persona.email='$email'";
												$resultado=$con->query($query);
												while($row=$resultado->fetch_assoc()){
												echo $row['plantel']; }?> </h4><br><hr>
												</div><br><br><hr>

											

											<!--Boton imprimir-->			
											<input class="button big special" type="button" name="imprimir" value="Imprimir"  onClick="window.print();"/>
											
												
									</div><br><br><br><br>
        						</fieldset>			
      						</form>
    					</div>
  					</div><br><br><br>					

			<!-- Footer -->
			<footer id="footer">
			<ul class="copyright">
						<li>Copyright © 2016 UACM-Programación-Web. Todos los Derechos Reservados.</li>
						<li>Diseño: <a href="http://www.uacm.edu.mx" target="_blank">Ernesto Z. Maya</a></li>
					</ul>
					<!--Fecha-->
						<center><h6>Fecha: <script>
						var f = new Date();
						document.write(f.getDate() + " /" + (f.getMonth() +1) + " /" + f.getFullYear());
						</script></h6></center>
			</footer>
	</body>
</html>