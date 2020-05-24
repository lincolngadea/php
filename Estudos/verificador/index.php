<form method="POST" action="resultado.php">
<?php
	$n1 = rand(0,10);
	$n2 = rand(0,10);
	$res = $n1 + $n2;
	echo $n1."+".$n2." =";
?>
	<input type="number" name="r1">
	<input type="number" name="r2" value = "<?php echo $res;?>"hidden>
	<input type="submit" value="Calcular">
</form>