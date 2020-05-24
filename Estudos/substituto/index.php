
<form method="POST">
	Frase:<br>
	<input type="text" name="frase" ><br><br>
	Procurar por:<br>
	<input type="text" name="busca"><br><br>
	Substituir por:<br>
	<input type="text" name="troca"><br><br>
	<input type="submit" value="Trocar">
</form>

<?php

if(isset($_POST['frase']) && !empty($_POST['frase'])){

	$frase = addslashes($_POST['frase']);
	$busca = addslashes($_POST['busca']);
	$troca = addslashes($_POST['troca']);

	$frase = explode(" ",$frase);

	$key = array_search($busca,$frase);
	$frase[$key]=$troca;

	$frase = implode(" ", $frase);
	echo "<br> $frase";

}
?>