<h2>Laço For</h2>

<?php
	for($cont =0; $cont <5; $cont++){
		echo "$cont <br>";
	}
	echo '<hr>';
	$array = ['Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado', 'Domingo'];

	for($i = 0; $i < 7; $i++){
		echo $array[$i] . '<br>';
	}

	echo '<hr>';
	//Desafio sobre for e foreach
	$array2 = ['AAA', 'BBB', 'CCC', 'EEE', 'FFF'];

	for($i = 0; $i<5; $i++){
		if($i % 2 === 0){
			echo $array2[$i] . " ";
		}
	}
	echo '<hr>';

	foreach($array2 = ['AAA', 'BBB', 'CCC', 'EEE', 'FFF'] as $valor){
		if($valor ==='BBB' || $valor ==='EEE'){
			continue;
		}
		echo "$valor <br>";
	}
?>