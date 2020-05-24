<form method="POST">
	
	<input type="text" name="palavra">
	<input type="submit" value="Inverter">

</form>


<?php
	
	if(isset($_POST['palavra']) && !empty($_POST['palavra'])){

		$palavra = addslashes($_POST['palavra']);

		echo "Palavra Digitada:".$palavra."<br>";
		echo "Palavra Invertida:".strrev($palavra);
	}


?>