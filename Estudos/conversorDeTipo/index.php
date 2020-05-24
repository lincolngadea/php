<body>
	<h2>Conversor de Palavras em dígitos</h2>
	<form method="POST">
		<input type="text" name="texto">
		<input type="submit" value="Enviar">
	</form>
</body>
<?php
	if(isset($_POST['texto']) && !empty($_POST['texto'])){

		$tx = addslashes($_POST['texto']);
		$tx = explode(", ", $tx);
		
		$x = 0;
		while(count($tx) > $x){
			echo $tx[$x]." ";
			$x++;
		}
		echo "<br><br>";
		for($x=0;$x<count($tx);$x++){
			switch ($tx[$x]) {
				case 'um':
					echo "1 ";
					break;
				case 'dois':
					echo "2 ";
					break;
				case 'tres':
					echo "3 ";
					break;
				case 'quatro':
					echo "4 ";
					break;
				case 'cinco':
					echo "5 ";
					break;
				case 'seis':
					echo "6 ";
					break;
				case 'sete':
					echo "7 ";
					break;	
				case 'oito':
					echo "8 ";
					break;
				case 'nove':
					echo "9 ";
					break;
				case 'zero':
					echo "0 ";
					break;
			}
		}
	}

?>