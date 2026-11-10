<?php

$pordia = 0;
$soma = 0;
for ($vendas = 1; $vendas <= 5; $vendas++) {
    $nota = readline("Digite a quantidade de peças vendidas no dia $vendas: ");
    echo "Quantidade de peças vendidas no dia $vendas: $nota\n";
    $soma = $soma + $nota;
}


echo "Todos os dias foram cadastrados.\n";
echo "Total de vendas: $soma\n";

?>