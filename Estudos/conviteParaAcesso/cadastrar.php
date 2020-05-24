<?php 
	if(isset($_GET['codigo']) && !empty($_GET['codigo']))//Verifica o convite
	{
		require 'conexao.php';//conecta o banco se tiver convite

		$codigo = addslashes($_GET['codigo']);
		$sql = "SELECT * FROM usuarios WHERE codigo = :codigo";//checa se o convite existe
		$sql = $pdo->prepare($sql);
		$sql->bindValue(':codigo',$codigo);
		$sql->execute();//existindo o convite, executa o sql

		if($sql->rowCount() <= 0)
		{//se não retornar nada no sql
			header ('Location: login.php?msg=3');//Você precisa de um Convite
		}
		else if(isset($_POST['email']) && !empty($_POST['email']))
		{		
			//alimenta as variáveis com informações do FORM.
			$email = addslashes($_POST['email']);
			$senha = md5(addslashes($_POST['senha']));
			$codigo = md5(rand(0,9999).rand(0,9999));
			//cria um select com as informações do FORM
			$sql = "SELECT email FROM usuarios WHERE email = :email";
			$sql = $pdo->prepare($sql);
			$sql->bindValue(':email',$email);
			$sql->execute();
			
			if($sql->rowCount() <= 0)
			{
				$sql = "INSERT INTO usuarios SET email = :email, senha = :senha, codigo = :codigo";
				$sql = $pdo->prepare($sql);
				$sql->bindValue(':email',$email);
				$sql->bindValue(':senha',$senha);
				$sql->bindValue(':codigo',$codigo);
				$sql->execute();	

				header('Location: login.php?msg=2');//cadastrado com sucesso	
			}
			else
			{
				header('Location: login.php?msg=1');//Cadastro existente
			}
		}
	}
	else
	{
		header ('Location: login.php?msg=3');
	}	
?>

 <form method="POST">
	Email:<br>
	<input type="email" name="email"><br><br>
	Senha:<br>
	<input type="password" name="senha"><br><br>
	<input type="submit" value="Cadastrar"><br><br>
</form>
<a href="index.php">Voltar para o Login</a>