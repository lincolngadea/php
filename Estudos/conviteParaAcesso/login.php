<?php
	session_start();
	require 'conexao.php';
		if(isset($_GET['msg']) && !empty($_GET['msg'])){
			
		$msg = addslashes($_GET['msg']);

		switch ($msg){
			case 1:
				echo '<script type="text/javascript"> alert("Usuário já Cadastrado");</script>';
				break;
			case 2:
				echo '<script type="text/javascript"> alert("Cadastro Realizado com Sucesso");</script>';
				break;
			case 3:
				echo '<script type="text/javascript"> alert("Você precisa de um convite para se Cadastrar!");</script>';
				break;
			default:
				$msg = '';
				break;
		}
		
	}


	if(isset($_POST['email']) && !empty($_POST['email'])){

		$email = addslashes($_POST['email']);
		$senha = md5(addslashes($_POST['senha']));

		$sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
		$sql = $pdo->prepare($sql);
		$sql->bindValue(':email',$email);
		$sql->bindValue(':senha',$senha);
		$sql->execute();

		if($sql->rowCount() > 0){
			$dado = $sql->fetch();
			$_SESSION['id'] = $dado['id'];
			header('Location: index.php');
		}
	}
?>

<form method="POST">
	Email:<br>
	<input type="email" name="email"><br><br>
	Senha:<br>
	<input type="password" name="senha"><br><br>
	<input type="submit" value="Logar"><br>
	<a href="cadastrar.php">Novo Cadastro</a>
</form>