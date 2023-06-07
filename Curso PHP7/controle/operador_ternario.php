<h2>Operador Ternario</h2>

<?php
$idade = 20;
$status;

/*if($idade >= 18){
	$status = 'Maior de idade';
}else{
	$status = 'Menor de idade';
}*/

$status = $idade >= 18 ? 'Maior de idade' : 'Menor de idade'; //Substitui o If e Else ali de cima
echo "$status <br>";
?>