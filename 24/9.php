<?php
$letra = "a";

switch ($letra) {
    case "a":
    case "e":
    case "i":
    case "o":
    case "u":
        echo "Vogal";
        break;
    default:
        echo "Consoante";
}
