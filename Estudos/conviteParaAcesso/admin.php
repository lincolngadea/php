<?php
	session_start();
	require 'conexao.php';

	if(isset($_SESSION['id']) && !empty($_SESSION['id'])){
		
		$id = $_SESSION['id'];

		$sql = "SELECT * FROM usuarios WHERE id = :id";
		$sql = $pdo->prepare($sql);
		$sql->bindValue(':id',$id);
		$sql->execute();

		if($sql->rowCount() > 0){
			$dado = $sql->fetch();
			echo "Email:".$dado['email']."<br><br>";
			echo "<strong>Link de Convite:</strong><br>";
			echo "localhost/estudos/convite/cadastrar.php?codigo=".$dado['codigo']."<br><br>";
		}
	}else{
		header ('Location: login.php');
	}
	echo '<a href="sair.php">Sair</a>';

?>