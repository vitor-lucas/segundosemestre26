<?php
$valor = (int) readline("Informe o valor que deseja sacar: R$ ");

if ($valor > 0) {
	$saquePossivel = false;

	for ($notasDez = intdiv($valor, 10); $notasDez >= 0; $notasDez--) {
		$restante = $valor - ($notasDez * 10);

		if ($restante % 2 === 0) {
			$notasDois = intdiv($restante, 2);
			$saquePossivel = true;
			break;
		}
	}

	if ($saquePossivel) {
		echo "Notas de R$ 10,00: $notasDez\n";
		echo "Notas de R$ 2,00: $notasDois\n";
	} else {
		echo "O saque não pode ser realizado com o valor exato.\n";
	}
} else {
	echo "Informe um valor positivo.\n";
}
?>


