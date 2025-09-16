<?php

    $arquivo = fopen ("arquivo.txt", "a");

    $frase1 = $_REQUEST["frase"];

    $frase = fwrite($arquivo, "$frase1 \n");
    
    echo "Frase: <br>$frase1<br> salva com sucesso.<br>";

    fclose($arquivo);
