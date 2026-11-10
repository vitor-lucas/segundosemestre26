<?php

for ($dia = 1; $dia <= 7; $dia++) {
    $litrospd = readline("Digite a quantidade de Litros gasto no dia $dia: ");
    $litrostotais += $litrospd;
    echo "Quantidade de Litros gasto no dia $dia: $litrospd\n";
}

echo "Todos os dias foram cadastrados.\n";
echo "Litros totais gastos: $litrostotais\n";

?>