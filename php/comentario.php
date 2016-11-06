<?php

	if(isset($_POST['submitted'])){
	include('conexion.php');

	$nombre= $_POST['nombreUsuario'];
	$email= $_POST['email'];
	$asunto=$_POST['asunto'];
	$comentarios= $_POST['comentarios'];
	$id_evento=$_POST['id_evento'];

	$sqlinsert = "INSERT INTO comentario (nombre,email,asunto,comentarios,id_evento) VALUES ('$nombre','$email','$asunto','$comentarios','$id_evento')";
      
    if(!mysqli_query($con,$sqlinsert)){
	die('error de conexion...');

	}
	$newrecord = "Tu comentario ha sido guardado";
     
    echo "<script>alert('Comentario Guardado')</script>";
    header('Location: comentar.php');
	}
?>

