

<form method="POST">
	<input type="number" name="valor1" value="0">
	<select name="operacao">
		<option value= "sub" selected>-</option>
		<option value= "sum">+</option>
		<option value= "mult">x</option>
		<option value= "div">/</option>
	</select>
	<input type="number" name="valor2" value="0">
	<input type="submit" value="Calcular">
</form>

<?php

if(isset($_POST['valor1']) && !empty($_POST['valor1'])){

	$valor1 = addslashes($_POST['valor1']);
	$valor2 = addslashes($_POST['valor2']);
	$operacao = addslashes($_POST['operacao']);

	switch ($operacao) {
		case 'sub':
			$resultado = $valor1 - $valor2;
			break;
		case 'sum':
			$resultado = $valor1 + $valor2;
			break;
		case 'mult':
			$resultado = $valor1 * $valor2;
			break;
		case 'div':
			$resultado = $valor1 / $valor2;
			break;
		default:
			$resuldato = "";
			$valor1=0;
			$valor2=0;
			break;
	}
	if($resultado != ""){
		echo "Resultado = ".$resultado;
	}
	if($resultado == 0){
		echo "Resultado = ".$resultado;
	}

}
?>