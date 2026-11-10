<?php
$soma = 0;
$maiorTemperatura = null;

for ($dia = 1; $dia <= 7; $dia++) {
	echo "Digite a temperatura do dia $dia: ";
	$temperatura = (float) trim(fgets(STDIN));

	$soma += $temperatura;

	if ($maiorTemperatura === null || $temperatura > $maiorTemperatura) {
		$maiorTemperatura = $temperatura;
	}
}

$media = $soma / 7;

echo "Temperatura média: " . number_format($media, 2, ',', '.') . " °C\n";
echo "Maior temperatura: " . number_format($maiorTemperatura, 2, ',', '.') . " °C\n";
?>
