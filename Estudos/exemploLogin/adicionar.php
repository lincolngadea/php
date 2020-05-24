<?php
	session_start();

	if(isset($_POST['nome']) && !empty($_POST['nome'])){

		$nome = addslashes($_POST['nome']);
		$email = addslashes($_POST['email']);
		$senha = md5(addslashes($_POST['senha']));

		require 'config.php';

		$sql = "INSERT INTO usuario SET nome = :nome, email = :email, senha = :senha";
		$sql = $pdo->prepare($sql);
		$sql->bindValue(':nome',$nome);
		$sql->bindValue(':email',$email);
		$sql->bindValue(':senha',$senha);
		$sql->execute();

		echo "Dados inseridos com Sucesso";
	
	}
?>


<form method="POST">
Nome:<br>
<input type="text" name="nome" required><br><br>
Email:<br>
<input type="email" name="email" required><br><br>
Senha:<br>
<input type="password" name="senha" required><br><br>
<input type="submit" value="Cadastrar">

</form>