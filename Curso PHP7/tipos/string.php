<h2>Tipo String</h2>

<?php
echo 'Eu sou uma String<br>';
var_dump('Eu tbm xD<br>');

//concatenação
echo 'Eu sou' . ' uma String tbm<br>';

print("Teste do print<br>");

//Funções string
$teste = 'Tudo isso que você viu';
echo strtoupper('tudo em letra maiuscula<br>');
echo ucfirst('apenas a primeira maiuscula<br>');
echo strlen('Quantas letras?');
echo '<br>';
echo str_replace('isso', 'aquilo', 'Trocar isso<br>');//Substituir uma palavra de uma string
echo str_replace('isso', 'aquilo', $teste);
?>