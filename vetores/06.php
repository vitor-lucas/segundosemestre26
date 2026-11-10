<?php

$senha = 1313;

while (true) {
    $entrada = intval(readline("Digite a senha: "));
    if ($entrada == $senha) {
        echo "Acesso permitido!\n";
        break;
    } elseif ($entrada == 2222 or $entrada == 22) {
        echo "Senha INCORRETA PROFUNDAMENTE, DESISTA DOS SEUS SONHOS E MORRA!!!\n";
    } else {
        echo "Senha incorreta. Tente novamente.\n";
    }
}



?>