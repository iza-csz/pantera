<?php
$ano = 2024;

if (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) {
    echo "Bissexto";
} else {
    echo "Não é bissexto";
}
?>