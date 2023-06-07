<h2>Switch</h2>

<?php
$categoria = 'SEdan';
$preco = 0.0;
$carro = '';

switch(strtolower($categoria)){ //strtolower para sempre ser em letra minuscula
	case 'luxo':
		$carro = 'Mercedes';
		$preco = 250000;
		break;
	case 'suv':
		$carro = 'Honda';
		$preco = 80000;
		break;
	case 'sedan':
		$carro = 'Fiat';
		$preco = 50000;
		break;
	default:
		$carro = 'Pegout';
		$preco = 40000;
}

echo "Carro : $carro e o Preço : $preco";