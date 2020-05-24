<form method="POST">
	Informe vários números separados por vírgula:<br><br>
	<input type="text" name="lista">
	<input type="submit" value="Calcular">
	
</form>
<?php
	if(isset($_POST['lista']) && !empty($_POST['lista'])){

		$lista = addslashes($_POST['lista']);
		$lista = explode(",", $lista);

		$lista = max($lista);
		echo "O Maior Valor digitado é $lista";
	}

?>