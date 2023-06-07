<h2>Foreach</h2>

<?php
	$array = ['Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado', 'Domingo'];

	foreach($array as $valor){ //percorrendo um array com foreach
		echo "$valor <br>";
	}
	echo '<hr>';
	foreach($array as $indice => $valor){ //percorrendo um array com foreach e mostrando um indice
		echo "$indice => $valor <br>";
	}

	$numeros = [1,2,3,4,5];

	foreach($numeros as &$dobrar){
		$dobrar *= 2;
		echo "<br>$dobrar";
	}
?>