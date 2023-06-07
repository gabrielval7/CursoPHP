<h2>Desafio Tabela</h2>

<?php
	$matriz = [
		['1', '2', '3', '4', '5'],
		['6', '7', '8', '9', '10'],
		['11', '12', '13', '14', '15'],
		['16', '17', '18', '19', '20'],

	];

	foreach($matriz as $linhas){
		foreach($linhas as $valor){
			echo "$valor ";
		}
		echo "<br>";
	}
	
?>

<table>
	<?php
		foreach($matriz as $linhas){
			echo '<tr>';
			foreach($linhas as $valor){
				echo "<td> $valor </td>";
			}
			echo '</tr>';

	}
	?>

</table>

<style type="text/css">
	td{
		border : 1px solid black;
	}
</style>