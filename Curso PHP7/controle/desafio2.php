<h2>Desafio 2</h2>

<!--
	Dois trabalhos -> terça e quinta!!
	-Se os dois forem executados: TV 50 e Sorvete
	-Se apenas um for executado: TV 32 e Sorvete
	-Se nenhum for executado: Ficará em casa
-->
<style type="text/css">

/* Estilo padrão para o botão */
	.custom-button {
	  background-color: #800000;
	  border: none;
	  color: white;
	  padding: 15px 32px;
	  text-align: center;
	  text-decoration: none;
	  display: inline-block;
	  font-size: 16px;
	  margin: 4px 2px;
	  cursor: pointer;
	  border-radius: 5px;
	}

	/* Estilo quando o mouse passa por cima */
	.custom-button:hover {
	  background-color: #800022;
	}

	/* Estilo quando o botão é clicado */
	.custom-button:active {
	  background-color: #1e4d23;
	}
</style>
<form action="#" method="post">
	<div>
		<label for="t1">Trabalho 1(Terça):</label>
		<select name="t1" id="t1">
			<option></option>
			<option value="1">Executado</option>
			<option value="0">Não Executado</option>
		</select>
	</div>
	<div>
		<label for="t2">Trabalho 2(Quinta):</label>
		<select name="t2" id="t2">
			<option></option>
			<option value="1">Executado</option>
			<option value="0">Não Executado</option>
		</select>
	</div>
	<button class="custom-button">Executar</button>
</form>


<?php
	$trab2 = $_POST['t2'];
	$trab1 = $_POST['t1'];

	
	if($trab1 == "1" && $trab2 == "1"){
		echo "Vamos comprar a TV de 50 e tomar sorvete";
	}else if(($trab1 == "1" && $trab2 == "0") || ($trab1 == "0" && $trab2 == "1")){
		echo "Vamos comprar a TV de 32 e tomar sorvete";
	}else{
		echo "Vamos ficar em casa :(";
	}
?>