<form method="POST">
	Valor do Produto:<br>
	<input type="number" name="valor"><br><br>
	Taxa de Imposto(%):<br>
	<input type="number" name="imposto"><br><br>
	<input type="submit" value="Calular">
</form>

<?php
	if(isset($_POST['valor']) && !empty($_POST['valor'])){
		$valor_inicial = addslashes(($_POST['valor']));
		$imposto_inicial = addslashes(($_POST['imposto']));

		$imposto_final = $valor_inicial * $imposto_inicial / 100;
		$valor_final = $valor_inicial - $imposto_final;

		echo "<br>";
		echo "Valor do Produto: R$ ".$valor_inicial."<br>";
		echo "Taxa de Imposto: R$ ".$imposto_inicial."<br>";
		echo "<hr><br>";
		echo "Valor do imposto: R$ ".$imposto_final."<br>";
		echo "Valor do Produto sem imposto: R$ ".$valor_final;
	}
?>