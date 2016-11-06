<?php
session_start();
if(isset($_SESSION["usuario_email"])){

	if(isset($_POST['submitted'])){
	include('conexion.php');

	
	$email=$_SESSION["usuario_email"];
	$asunto=$_POST['asunto'];
	$comentarios= $_POST['comentarios'];
	$id_evento=$_POST['id_evento'];

	$sqlinsert = "INSERT INTO comentariousuario (email,asunto,comentarios,id_evento) VALUES ('$email','$asunto','$comentarios','$id_evento')";
      
    if(!mysqli_query($con,$sqlinsert)){
	die('error de conexion...');

	}
	$newrecord = "Tu comentario ha sido guardado";
     
    echo "<script>alert('Comentario Guardado')</script>";
    header('Location: comentarUsuario.php');
	}
}
?>