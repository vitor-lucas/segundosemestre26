<?php

$vetor1 = [1, 2, 3, 4, 5, 2];
$vetor2 = [3, 5, 6, 7, 3];
$comuns = [];

foreach ($vetor1 as $numero) {
	if (in_array($numero, $vetor2, true) && !in_array($numero, $comuns, true)) {
		$comuns[] = $numero;
	}
}

echo "Números presentes nos dois vetores, sem duplicatas: ";
print_r($comuns);

?>
