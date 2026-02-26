<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>nome do mês</title>
</head>
<body>

<?php
// Array associativo com os nomes dos meses do ano
// A chave (1-12) corresponde ao número do mês
$meses = [
    1 => "Janeiro",
    2 => "Fevereiro",
    3 => "Março",
    4 => "Abril",
    5 => "Maio",
    6 => "Junho",
    7 => "Julho",
    8 => "Agosto",
    9 => "Setembro",
    10 => "Outubro",
    11 => "Novembro",
    12 => "Dezembro"
];

// Variável para armazenar o resultado (nome do mês ou mensagem de erro)
$resultado = "";

// Verifica se o formulário foi enviado via POST
if (isset($_POST['numero'])) {
    // Obtém o número fornecido pelo usuário
    $numero = $_POST['numero'];

    // Verifica se o número corresponde a um mês válido (1-12)
    if (isset($meses[$numero])) {
        // Se válido, obtém o nome do mês
        $resultado = $meses[$numero];
    } else {
        // Se inválido, exibe mensagem de erro
        $resultado = "Mês inválido";
    }
}
?>

<!-- Formulário HTML para input do usuário -->
<form method="post">
    Digite um número de 1 a 12:
    <!-- Input numérico para o usuário digitar o número do mês -->
    <input type="number" name="numero">
    <!-- Botão para enviar o formulário -->
    <button type="submit">Enviar</button>
</form>

<!-- Exibe o resultado (nome do mês ou mensagem de erro) -->
<p><?php echo $resultado; ?></p>
    
</body>
</html>
