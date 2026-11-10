<?php

$soma = 0;

for ($aluno = 1; $aluno <= 5; $aluno++) {
    $nota = readline("Digite a nota do aluno $aluno: ");
    echo "Nota do aluno $aluno: $nota\n";
    $soma = $soma + $nota;
}

$media = $soma / 5;

echo "Todos os alunos foram cadastrados.\n";
echo "Média da turma: $media\n";

?>