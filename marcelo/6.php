<?php
$n1 = 10;
$n2 = 5;

if ($n1 < $n2) {
    // crescente → média
    $soma = 0;
    $qtd = 0;

    for ($i = $n1; $i <= $n2; $i++) {
        $soma += $i;
        $qtd++;
    }

    echo "Média: " . ($soma / $qtd);

} elseif ($n1 > $n2) {
    // decrescente → pares
    $pares = 0;

    for ($i = $n1; $i >= $n2; $i--) {
        if ($i % 2 == 0) {
            $pares++;
        }
    }

    echo "Quantidade de pares: $pares";

} else {
    echo "Os números são iguais";
}
?>