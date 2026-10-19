<?php

$numero = intval(readline("Digite um número: "));

for ($i = 1 ; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado\n";
}

?>