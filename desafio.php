<?php
$num1 = 10;
$num2 = 5;

echo "Números digitados: $num1 e $num2 <br><br>";
if ($num1 == $num2) {
    echo "Os números são iguais.";
} 
elseif ($num1 < $num2) {
    $soma = 0;
    $contador = 0;

    for ($i = $num1; $i <= $num2; $i++) {
        $soma += $i;
        $contador++;
    }

    $media = $soma / $contador;
    echo "Intervalo crescente detectado.<br>";
    echo "A média dos números do intervalo é: " . $media;
} 

else {
    $quantidadePares = 0;
    for ($i = $num1; $i >= $num2; $i--) {
        if ($i % 2 == 0) {
            $quantidadePares++;
        }
    }

    echo "Intervalo decrescente detectado.<br>";
    echo "A quantidade de números pares no intervalo é: " . $quantidadePares;
}
?>