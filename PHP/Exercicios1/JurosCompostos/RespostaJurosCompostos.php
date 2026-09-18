<?php
$capital = $_POST["capital"];
$juros = $_POST["juros"] / 100;
$periodo = $_POST["periodo"];
$juros_compostos = $capital * (1 + $juros) ** $periodo;
echo $juros_compostos;