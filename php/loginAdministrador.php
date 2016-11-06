<?php
	include('conexion.php');

	$email=$_POST["email"];
	$pass=$_POST["password"];
    if(!strcmp($_POST['email'], "ingnetozack@gmail.com") && !strcmp($_POST['password'],"admin")){
        session_start();
        $_SESSION['acceso']=1;
        echo "Accediendo como inmortal";
        header('Location: panelAdmin.php'); 
     }
     
     
     else{
            echo "<script>alert('Error Favor de Registrarse')</script>";
            header('Location: validarAdmin.php');
    }
?>