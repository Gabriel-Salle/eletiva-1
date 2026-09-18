<?php
$TempF = $_POST["tempf"];
$TempC = ($TempF - 32) * 5/9;
echo $TempC;