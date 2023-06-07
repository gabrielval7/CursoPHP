<h2>Basico de Variaveis</h2>

<?php
$num1 = 3;
echo $num1 . '<br>';
echo var_dump($num1) . '<br>';

$num2 = 5;
echo 'Soma dos numeros : ' . $num1 + $num2 . '<br>';

$mult = $num1 * $num2;

echo 'Multiplicação dos numeros : ' . $mult . '<br>';

unset($nomedavar);//Função para tirar o valor de uma variavel e deixar ela vazia

$variavel = 2;
$variavel = 'Agora sou uma String'; //Variaveis podem mudar de tipo
?>