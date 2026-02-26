<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Faixa Etária</title>
</head>
<body>

<?php

$idade = null;

if (isset($_POST['idade'])) {

    $idade = (int) $_POST['idade'];

    if ($idade < 0) {
        echo "Idade negativa? Isso não é possível!";

    } elseif ($idade <= 14) {
        echo "Criança";

    } elseif ($idade <= 19) {
        echo "Adolescente";

    } elseif ($idade <= 59) {
        echo "Adulto";

    } elseif ($idade <= 104) {
        echo "Idoso";

    } else {
        echo "Bom dia dinossauro 🦖";
    }
}

?>

<form method="post">
    <input type="number" name="idade" placeholder="Digite sua idade" required>
    <button type="submit">Enviar</button>
</form>

<?php
if ($idade !== null) {
    echo "<p>Idade digitada: $idade</p>";
}
?>

</body>
</html>