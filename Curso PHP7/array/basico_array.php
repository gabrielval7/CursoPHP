<h2>Basico de Array</h2>

<?php

$lista = array(1, 2, 3, 3.3, 'Teste');

echo $lista . '<br>';
print_r($lista);
echo '<br>';
echo $lista[1] . '<br>';
echo $lista[2] . '<br>';
echo $lista[4] . '<br>';


$texto = 'Meu texto é supimpa';
echo mb_substr($texto, 12, 7);
?>