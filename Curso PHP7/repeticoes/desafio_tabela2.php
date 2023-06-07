<h2>Desafio tabela 2</h2>

<form action="#" method="post">
	<label>Linhas</label>
	<input type="number" name="linhas">
	<label>Colunas</label>
	<input type="number" name="colunas">
	<button>Gerar tabela</button>
</form>

<?php
	$linhas = $_POST['linhas'];
	$colunas = $_POST['colunas'];
?>

<table>
	<br>
	<?php
		$num = 1;
		for($i = 0; $i<$linhas; $i++){
			echo "<tr>";
			for($j = 0; $j<$colunas; $j++){
				echo "<td> $num </td>";
				$num++;
			}
			echo "</tr>";
		}
	?>
</table>

<style type="text/css">
	td{
		border : 1px solid black;
		padding: 5px;
	}
</style>