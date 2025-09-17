<?php

$arquivo = fopen ("arquivo.txt", "a");

$numero = $_GET["numero"];

function calcular_tabuada($numero, $arquivo) {
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "$numero x $i = $resultado<br>";

        // Salva no arquivo
        fwrite($arquivo, "$numero x $i = $resultado \n");
    }
}

echo "Os 10 primeiros números da tabuada do número $numero são:<br>";

// Chama a função e passa o arquivo para salvar
calcular_tabuada($numero, $arquivo);

fclose($arquivo);

echo"<br> Tabuada salva com sucesso! <br>";