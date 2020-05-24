<?php
	
	session_start();

	if(isset($_SESSION['id']) && !empty($_SESSION['id'])){
		header('Location: listardados.php');
	}else{
		header("Location: login.php");
	}

?>