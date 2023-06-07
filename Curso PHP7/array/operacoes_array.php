<h2>Operações com Array</h2>

<?php
$dados1 = [
	"nome" => "José",
	"idade" => 28
];
$dados2 = [
	"naturalidade" => "Fortaleza",
	"peso" => 88.5
];

$dadosTotal = $dados1 + $dados2;

print_r($dadosTotal);
echo '<br>' . count($dadosTotal);

$pares = [2,4,6,8];
$impares = [1,3,5,7,9];

echo '<br>';
$decimais = array_merge($pares, $impares);//Soma os Arrays
print_r($decimais);
sort($decimais);//Ordena o Array
echo '<br>';
print_r($decimais);
?>