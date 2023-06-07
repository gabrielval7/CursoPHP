<h2>Constantes</h2>

<?php

define('TAXA_DE_JUROS', 5.9);
echo TAXA_DE_JUROS . '<br>';//Constantes não usam $

const NOVA_TAXA = 2.5;
echo NOVA_TAXA . '<br>';

$variavel = 3.1;
define('NOVISSIMA_TAXA', $variavel);//Podemos atribuir uma variavel a uma constante apenas pelo Define
echo NOVISSIMA_TAXA . '<br>';


//Constantes nativas do PHP
echo 'Versão do PHP : ' . PHP_VERSION . '<br>';
echo 'Maximo int no PHP : ' .PHP_INT_MAX . '<br>';
echo 'Qual caminho da pasta deste arquivo : ' . __FILE__ . '<br>';
?>