<?php
$a = 0;
$b = 1;

echo "$a <br>$b <br>";

for ($i = 3; $i <= 10; $i++) {
    $c = $a + $b;
    echo "$c <br>";
    $a = $b;
    $b = $c;
}
?>