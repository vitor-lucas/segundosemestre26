<?php

$tabuada = readline("Digite um número para ver a tabuada: ");
$tabuadaconvertida = intval($tabuada);
$multiplicador = 1;

while ($multiplicador <= 10) {

    $resultado = $tabuadaconvertida * $multiplicador;

    echo "$tabuadaconvertida x $multiplicador = $resultado \n";

    $multiplicador++;
}

?>