<?php

$numerosecreto = 8;

do {
    $numero = intval(readline("Adivinhe o numero secreto: "));
    if ($numero == $numerosecreto) {
        echo "Parabens! Você acertou o numero secreto!";
    } else {
        echo "Tente novamente!\n";
    }
} while ($numero != $numerosecreto);



?>