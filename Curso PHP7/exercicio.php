<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exercicio</title>
	<link rel="stylesheet" type="text/css" href="assets/css/estilo.css">
	<link rel="stylesheet" type="text/css" href="assets/css/exercicio.css">
</head>
<body class="exercicio">
	<header class="cabecalho">
		<h1>Curso PHP</h1>
		<h2>Vizualização do exercicio</h2>
	</header>
	<nav class="navegacao">
		<a href="*" class="verde">Sem formatação</a>
		<a href="index.php" class="vermelho">Voltar</a>
	</nav>
	<main class="principal">
		<div class="conteudo">
			<?php
				include( $_GET['dir'] . "/" . $_GET['file'] . ".php");
			?>
		</div>
	</main>

	<footer class="rodape">
		Gabriel Val &#169 <?= date('Y'); ?>
	</footer>
</body>
</html>