<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AeB</title>
</head>
<body>
    <form method="post">
        <label for="A">Informe A</label>
        <input type="number" id="A" name="A">
        <label for="B">Informe B</label>
        <input type="number" id="B" name="B">
        <button type="submit">enviar</button> <br>
    </form>
    <?php 
    if ($_POST) {
        $A = $_POST["A"];
        $B = $_POST["B"];
        if ($A < $B) {
            echo "$A $B";
        }
        if ($B < $A) {
            echo "$B $A";
        }
        if ($A == $B) {
            echo "Numeros iguais: $A";
        }
    } ?>
</body>
</html>