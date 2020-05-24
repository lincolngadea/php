<?php
	session_start();
	if(isset($_POST['tipo']) && ($_POST['tipo']) == 0 or $_POST['tipo'] ==1){
		require 'config.php';

		$tipo =$_POST['tipo'];
		$valor = str_replace(",",".", $_POST['valor']);
		$valor = floatval($valor);

		$sql = $pdo->prepare('INSERT INTO historico SET id_conta = :id_conta, tipo = :tipo, valor = :valor, data_operacao = NOW()');
		$sql->bindValue('id_conta', $_SESSION['banco']);
		$sql->bindValue(':tipo', $tipo);
		$sql->bindValue(':valor', $valor);
		$sql->execute();

		if($tipo == 0){
			//deposito
			$sql= $pdo->prepare('UPDATE contas SET saldo = saldo + :valor WHERE id = :id');
			$sql->bindValue(':valor', $valor);
			$sql->bindValue(':id', $_SESSION['banco']);
			$sql->execute();

		}else if($tipo == 1){
			//saque
			$sql= $pdo->prepare('UPDATE contas SET saldo = saldo - :valor WHERE id = :id');
			$sql->bindValue(':valor', $valor);
			$sql->bindValue(':id', $_SESSION['banco']);
			$sql->execute();
		}

		header('Location: index.php');
		exit;
	}else{
		echo "erro";
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Caixa Eletrônico</title>
</head>
<body>
	<H2>Movimentação Bancária</H2>
	<form method="POST">
		<input type="radio" name="tipo" value="0" checked>
		<label for="0">Depósito</label><br>
		<input type="radio" name="tipo" Value="1">
		<label for="1">Saque</label><br><br>
		Valor:<br>
		<input type="text" name="valor" pattern="[0-9.,]{1,}"/><br/><br/>
		<input type="submit" value="Adicionar">
	</form>
</body>
</html>