<div><h1>Integração com o CSS</h1></div>

<h2 azul>
<?php
	echo "Olá <small>mundo</small>";
?>
</h2>

<br>

<div><button><?= "Botão da galera " ?></button></div>

<style type="text/css">
	button{
		padding: 5px <?= 10 * 2 ?>px;
		background-color: #4286f4;
		color : #EEE;
		font-weight: bold;
		border-radius: 10px;
	}
	
	[azul]{
		color : #4286f4;
	}
</style>