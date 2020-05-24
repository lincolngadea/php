

<table border="1" width="400">
<?php
	
	for($q=1;$q <= 9;$q++){
		echo "<tr>";
			for($w=1;$w<=9;$w++){
				echo "<td>".($q*$w)."</td>";
			}

	}


?>
</table>