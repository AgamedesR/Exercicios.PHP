<?php

    $custodefabrica = $_POST["custo_de_fabrica"];

    if ($custodefabrica < 40000)
        {   
            $distribuidor = $custodefabrica * 1.05;
            $total = $custodefabrica + $distribuidor;
        }

    elseif ($custodefabrica >= 40000 and $custodefabrica < 70000)
        {
            $distribuidor = $custodefabrica * 0.10;
            $impostos = $custodefabrica * 0.15;
            $total = $custodefabrica + $distribuidor + $impostos;
        }
    
    else
        {
            $distribuidor = $custodefabrica * 0.15;
            $impostos = $custodefabrica * 0.20;
            $total = $custodefabrica + $distribuidor + $impostos;
        }

    echo "O preço desse carro novo ao consumidor é de R$ $total";