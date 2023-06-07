<h2>Break e Continue</h2>

<?php
	$cont = 15;
	for(; ; ){
		echo "$cont <br>";
		$cont++;
		if($cont>20){
			break;
		}
	}
	echo "<hr>";
	for(; ; ){
		$cont++;

		if($cont % 2 === 1){
			continue;
		}
		echo "$cont <br>";
		if($cont>30){
			break;
		}
	}

?>