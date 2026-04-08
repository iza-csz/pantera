<?php
$mes = 2;
$ano = 2024;

switch ($mes) {
    case 1: case 3: case 5: case 7: case 8: case 10: case 12:
        echo "31 dias";
        break;
    case 4: case 6: case 9: case 11:
        echo "30 dias";
        break;
    case 2:
        if (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) {
            echo "29 dias";
        } else {
            echo "28 dias";
        }
        break;
    default:
        echo "Mês inválido";
}
