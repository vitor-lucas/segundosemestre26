<?php
$alunos = [];

do {
    echo "1 - Cadastrar aluno\n";
    echo "2 - Consultar aluno\n";
    echo "3 - Excluir aluno\n";
    echo "0 - Sair\n";
    $opcao = intval(readline("Escolha uma opção: "));
    if ($opcao === 1) {
    $aluno = [];
    $aluno['nome'] = readline("Digite o nome do aluno: ");
    $alunos[] = $aluno;
    echo "Aluno cadastrado com sucesso!\n";
} elseif ($opcao === 2) {
    $nome = readline("Digite o nome do aluno a ser consultado: ");
    $encontrado = false;
    foreach ($alunos as $aluno) {
        if ($aluno['nome'] === $nome) {
            echo "Aluno encontrado: {$aluno['nome']}\n";
            $encontrado = true;
            break;
        }
    }
    if (!$encontrado) {
        echo "Aluno não encontrado.\n";
    }
} elseif ($opcao === 3) {
    $nome = readline("Digite o nome do aluno a ser excluído: ");
    $encontrado = false;
    foreach ($alunos as $i => $aluno) {
        if ($aluno['nome'] === $nome) {
            unset($alunos[$i]);
            echo "Aluno excluído com sucesso!\n";
            $encontrado = true;
            break;
        }
    }
    if (!$encontrado) {
        echo "Aluno não encontrado.\n";
    }
} else {
    echo "Opção inválida\n";
}
} while ($opcao !== 0);

?>