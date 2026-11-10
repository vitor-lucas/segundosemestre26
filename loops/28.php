<?php
$pequenos = 0;
$medios = 0;
$grandes = 0;

for ($lote = 1; $lote <= 10; $lote++) {
	echo "Informe o peso médio da fruta do lote {$lote} (em gramas): ";
	$peso = (float) fgets(STDIN);

	if ($peso < 100) {
		$pequenos++;
	} elseif ($peso <= 200) {
		$medios++;
	} else {
		$grandes++;
	}
}

echo "Lotes pequenos: $pequenos\nLotes médios: $medios\nLotes grandes: $grandes\n";
?>
