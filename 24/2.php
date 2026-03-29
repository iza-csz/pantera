<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>nome do dia da semana</title>
</head>
<body>

<?php
//exibir o dia da semana correspondente ao número fornecido pelo usuário //
 $dia = [
    1 => "Domingo",
    2 => "Segunda-feira",
    3 => "Terça-feira",
    4 => "Quarta-feira",
    5 => "Quinta-feira",
    6 => "Sexta-feira",
    7 => "Sábado"
 ];
  $resultado = "";
  if (isset($_POST['numero'])) {
    $numero = $_POST['numero'];
    if (isset($dia[$numero])) {
        $resultado = $dia[$numero];
    } else {
        $resultado = "Esse dia não existe";
    }
  }
?>
   <form method="post">
    Digite um número de 1 a 7:
    <input type="number" name="numero">
    <button type="submit">Enviar</button>

    <p><?php echo $resultado; ?></p>

</body>
</html>