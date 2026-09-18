<?php
$capital = $_POST["capital"];
$juros = $_POST["juros"] / 100;
$periodo = $_POST["periodo"];
$juros_simples = $capital * $juros * $periodo;
echo $juros_simples;