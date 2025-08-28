<?php

$salario_fixo = $_POST["salario_fixo"];
$valor_total_vendas = $_POST["valor_total_vendas"];

$comissao = $valor_total_vendas * 0.04;
$salario_final = $salario_fixo + $comissao;

if ($comissao == 0) {
    echo "O vendedor não realizou vendas neste mês e permanece com o salário fixo de R$$salario_fixo.";
}

else {
echo " A comissão do vendedor é de R$$comissao e o salário final é de R$$salario_final";
}