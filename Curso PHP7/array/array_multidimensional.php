<h2>Array Multidimensional</h2>

<?php
	$dados = [
		[ "nome" => "Gabriel", "idade" => 25, "naturalidade" => "SP" ],
		[ "nome" => "Maria", "idade" => 38, "naturalidade" => "RJ" ]
	];

	print_r($dados);
	echo '<br>' . $dados[0]['nome'];//Acessando partes do Array que está dentro do Array
	echo '<br>' . $dados[0]['idade'];
	echo '<br>' . $dados[1]['nome'];

	$dados[] = [
		"nome" => "José", "idade" => 58, "naturalidade" => "RJ"
	];
	echo "<br>";
	print_r($dados);

	$dados[0]["profissao"] = "Analista de Suporte";
	echo "<br>";
	print_r($dados);
?>