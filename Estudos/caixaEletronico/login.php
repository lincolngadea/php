<?php
	session_start();
	if(isset($_POST['conta']) && !empty($_POST['conta'])){
		require 'config.php';

		$conta = $_POST['conta'];
		$agencia = $_POST['agencia'];
		$senha = md5($_POST['senha']);

		$sql = $pdo->prepare('SELECT * FROM contas WHERE conta = :conta AND agencia = :agencia AND senha = :senha');
		$sql->bindValue(':conta',$conta);
		$sql->bindValue(':agencia',$agencia);
		$sql->bindValue(':senha',$senha);
		$sql->execute();

		if($sql->rowCount() > 0){

			$dados = $sql->fetch();
			$_SESSION['banco'] = $dados['id'];
			 header ('Location: index.php');


		}else{
			header('Location: index.php');
			exit;
		}

	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Caixa Eletrônico</title>
</head>
<body>
	<H2>Dados Bancários</H2>
	<form method="POST">
		Conta:<br>
		<input type="text" name="conta"><br><br>
		Agência:<br>
		<input type="text" name="agencia"><br><br>
		Senha:<br>
		<input type="password" name="senha"><br><br>
		<input type="submit" value="Entrar">
	</form>
</body>
</html>