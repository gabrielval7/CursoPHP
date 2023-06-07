<h2>Desafio Switch</h2>

<form action="#" method="post">
	<input type="text" name="valor">
	<select name="conversao" id="conversao">
		<option value="km-milha">Km > Milha</option>
		<option value="milha-km">Milha > Km</option>
		<option value="metro-km">Metros > Km</option>
		<option value="km-metro">Km > Metros</option>
	</select>
	<button>Calcular</button>
</form>

<?php
$valorFinal = 0.0;
$valor = $_POST['valor'];
$conversao = $_POST['conversao'];

switch($conversao){
	case 'km-milha':
		$valorFinal = $valor * 0.621;
		break;
	case 'milha-km':
		$valorFinal = $valor * 1.609;
		break;
	case 'metro-km':
		$valorFinal = $valor / 1000;
		break;
	case 'km-metro':
		$valorFinal = $valor * 1000;
		break;
}

echo "<h4>Valor inicial : $valor e o Valor convertido : $valorFinal</h4>";
?>