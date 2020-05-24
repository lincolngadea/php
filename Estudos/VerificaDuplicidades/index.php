<form method="POST">
	Digite vários valores:<br><br>
	<input type="text" name="lista">
	<input type="submit" value="">

</form>

<?php

//$lista = addslashes($_POST['lista']);
//$lista = explode(",", $lista);

$lista=array(1,2,3,4,4,4,2,5);
$verificado=array();

foreach ($lista as $n) {
	if(in_array($n, $verificado) == false){
		$verificado[]=$n;
	}
}

print_r($verificado);