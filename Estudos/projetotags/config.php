<?php
	try{
		$pdo = new PDO('mysql:dbname=projeto_tags;host=localhost', 'root', '');
	}catch(PDOException $e){
		echo "Erro na Conexão com o Banco: ".$e->getMessage();
	}
?>