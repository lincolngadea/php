
<table border="1" width="100%">
	<tr align="left">
		<th>Id</th>
		<th>Nome</th>
		<th>Email</th>
		<th>Action</th>
	</tr>
	<?php
		session_start();
		if(isset($_SESSION['id']) && !empty($_SESSION['id'])){

						
			require 'config.php';
			$sql = "SELECT * FROM usuario";
			$sql = $pdo->prepare($sql);
			$sql->execute();

			if($sql->rowCount() > 0){
				foreach ($sql->fetchAll() as $dados) {
					echo '<tr>';
					echo '<td>'.$dados['id'].'</td>';
					echo '<td>'.$dados['nome'].'</td>';
					echo '<td>'.$dados['email'].'</td>';
					echo '<td><a href="editar.php?id='.$dados['id'].'">Editar</a> - <a href="excluir.php?id='.$dados['id'].'">Excluir</a></td>';
					echo '</tr>';
				}
			}else{
				echo "Algo deu errado com a lista";
			}
		}else{
		header("Location: login.php");
		}
	?>
</table>
<br>
<a href="end.php">Finalizar</a>