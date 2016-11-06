<?php
	session_start();
	session_destroy();
?>


<html>

<head>
	<title>Congreso de Robótica-registro Usuario</title>

	<meta name="description" content="Congreso UACM">
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

	<!--Formulario bootstrap-->
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/main.css">
</head>
<body>

<div class="container">
  <div class="row" style="margin-top:20px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
      <form action = "loginregistro.php" method = "post">
      <input type="hidden" name="submitted" value="true">
        <fieldset>
         <h2>Congreso Robótica UACM  - Registro Usuario</h2>
  			<br><br>
  			<hr>

  			<!--El id es autoincrement en la Base de Datos no se necesita ingresar-->

			<!--Nombre de usuario-->	  
			<div class="form-group">
				<label for="nombreUsuario">Nombre de Usuario</label>
				<input class="form-control" name="nombre" type="text" required="required" placeholder="Nombre y Apellidos" tabindex="1" title="Nombre completo">
			</div>

					
			<!--Correo Email-->
			<div class="form-group">
					<label for="email">Correo</label>
					<input class="form-control" name="email" type="email" required="required"  placeholder="E-mail" tabindex="5" title="Email">
			</div>

			<!--contraseña-->
			<div class="form-group">
					<label for="password">Contraseña</label>
					<input class="form-control" name="password" type="password" required="required" placeholder="Contraseña" tabindex="6" title="Contraseña">
			</div>

										
			<!--Edad-->
			<div class="form-group">
				<label for="edad">Edad</label>
				<input class="form-control" name="edad" type="text" required="required" id="edad" placeholder="Edad" tabindex="6" title="Edad">
			</div>

		

   				
		
       	<div class="col-lg-12 ">
				<br>
			<div class="col-xs-3 col-sm-3 col-md-3">
				<input type="submit" tabindex="7" name="aceptar" value="Aceptar" class="btn btn-lg btn-success btn-block" class="btn btn-default">
			</div>

			<div class="col-xs-3 col-sm-3 col-md-3"> 
				<input type="reset" tabindex="8" class="btn btn-lg btn-primary btn-block" class="col-xs-6 col-sm-6 col-md-6" value="Borrar">
			</div>

			<div class="col-xs-3 col-sm-3 col-md-3"> <a href="../index.php"  class="btn btn-lg btn-primary btn-block">Regresar</a> 
	        </div>
			<input type="hidden" name="estado" value="1">
		</div>									
        </fieldset>
      </form>
    </div>
  </div>
</div>


</body>
</html>