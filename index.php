<?php require 'client.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calcule Seu Imposto de Renda</title>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
  <h1>Dados do Cliente</h1>
  
  <form action="process.php" method="POST">
    <label for="name">Nome:</label>
    <input type="text" id="name" name="name" required><br>

    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email" required><br>

    <label for="phone">Telefone:</label>
    <input type="text" id="phone" name="phone" required><br>

    <label for="salary">Salário:</label>
    <input type="number" id="salary" name="salary" step="0.01" required><br>

    <input type="submit" value="Calcular">
  </form>
</body>
</html>
