<?php
session_start();

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Congreso de Robótica- Modo Administrador</title>
		
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

	</head>
	<body id="top">

	<!-- Cabecera -->
			<header id="header" class="skel-layers-fixed">
				<h1><a href="http://www.uacm.edu.mx" target="_blank">UACM</a><br></h1>
				<nav id="nav">
					<ul>
					<!--<li><a href="index.php">Inicio</a></li>-->
					<li><a href="logout.php" class="button special">Cerrar Sesión</a></li>
					</ul>
				</nav>
			</header>



			<!-- Banner -->
			<section id="banner">
				<div class="inner">
				    <a ><img src="../images/uacm.png" alt="universidad autonoma de la ciudad de mexico" height="52" width="200" /></a><br><hr>
					<h2>CONGRESO DE ROBÓTICA</h2>
					<h2>Sesión Administrador.</h2>
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
		
			<!--Usuarios Registrados-->
			<div id="divInformacion">
			<center><h2>Registro de usuarios</h2></center>
			<center><table border="2">
				<tbody>
					<tr class="encabezado">
						<td>Nombre</td>
						<td>Email</td>
						<td>Password</td>
						<td>Edad</td>
					</tr>
						<?php
							include('conexion.php');
							$query="SELECT * FROM persona";
							$resultado=$con->query($query);
							while($row=$resultado->fetch_assoc()){
						?>
					<tr>
						<td><?php echo $row['nombre'];?></td>
						<td><?php echo $row['email'];?></td>
						<td><?php echo $row['password'];?></td>
						<td><?php echo $row['edad'];?></td>
					</tr>

						<?php
							}
						?>
			
				</tbody>
			</table>
			</center>
			<br><br><br><hr>


			<!--Comentarios-->
			<center><h2>Comentarios Usuarios Registrados</h2></center>
			
			<center><table border="2">
				<tbody>
					<tr class="encabezado">
						<td>Nombre</td>
						<td>Email</td>
						<td>Asunto</td>
						<td>Comentarios</td>
						<td>Evento</td>
					</tr>
						<?php
							include('conexion.php');
							$query="SELECT * FROM comentariousuario,evento,persona WHERE comentariousuario.id_evento=evento.id_evento AND comentariousuario.email=persona.email";
							$resultado=$con->query($query);
							while($row=$resultado->fetch_assoc()){
						?>
					<tr>
						<td><?php echo $row['nombre'];?></td>
						<td><?php echo $row['email'];?></td>
						<td><?php echo $row['asunto'];?></td>
						<td><?php echo $row['comentarios'];?></td>
						<!--Tabla evento-->
						<td><?php echo $row['nombreEvento'];?></td>
					</tr>

						<?php
							}
						?>
			
				</tbody>
			</table>
			</center>
			<br><br><br><hr>

			<!--Comentarios-->
			<center><h2>Comentarios Usuarios NO Registrados</h2></center>
			
			<center><table border="2">
				<tbody>
					<tr class="encabezado">
						<td>Nombre</td>
						<td>Email</td>
						<td>Asunto</td>
						<td>Comentarios</td>
						<td>Evento</td>
					</tr>
						<?php
							include('conexion.php');
							$query="SELECT * FROM comentario,evento WHERE comentario.id_evento=evento.id_evento";
							$resultado=$con->query($query);
							while($row=$resultado->fetch_assoc()){
						?>
					<tr>
						<td><?php echo $row['nombre'];?></td>
						<td><?php echo $row['email'];?></td>
						<td><?php echo $row['asunto'];?></td>
						<td><?php echo $row['comentarios'];?></td>
						<!--Tabla evento-->
						<td><?php echo $row['nombreEvento'];?></td>
					</tr>

						<?php
							}
						?>
			
				</tbody>
			</table>
			</center>
			<br><br><br><hr>
					
			<!--Registros a los eventos-->
			<center><h2>Registros a los eventos</h2></center>
				<center><table border="2">
				<tbody>
					<tr class="encabezado">
						<td>Nombre</td>
						<td>Email</td>
						<td>Evento</td>
						<td>Num. Lugar</td>
						<td>Num. Boletos</td>
						<td>Horario</td>		
						<td>Universidad</td>
						<td>Plantel</td>
						
					</tr>
						<?php
							include('conexion.php');
							$query="SELECT * FROM registroxusuario,evento,persona,universidad WHERE registroxusuario.id_evento= evento.id_evento AND registroxusuario.email=persona.email";
							$resultado=$con->query($query);
							while($row=$resultado->fetch_assoc()){
						?>
					<tr>
						<td><?php echo $row['nombre'];?></td>
						<td><?php echo $row['email'];?></td>
						<!--datos tabla evento-->
						<td><?php echo $row['nombreEvento'];?></td>
						<!--datos tabla registroxusuario-->
						<td><?php echo $row['lugar'];?></td>
						<td><?php echo $row['boletos'];?></td>
						<!--datos tabla evento-->
						<td><?php echo $row['horario'];?></td>
						<!--datos tabla universidad-->
						<td><?php echo $row['nombreUniversidad'];?></td>
						<td><?php echo $row['plantel'];?></td>
						
					</tr>

						<?php
							}
						?>
			
				</tbody>
			</table>
			</center>
			</div>
			<br><br><br><hr>
			

			<!-- Footer -->
			<footer id="footer">
			<ul class="copyright">
						<li>Copyright © 2016 UACM-Programación-Web. Todos los Derechos Reservados.</li>
						<li>Diseño: <a href="http://www.uacm.edu.mx" target="_blank">Ernesto Z. Maya</a></li>
					</ul>
					<!--Fecha-->
						<center><h6>Fecha: <script>
						var f = new Date();
						document.write(f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear());
						</script></h6></center>
			</footer>
	</body>
</html>