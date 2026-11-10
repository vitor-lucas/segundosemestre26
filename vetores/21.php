<?php

$nomes = [];
$notas = [];
$somaNotas = 0;
$indiceMaiorNota = 0;
$quantidadeAprovados = 0;

for ($i = 0; $i < 10; $i++) {
	$nomes[$i] = readline('Nome do aluno ' . ($i + 1) . ': ');
	$entradaNota = readline('Nota de ' . $nomes[$i] . ': ');
	$notas[$i] = (float) str_replace(',', '.', $entradaNota);

	$somaNotas += $notas[$i];

	if ($i === 0 || $notas[$i] > $notas[$indiceMaiorNota]) {
		$indiceMaiorNota = $i;
	}

	if ($notas[$i] >= 7) {
		$quantidadeAprovados++;
	}
}

echo PHP_EOL . 'Média da turma: ' . number_format($somaNotas / 10, 2, ',', '.') . PHP_EOL;
echo 'Aluno com a maior nota: ' . $nomes[$indiceMaiorNota] . ' (' . number_format($notas[$indiceMaiorNota], 2, ',', '.') . ')' . PHP_EOL;
echo 'Quantidade de alunos aprovados: ' . $quantidadeAprovados . PHP_EOL;
echo 'Alunos reprovados:' . PHP_EOL;

$haReprovados = false;
for ($i = 0; $i < 10; $i++) {
	if ($notas[$i] < 7) {
		echo '- ' . $nomes[$i] . PHP_EOL;
		$haReprovados = true;
	}
}

if (!$haReprovados) {
	echo 'Nenhum aluno reprovado.' . PHP_EOL;
}

?>
