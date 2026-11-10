<?php

$tabuada = readline("Digite um número para ver a soma: ");
$tabuadaconvertida = intval($tabuada);
$multiplicador = 1;

while ($multiplicador <= 100) {

    $resultado = $tabuadaconvertida + $multiplicador;

    echo "$tabuadaconvertida + $multiplicador = $resultado \n";

    $multiplicador++;
}

?>