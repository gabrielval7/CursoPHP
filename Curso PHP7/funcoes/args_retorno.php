<h2>Argumentos e Retornos</h2>


<?php

	function obterMensagem(){

		return 'Seja bem vindo';
	}

	$mensagem = obterMensagem();

	echo strtoupper($mensagem);

	function obterMensagemComNome($nome){

		return 'Seja bem vindo(a) ' . $nome;
	}

	$mensagem = obterMensagemComNome('Tobias');

	echo '<br>' . $mensagem;

?>