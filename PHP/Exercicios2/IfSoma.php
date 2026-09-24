<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma</title>
</head>
<body>
    <form method="post">
        <label for="valor1">Informe o pimeiro valor</label>
        <input type="number" id="valor1" name="valor1">
        <label for="valor2">Informe o segundo valor</label>
        <input type="number" id="valor2" name="valor2">
        <button type="submit">enviar</button> <br>
    </form>
    <?php 
    if ($_POST) {
        $valor1 = $_POST["valor1"];
        $valor2 = $_POST["valor2"];
        $multiplicado = $valor1 * 3 + $valor2 * 3;
        $somado = $valor1 + $valor2;
        if ($valor1 == $valor2) {
            echo "$multiplicado";
        } else {
            echo "$somado";
        }
    } ?>
</body>
</html>