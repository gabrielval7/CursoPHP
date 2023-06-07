<h2>Valor X Referência</h2>

<?php
$variavel = 'Valor inicial';
echo $variavel . '<br>';

//Atribuição por valor, dois endereços com valores iguais na memoria
$variavelValor = $variavel;
echo $variavelValor . '<br>';
$variavelValor = 'Novo valor';
echo $variavelValor . '<br>';
echo $variavel . '<br>'; //Não muda o valor da primeira variavel


//Atribuição por referêcia
$variavelReferencia = &$variavel;//Atribui o endereço da $variavel

$variavelReferencia = 'Mudou as duas xD';
echo $variavel . '<br>';
echo $variavelReferencia . '<br>';


?>