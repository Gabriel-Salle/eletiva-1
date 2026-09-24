<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meses</title>
</head>
<body>
    <form method="post">
        <label for="produto">Informe o valor do produto</label>
        <input type="number" id="produto" name="produto">
        <button type="submit">enviar</button> <br>
    </form>
    <?php 
    if ($_POST) {
        $produto = $_POST["produto"];
        if ($produto > 100) {
            $desconto = $produto * 0.15;
            $produto = $produto - $desconto;
            echo $produto;
        }
        else {
            echo $produto;
        }
    } ?>
</body>
</html>