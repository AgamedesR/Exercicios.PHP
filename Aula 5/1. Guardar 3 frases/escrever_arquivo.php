<?php

    $arquivo = fopen ("arquivo.txt", "a");

    $frase1 = $_POST["frase2"];
    $frase2 = $_POST["frase2"];
    $frase3 = $_POST["frase3"];


    fwrite($arquivo, "$frase1 \n");
    fwrite($arquivo,"$frase2 \n");
    fwrite($arquivo,"$frase3 \n");  


    fclose($arquivo);

    echo "Frases salvas com sucesso! <br>";
    echo "Frase1: $frase1 <br>";
    echo "Frase2: $frase2 <br>";
    echo "Frase3: $frase3 <br>";
