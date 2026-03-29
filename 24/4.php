<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>categoria de um produto</title>
</head>
<body>
    
<?php
    $codigoproduto = [

    1 => "Higiene",
    2 => "Perfumaria",
    3 => "Limpeza",
    4 => "Mercearia",
    5 => "Frios",
    6 => "Laticínios",
    7 => "Padaria",
    8 => "Açougue",
    9 => "Hortifruti",
    10 => "Bebidas",
    11 => "Refrigerantes",
    12 => "Sucos",
    13 => "Água",
    14 => "Cervejas",
    15 => "Vinhos",
    16 => "Destilados",
    17 => "Congelados",
    18 => "Massas",
    19 => "Molhos",
    20 => "Temperos",
    21 => "Grãos",
    22 => "Arroz",
    23 => "Feijão",
    24 => "Café",
    25 => "Chás",
    26 => "Biscoitos",
    27 => "Salgadinhos",
    28 => "Doces",
    29 => "Chocolates",
    30 => "Cereais",
    31 => "Matinais",
    32 => "Enlatados",
    33 => "Conservas",
    34 => "Óleos",
    35 => "Azeites",
    36 => "Açúcar",
    37 => "Farinhas",
    38 => "Leites",
    39 => "Iogurtes",
    40 => "Queijos",
    41 => "Presuntos",
    42 => "Carnes Bovinas",
    43 => "Carnes Suínas",
    44 => "Frango",
    45 => "Peixes",
    46 => "Frutas",
    47 => "Verduras",
    48 => "Legumes",
    49 => "Produtos Naturais",
    50 => "Produtos Integrais",
    51 => "Sem Glúten",
    52 => "Sem Lactose",
    53 => "Ração Pet",
    54 => "Acessórios Pet",
    55 => "Descartáveis",
    56 => "Papelaria",
    57 => "Utilidades Domésticas",
    58 => "Bomboniere",
    59 => "Sorvetes",
    60 => "Pratos Prontos"

];
$resultado = "";
 if(isset($_POST['codigoproduto'])) {
    $resultado = $_POST ['codigoproduto'];
    if (isset($codigoproduto[$resultado])) {
        $resultado = $codigoproduto[$resultado];
    } else {
        $resultado = "Produto não encontrado";
    }
 }
 ?>
<form method="post">
    Digite o código do produto (1-60):
    <input type="number" name="codigoproduto" min="1" max="60">
    <button type="submit">Enviar</button>

    <p><?php echo $resultado; ?></p>


</body>
</html>