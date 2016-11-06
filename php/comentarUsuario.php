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
		<title>Congreso de Robótica UACM</title>
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


	<div class="container">
  		<div class="row" style="margin-top:20px">
    		<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
      			<form action = "comentarioUsuario.php" method = "post">
      				<input type="hidden" name="submitted" value="true">
        				<fieldset>
         				<h2>Dudas y Comentarios</h2>
  						<br><br>
  						<hr>

  						<!--Nombre-->
  						<div class="form-group">
						<label for="nombre">Nombre de Usuario : </label>
											<label>
											<?php include('conexion.php');
												$email=$_SESSION["usuario_email"];
												$query="SELECT * FROM persona WHERE email='$email'";
												$resultado=$con->query($query);
												while($row=$resultado->fetch_assoc()){
												echo $row['nombre'];}?></label><br><hr>

											<label for="nombre">Correo de Usuario : </label>
											<label>
											<?php include('conexion.php');
												$email=$_SESSION["usuario_email"];
												$query="SELECT * FROM persona WHERE email='$email'";
												$resultado=$con->query($query);
												while($row=$resultado->fetch_assoc()){
												echo $row['email'];}?></label><br><hr>
						</div>

						<!--Asunto-->
						<div class="form-group">
							<label for="asunto">Asunto</label>
							<input class="form-control" name="asunto" type="text" required="required" id="asunto" placeholder="Asunto" tabindex="6" title="Asunto">
						</div>

						<!--comentario-->
						<div class="form-group">
								<label for="comentarios">Comentario</label>
								<textarea cols="40" rows="5" class="form-control" name="comentarios"  required="required" id="comentarios" placeholder="Comentarios" tabindex="6" title="Comentarios"></textarea>
						</div>

						<!--evento-->
						<div class="form-group">
								<b><em><p>(1) Proyecto Arduino.</p>
								<p>(2) Impresiones 3d para prótesis.</p>
								<p>(3) Inteligencia Artificial.</p>
								<p>(4) Batalla de robots.</p></em></b>
								<label for="comentario">Evento</label>	
								<input class="form-control" name="id_evento" type="text" required="required" id="id_evento" placeholder="Numero del evento" tabindex="6" title="evento">
						</div><br><br><br><br>							
				

					
						<!--Boton enviar-->			
							<input type="submit" tabindex="7" name="aceptar" value="Aceptar" class="button big special">
						<!--Borrar-->		
							<input type="reset" tabindex="8"  class="button big special" value="Borrar">
						
					
					</div>
					</fieldset>
      			</form>
   			</div>
  		</div>
	</div><br><br><br>
						

		

			<hr>

		<!--Redes Sociales-->
			<div class="social">
				<ul>
					<li><a href="http://www.facebook.com/netozack" target="_blank" class="icon-facebook" title="Facebook"></a></li>
					<li><a href="http://www.twitter.com/netozack" target="_blank" class="icon-twitter" title="Twitter"></a></li>
					<li><a href="http://www.googleplus.com/ZackMaya" target="_blank" class="icon-google-plus" title="Google+"></a></li>
					<li><a href="mailto:netozack@hotmail.com" class="icon-mail2" title="Mail"></a></li>
				</ul>
			</div><br>


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