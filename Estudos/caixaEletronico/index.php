<?php
	session_start();

	if(isset($_SESSION['banco']) && !empty($_SESSION['banco'])){
		require 'config.php';

		$id = $_SESSION['banco']; 
		$sql = $pdo->prepare('SELECT * FROM contas WHERE id = :id');
		$sql->bindValue(':id',$id);
		$sql->execute();

		if($sql->rowCount() > 0 ){
			$dados = $sql->fetch();
		}else{
			echo "Algo deu errado";
		}

	}else{
		header('Location: login.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Caixa Eletrônico</title>
</head>
<body>
	<a href="movimentacao.php">Realizar Movimentação</a><br/>
	<h1> Conta Corrente</h1>
	<p><strong>Correntista:</strong> <?php echo $dados['titular'];?></p>
	<p><strong>Conta:</strong> <?php echo $dados['conta'];?></p>
	<p><strong>Agência:</strong> <?php echo $dados['agencia'];?></p>
	<p><strong>Saldo:</strong> <?php echo $dados['saldo'];?></p><br>
	<hr>
	<h3>Movimentação / Extrato</h3>
	<table border="1" width="400">
		<tr>
			<th>Data</th>
			<th>Valor</th>
		</tr>
		<?php
			$sql = $pdo->prepare('SELECT * FROM historico WHERE id_conta = :id_conta');
			$sql->bindValue(':id_conta', $id);
			$sql->execute();

			if($sql->rowCount() > 0 ){
				foreach($sql->fetchAll() as $mov){
					?>
						<tr>
							<td><?php echo date('d/m/Y H:i',strtotime($mov['data_operacao']))?></td>
							<td><?php 
										if($mov['tipo'] == 0 ){?>
											<font color="green"> -R$<?php echo $mov['valor'];?></font> <?php		
										}else if($mov['tipo'] == 1){?>
											<font color="red"> -R$<?php echo $mov['valor'];?></font><?php
										}							
								?></td>
						</tr>
					<?php
				}
			}
		?>
	</table>
	
	<br>
	<a href="sair.php">Sair da Conta</a>


</body>
</html>