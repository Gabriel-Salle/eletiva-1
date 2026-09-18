<?php
$distancia = $_POST["distancia"];
$tempo = $_POST["tempo"];
$velocidade = $distancia / $tempo;
echo $velocidade;