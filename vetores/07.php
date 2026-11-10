<?php

$notasenviadas = 0;
$coletor = 0;
while ($coletor < 5) {
    $notas = intval(readline("Digite uma nota (ou '11' para terminar): "));
    if ($notas === 11) {
        break;
    }
    $notasenviadas = $notasenviadas + $notas;
    $coletor++;
    if ($coletor === 5) {
        echo "Soma das notas: $notasenviadas\n";
    }
}


?>