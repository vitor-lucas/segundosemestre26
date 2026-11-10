<?php

function solicitarQuantidade(string $mensagem): int
{
	do {
		echo $mensagem;
		$quantidade = (int) trim(fgets(STDIN));
		if ($quantidade < 1) {
			echo "Informe uma quantidade maior que zero.\n";
		}
	} while ($quantidade < 1);

	return $quantidade;
}

$quantidadeModelos = solicitarQuantidade("Quantidade de modelos de IA: ");
$quantidadeTestes = solicitarQuantidade("Quantidade de testes por modelo: ");

$maiorMedia = -1;
$modeloComMaiorMedia = 0;

for ($modelo = 1; $modelo <= $quantidadeModelos; $modelo++) {
	$somaNotas = 0;

	for ($teste = 1; $teste <= $quantidadeTestes; $teste++) {
		do {
			echo "Nota do modelo {$modelo} no teste {$teste} (0 a 100): ";
			$nota = (float) trim(fgets(STDIN));
			if ($nota < 0 || $nota > 100) {
				echo "A nota deve estar entre 0 e 100.\n";
			}
		} while ($nota < 0 || $nota > 100);

		if ($nota < 50) {
			$classificacao = "baixo";
		} elseif ($nota < 80) {
			$classificacao = "moderado";
		} else {
			$classificacao = "alto";
		}

		echo "Resultado: {$classificacao}\n";
		$somaNotas += $nota;
	}

	$media = $somaNotas / $quantidadeTestes;
	echo "Média do modelo {$modelo}: " . number_format($media, 2, ',', '.') . "\n\n";

	if ($media > $maiorMedia) {
		$maiorMedia = $media;
		$modeloComMaiorMedia = $modelo;
	}
}

echo "Modelo com a maior média: modelo {$modeloComMaiorMedia} (" . number_format($maiorMedia, 2, ',', '.') . ").\n";

?>
