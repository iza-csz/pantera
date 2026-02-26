<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>desconto</title>
</head>
<body>
    
<?php
// Lista de produtos disponíveis com seus respectivos preços (em R$)
$produtos = [
    "Kit caneta" => 40.99,
    "Mochila" => 70.00,
    "Tablet" => 2000.00,
    "Cadeira gamer" => 1500.00
];

// Variáveis para armazenar mensagens que serão exibidas ao usuário
$resultado = "";
$detalhes = "";

// Verifica se o formulário foi enviado com os campos esperados
if (isset($_POST['produto']) && isset($_POST['forma_pagamento'])) {

    // Recebe os valores enviados pelo formulário
    $produto = $_POST['produto'];
    $forma_pagamento = $_POST['forma_pagamento'];

    // Verifica se o produto selecionado existe na lista
    if (isset($produtos[$produto])) {

        // Obtém o preço do produto selecionado
        $valor = $produtos[$produto];

        // Cálculo do desconto conforme a forma de pagamento
        if ($forma_pagamento == "avista") {
            // Pagamento à vista: 10% de desconto
            $desconto = $valor * 0.10;
        } elseif ($forma_pagamento == "boleto") {
            // Pagamento por boleto: 8% de desconto
            $desconto = $valor * 0.08;
        } else {
            // Outras formas (ex.: cartão): sem desconto
            $desconto = 0;
        }

        // Calcula o preço final aplicando o desconto
        $preco_final = $valor - $desconto;

        // Monta os detalhes formatados em HTML para exibição
        $detalhes = "
            Produto: $produto <br>
            Valor original: R$ " . number_format($valor, 2, ',', '.') . "<br>
            Forma de pagamento: $forma_pagamento <br>
            Desconto: R$ " . number_format($desconto, 2, ',', '.') . "<br>
            Valor final: <strong>R$ " . number_format($preco_final, 2, ',', '.') . "</strong>
        ";

    } else {
        // Mensagem para produto inválido (não encontrado no array)
        $resultado = "Produto inválido.";
    }
}
?>

<!-- Formulário HTML: seleção de produto e forma de pagamento -->
<form method="post">

    <label>Escolha o produto:</label><br>
    <select name="produto" required>
        <option value="">Selecione</option>
        <?php foreach ($produtos as $nome => $preco): ?>
            <!-- Cada opção mostra o nome do produto -->
            <option value="<?php echo $nome; ?>"><?php echo $nome; ?></option>
        <?php endforeach; ?>
    </select>

    <br><br>

    <label>Forma de pagamento:</label><br>
    <select name="forma_pagamento" required>
        <option value="">Selecione</option>
        <!-- À vista aplica 10% de desconto -->
        <option value="avista">À vista (10% desconto)</option>
        <!-- Boleto aplica 8% de desconto -->
        <option value="boleto">Boleto (8% desconto)</option>
        <!-- Cartão não aplica desconto -->
        <option value="cartao">Cartão (sem desconto)</option>
    </select>

    <br><br>

    <!-- Botão para enviar os dados e calcular o preço -->
    <button type="submit">Calcular</button>

</form>

<br>

<!-- Exibe eventual mensagem de erro -->
<?php echo $resultado; ?>
<!-- Exibe os detalhes do cálculo (produto, valor, desconto, valor final) -->
<?php echo $detalhes; ?>

</body>
</html>