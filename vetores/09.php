<?php
$total = 0;

do {
    $numero = intval(readline("Adicione um numero: "));
    if ($numero != 0) {
        $total += $numero;
    }
} while ($numero != 0);

echo "A soma dos numeros é: $total";
?>