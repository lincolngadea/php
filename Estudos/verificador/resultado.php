<?php

	if(isset($_POST['r1']) && !empty($_POST['r1'])){
			
	$res1 = addslashes($_POST['r1']);
	$res2 = addslashes($_POST['r2']);
	
	if($res1 == $res2){
		echo "<h2>HUMANO!</h2>";
	}else{
		echo "<h2>FAKE!</h2>";
	}

	}
?>