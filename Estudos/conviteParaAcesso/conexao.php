<?php 

	try{
		$pdo = new PDO("mysql:dbname=convite;host=localhost", "root", "");
	}catch(PDOException $e){
		echo "Erro na conexão... ".$e->getMessage();
	}
	

?>