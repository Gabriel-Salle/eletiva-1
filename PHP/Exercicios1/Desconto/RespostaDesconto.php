<?php
$preco = $_POST["preco"];
$porcentagem = $_POST["porcentagem"] / 100;
$desconto = $preco - ($preco * $porcentagem);
echo nl2br("$porcentagem \n");
echo $desconto;