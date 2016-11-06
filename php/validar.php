<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Validando...</title>
	<!--Codificación de caracteres especiales-->
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />

	<!--Busqueda en descripciones, ya el sitio subido en servidor-->
	<meta name="congresUACM" content="CONGRESO UACM - Desarrollado por un estudiante de la uacm de ingenieria en software, CONGRESO, CONGRESO UACM, UACM Ingeniería de Software" />

	<!--Estilos con CSS-->
	<link rel="stylesheet" href="../css/skel.css" />
	<link rel="stylesheet" href="../css/style.css" />

	<!--Estilos para redes sociales panel lateral-->
	<link href="../css/iconic.css" media="screen" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="../css/redesSociales.css">
	<link href="../css/fonts.css" media="screen" rel="stylesheet" type="text/css">
		

</head>
<body>
	<!--Mensaje de despedida de la sesión-->
	<br><br><br><hr>
	<center><h2>El mail no es correcto <br>
	La contraseña no es correcta.<br>
	Intenta de nuevo</h2></center>
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

	<script language="javascript">location.href = "formulario.php";</script>
</body>
</html>