<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Curso PHP</title>
	<link rel="stylesheet" type="text/css" href="assets/css/estilo.css">
</head>
<body>
	<header class="cabecalho">
		<h1>Curso PHP</h1>
		<h2>Indice dos exercicios</h2>
	</header>

	<main class="principal">
		<div class="conteudo">
			<nav class="modulos">
				<div class="modulo">
					<h3>Modulo 01 - Básico</h3>
					<ul>
						<li><a href="exercicio.php?dir=basico&file=ola">Ola PHP</a></li>
						<li><a href="exercicio.php?dir=basico&file=html">Integração HTML</a></li>
						<li><a href="exercicio.php?dir=basico&file=css">Integração CSS</a></li>
						<li><a href="exercicio.php?dir=basico&file=comentarios">Comentarios em PHP</a></li>
						<li><a href="exercicio.php?dir=basico&file=desafio1">Desafio 1</a></li>
					</ul>
				</div>
				<div class="modulo">
					<h3>Modulo 02 - Tipos de Dados</h3>
					<ul>
						<li><a href="exercicio.php?dir=tipos&file=int">Inteiro</a></li>
						<li><a href="exercicio.php?dir=tipos&file=float">Float</a></li>
						<li><a href="exercicio.php?dir=tipos&file=aritmeticas">Operações aritméticas</a></li>
						<li><a href="exercicio.php?dir=tipos&file=string">Tipo String</a></li>
						<li><a href="exercicio.php?dir=tipos&file=booleano">Tipo Booleano</a></li>
						<li><a href="exercicio.php?dir=tipos&file=conversoes">Conversões</a></li>
					</ul>
				</div>
				<div class="modulo">
					<h3>Modulo 03 - Variaveis</h3>
					<ul>
						<li><a href="exercicio.php?dir=variaveis&file=basicovar">Basico de Variaveis</a></li>
						<li><a href="exercicio.php?dir=variaveis&file=interpolacao">Interpolação</a></li>
						<li><a href="exercicio.php?dir=variaveis&file=valor_referencia">Valor X Referência</a></li>
						<li><a href="exercicio.php?dir=variaveis&file=constantes">Constantes</a></li>
					</ul>
				</div>
				<div class="modulo">
					<h3>Modulo 04 - Controle</h3>
					<ul>
						<li><a href="exercicio.php?dir=controle&file=if_else">If e Else</a></li>
						<li><a href="exercicio.php?dir=controle&file=operadores_logicos">Operadores Lógicos</a></li>
						<li><a href="exercicio.php?dir=controle&file=desafio2">Desafio 2</a></li>
						<li><a href="exercicio.php?dir=controle&file=operador_ternario">Operador Ternario</a></li>
						<li><a href="exercicio.php?dir=controle&file=switch">Switch</a></li>
						<li><a href="exercicio.php?dir=controle&file=desafioswitch">Desafio Switch</a></li>
					</ul>
				</div>
				<div class="modulo">
					<h3>Modulo 05 - Array</h3>
					<ul>
						<li><a href="exercicio.php?dir=array&file=basico_array">Basico de Array</a></li>
						<li><a href="exercicio.php?dir=array&file=mapa">Mapa Array</a></li>
						<li><a href="exercicio.php?dir=array&file=operacoes_array">Operações Array</a></li>
						<li><a href="exercicio.php?dir=array&file=array_multidimensional">Array Multidimensional</a></li>
						<li><a href="exercicio.php?dir=array&file=get">$_GET</a></li>
						<li><a href="exercicio.php?dir=array&file=post">$_POST</a></li>
						<li><a href="exercicio.php?dir=array&file=array_comparacao">Comparação de Arrays</a></li>
					</ul>
				</div>
				<div class="modulo">
					<h3>Modulo 06 - Repetições</h3>
					<ul>
						<li><a href="exercicio.php?dir=repeticoes&file=for">For</a></li>
						<li><a href="exercicio.php?dir=repeticoes&file=foreach">Foreach</a></li>
						<li><a href="exercicio.php?dir=repeticoes&file=break_continue">Break e Continue</a></li>
						<li><a href="exercicio.php?dir=repeticoes&file=desafio_tabela">Desafio Tabela</a></li>
						<li><a href="exercicio.php?dir=repeticoes&file=desafio_tabela2">Desafio Tabela 2</a></li>
					</ul>
				</div>
				<div class="modulo">
					<h3>Modulo 05 - Array</h3>
					<ul>
						<li><a href="exercicio.php?dir=funcoes&file=escopo">Função e Escopo</a></li>
						<li><a href="exercicio.php?dir=funcoes&file=args_retorno">Argumentos e Retorno</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</main>

	<footer class="rodape">
		Gabriel Val &#169 <?= date('Y'); ?>
	</footer>
</body>
</html>