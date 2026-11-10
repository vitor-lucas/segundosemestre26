<?php
$alunosAcimaDoLimite = 0;

for ($aluno = 1; $aluno <= 12; $aluno++) {
	echo "Digite a quantidade de faltas do aluno {$aluno}: ";
	$faltas = (int) readline();

	if ($faltas <= 15) {
		echo "Aluno {$aluno} está dentro do limite de faltas.\n";
	} else {
		echo "Aluno {$aluno} está acima do limite de faltas.\n";
		$alunosAcimaDoLimite++;
	}
}

echo "Quantidade de alunos que ultrapassaram o limite: {$alunosAcimaDoLimite}\n";
?>
