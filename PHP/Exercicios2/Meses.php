<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meses</title>
</head>
<body>
    <form method="post">
        <label for="mes">Informe o numero equivalente ao mes</label>
        <input type="number" id="mes" name="mes">
        <button type="submit">enviar</button> <br>
    </form>
    <?php 
    if ($_POST) {
        $mes = $_POST["mes"];
        switch($mes) {
            case "1":
                echo "Janeiro";
                break;
            case "2":
                echo "fevereiro";
                break;
            case "3":
                echo "março";
                break;
            case "4":
                echo "abril";
                break;
            case "5":
                echo "maio";
                break;
            case "6":
                echo "junho";
                break;
            case "7":
                echo "julho";
                break;
            case "8":
                echo "agosto";
                break;
            case "9":
                echo "setembro";
                break;
            case "10":
                echo "outubro";
                break;
            case "11":
                echo "novembro";
                break;
            case "12":
                echo "dezembro";
                break;
        }
    } ?>
</body>
</html>