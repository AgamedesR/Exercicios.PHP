<?php

    $tipo_de_investimento = $_POST["tipo_de_investimento"];
    $capital = $_POST["capital"];

if ($tipo_de_investimento == "Poupança" or $tipo_de_investimento == "1")
    {
        $rendimento = 0.03;
        $montante = $capital + ($capital * $rendimento);
    }
elseif ($tipo_de_investimento == "Renda Fixa" or $tipo_de_investimento == "2")
    {
        $rendimento = 0.05;
        $montante = $capital + ($capital * $rendimento);
    }

echo "O montante após 1 mês é de R$ $montante";

