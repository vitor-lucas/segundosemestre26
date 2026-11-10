<?php
for ($pedido = 1; $pedido <= 8; $pedido++) {
	echo "Digite o valor da compra do pedido $pedido: R$ ";
	$valorCompra = (float) str_replace(',', '.', trim(fgets(STDIN)));

	if ($valorCompra >= 300) {
		$frete = 0;
	} elseif ($valorCompra >= 150) {
		$frete = 15;
	} else {
		$frete = 25;
	}

	echo 'Frete do pedido ' . $pedido . ': R$ ' . number_format($frete, 2, ',', '.') . PHP_EOL;
}
?>

