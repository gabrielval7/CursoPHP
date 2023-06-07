<h2>If e Else</h2>

<?php
$nota1 = 7;
$nota2 = 8;
$nota3 = 6;
$media = ($nota1+$nota2+$nota3)/3;

if($media >= 7){
	echo 'Aluno aprovado' . '<br>';
}else{
	echo 'Aluno reprovado' . '<br>';
}


$idade = 27;

if($idade < 18){
	echo 'Menor de idade';
}else if ($idade < 65){
	echo 'Adulto';
}else{
	echo 'Idoso';
}
?>