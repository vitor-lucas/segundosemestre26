<?php

$numero = intval(readline("Digite um número inteiro positivo: "));

if ($numero <= 0) {
	echo "Informe um número inteiro positivo." . PHP_EOL;
	exit;
}

for ($i = 0; $i <= $numero; $i += 2) {
	echo $i . PHP_EOL;
}
?>
