<?php
$valor = 100;
$forma = "avista";

switch ($forma) {
    case "boleto":
        echo $valor * 0.95;
        break;
    case "cartao":
        echo $valor * 0.90;
        break;
    case "avista":
        echo $valor * 0.85;
        break;
}
?>