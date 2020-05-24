
<?php
	session_start();

	if(isset($_POST['email']) && isset($_POST['senha']) && !empty($_POST['email']) && !empty($_POST['senha'])){

		$email = addslashes($_POST['email']);
		$senha = md5(addslashes($_POST['senha']));

		require 'config.php';

		$sql = "SELECT * FROM usuario WHERE email = :email AND senha = :senha";
		$sql = $pdo->prepare($sql);
		$sql->bindValue(':email',$email);
		$sql->bindValue(':senha',$senha);
		$sql->execute();

		if($sql->rowCount() > 0){
			$dado = $sql->fetch();
			$_SESSION['id'] = $dado['id'];
			
			header('Location: index.php');
		}else{
			echo "Algo deu errado";
			header('Location: login.php');
		}
	}
?>

<form method="POST">

	Email:<br>
	<input type="email" name="email"><br><br>
	Senha:<br>
	<input type="password" name="senha"><br><br>
	<input type="submit" value="Logar"><br><br>
	<a href="adicionar.php">Cadastrar Usuário</a> <a href="request.php">Esqueci a Senha</a>
	
</form>