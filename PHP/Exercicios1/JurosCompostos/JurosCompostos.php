<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juros</title>
</head>
<body>
    <form method="post" action="RespostaJurosCompostos.php">
        <label for="capital">Informe o capital</label>
        <input type="number" id="capital" name="capital" step="any">
        <label for="juros">Informe os juros</label>
        <input type="number" id="juros" name="juros" step="any">
        <label for="periodo">Informe o periodo</label>
        <input type="number" id="periodo" name="periodo">
        <button type="submit">enviar</button>
    </form>
</body>
</html>