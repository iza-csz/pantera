<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Verificar número</title>
</head>
<body>
    <?php
    // Inicializa a variável de resultado
    $resultado = "";

    // Verifica se o formulário foi enviado
    if (isset($_POST['numero'])) {
        // Garante que $numero seja tratado como inteiro
        $numero = (int) $_POST['numero'];

        // Lógica para determinar se é positivo, negativo ou zero
        if ($numero > 0) {
            $resultado = "Número positivo";
        } elseif ($numero < 0) {
            $resultado = "Número negativo";
        } else {
            $resultado = "O número é zero";
        }

        // Opcional: mesma lógica com operador ternário (comentada)
        // $resultado = ($numero > 0) ? "positivo" : (($numero < 0) ? "negativo" : "zero");
    }
    ?>

    <form method="post">
        Digite um número:
        <input type="number" name="numero">
        <button type="submit">Enviar</button>
    </form>

    <p><?php echo $resultado; ?></p>

</body>
</html>