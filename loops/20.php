<?php

$numero = intval(readline("Digite um número inteiro não negativo: "));

while ($numero < 0) {
	$numero = intval(readline("Número inválido. Digite um inteiro não negativo: "));
}

$fatorial = 1;
for ($i = 1; $i <= $numero; $i++) {
	$fatorial *= $i;
}

echo "Fatorial de $numero: $fatorial" . PHP_EOL;



?>