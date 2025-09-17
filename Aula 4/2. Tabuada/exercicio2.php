<?php

$numero = $_GET["numero"];

function calcular_tabuada($numero) {
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "$numero x $i = $resultado<br>";
    }
}

echo "Os 10 primeiros números da tabuada do número $numero são:<br>";

calcular_tabuada($numero);