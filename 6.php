<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- folha de estilo externa -->
    <link rel="stylesheet" href="style.css">
    <title>valor de uma venda</title>
</head>
<body>

<?php

// array de produtos com código, nome e preço
$produtos = [
    1 => ["nome" => "Bíblia", "preco" => 170.00],
    2 => ["nome" => "Devocional Diário", "preco" => 35.90],
    3 => ["nome" => "Caderno de Oração", "preco" => 24.50],
    4 => ["nome" => "Caneca Cristã", "preco" => 29.99],
    5 => ["nome" => "Camiseta Gospel", "preco" => 59.90],
    6 => ["nome" => "Livro Teológico", "preco" => 79.90],
    7 => ["nome" => "Planner Cristão", "preco" => 42.00],
    8 => ["nome" => "Marcador de Bíblia", "preco" => 9.90]
];

?>

<h2>Sistema de Caixa</h2>

<!-- formulário de seleção de produtos -->
<form method="POST">
    <?php foreach ($produtos as $codigo => $produto): ?>
        <!-- cada checkbox representa um produto -->
        <input type="checkbox" name="produtos[]" value="<?php echo $codigo; ?>">
        <?php
            // exibe nome e preço formatado
            echo $produto["nome"] . " - R$ " . number_format($produto["preco"], 2, ',', '.');
        ?>
        <br>
    <?php endforeach; ?>

    <br>
    <button type="submit">Finalizar Compra</button>
</form>

<?php

// checa se o formulário foi enviado com produtos
if (isset($_POST["produtos"])) {

    $total = 0;

    echo "<h3>Produtos Selecionados:</h3>";

    // percorre os códigos enviados
    foreach ($_POST["produtos"] as $codigoSelecionado) {

        // recupera informações do produto
        $nome = $produtos[$codigoSelecionado]["nome"];
        $preco = $produtos[$codigoSelecionado]["preco"];

        // mostra cada item com preço formatado
        echo "$nome - R$ " . number_format($preco, 2, ',', '.') . "<br>";

        $total += $preco;
    }

    // exibe o total da compra
    echo "<h3>Total: R$ " . number_format($total, 2, ',', '.') . "</h3>";
}
?>

</body>
</html>