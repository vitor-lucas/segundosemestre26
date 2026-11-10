<?php
$somaPares = 0;
$somaImpares = 0;

for ($numero = 1; $numero <= 50; $numero++) {
	if ($numero % 2 === 0) {
		$somaPares += $numero;
	} else {
		$somaImpares += $numero;
	}
}

echo "Soma dos números pares: $somaPares<br>";
echo "Soma dos números ímpares: $somaImpares";
?>
