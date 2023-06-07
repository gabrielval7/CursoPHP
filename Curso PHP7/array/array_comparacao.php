<h2>Comparação de Arrays</h2>

<?php
	$arr1 = [ 'nome' => 'Maria', 'idade' => 22];
	$arr2 = [ 'nome' => 'Maria', 'idade' => 22];
	var_dump($arr1 == $arr2);
	echo '<br>';
	$arr3 = [ 'nome' => 'Maria', 'idade' => '22'];
	var_dump($arr1 == $arr3);
	echo '<br>';
	var_dump($arr1 === $arr3);
?>