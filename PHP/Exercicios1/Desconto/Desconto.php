<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desconto</title>
</head>
<body>
    <form method="post" action="RespostaDesconto.php">
        <label for="preco">Informe o preço</label>
        <input type="number" id="preco" name="preco">
        <label for="porcentagem">Informe a porcentagem (valor inteiro)</label>
        <input type="number" id="porcentagem" name="porcentagem">
        <button type="submit">enviar</button>
    </form>
</body>
</html>