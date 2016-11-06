<?php

	session_start();
	if(isset($_SESSION["usuario_email"])){

		if(isset($_POST['submitted'])){
			include('conexion.php');


			$email=$_SESSION["usuario_email"];
			$id_evento=$_POST['id_evento'];
			$lugar=$_POST['lugar'];
			$boleto=$_POST['boletos'];


			if($lugar>50){
				echo "Los lugares sólo son 50 el cupo de su capacidad";
				header('Location: maximolugar.php');
			}else{

			$sqlinsert = "INSERT INTO registroxusuario (email,id_evento,lugar,boletos) VALUES ('$email','$id_evento','$lugar','$boleto')";

		      
		    if(!mysqli_query($con,$sqlinsert)){
				die('error de conexion...');

			}
				$newrecord = "Tu comentario ha sido guardado";
		    } 
		    echo "<script>alert('Comentario Guardado')</script>";
		    header('Location: registrocompletado.php');

		}
	}

?>