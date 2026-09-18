<?php
$peso = $_POST["peso"];
$altura = $_POST["altura"];
$IMC = $peso / $altura ** 2;
echo $IMC;