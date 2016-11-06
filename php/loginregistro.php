

<?php
if(isset($_POST['submitted'])){
include('conexion.php');

//el id es autoincrement en la BD así que no se ingresa manualmente
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = $_POST['password'];
$edad=$_POST['edad'];


//Valida la edad
	if($edad<=17){
		//se valida la edad y se manda mensaje de requerido
		header('Location: maledad.php');
		echo "La edad es menor a la requerida";
	}

//Valida el email si ya esta registrado
 $selesql = "SELECT * FROM persona WHERE email='$email'";

 $resultado= $con->query($selesql);

  if($resultado->num_rows>0){
        
        //se manda a una página con mensaje explicando el correo ya registrado
        header('Location: emailregistrado.php');
        echo "El email que quiere utilizar ya existe en la BD";
  }

else{

$sqlinsert ="INSERT INTO persona (email,nombre,password,edad) VALUES('$email','$nombre','$password','$edad')";

if(!mysqli_query($con,$sqlinsert)){
die('error de conexion...');

}
$newrecord = "Tu registro ha sido éxitoso";
session_start();
$_SESSION["usuario_email"]=$email;

}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Registro Completado</title>

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
<body>

	<center><img src="../images/uacm.png" alt="universidad autonoma de la ciudad de mexico" height="52" width="200">

	<h1>Bienvenido al primer congreso de robótica de la UACM<br>Estas completamente registrado, 
	<?php
		echo $newrecord;
	?>
	, te esperamos el día
	28 de Marzo a las 8:00am en punto en nuestra universidad UACM.</h1>
	<h4>Escoge a que parte del congreso deseas asistir y reserva tu lugar quedan pocos lugares.</h4>

	
	<form method="post" action="panel.php">
		<div class="col-xs-3 col-sm-3 col-md-3">
			<input type="submit" tabindex="7" name="aceptar" value="Ir a mi panel" class="btn btn-lg btn-success btn-block" class="btn btn-default">
		</div>
	</form>
	</center>
	<hr><br><br><br><br><br>


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


