<?php

$nome_do_aluno = $_POST['nome_do_aluno'];
$primeira_nota = $_POST['primeira_nota'];
$segunda_nota = $_POST['segunda_nota'];

$media = ($primeira_nota + $segunda_nota) / 2;

if ($media >= 7) 
{
    echo "O aluno $nome_do_aluno foi aprovado com média $media.";
}

else 
    {
    echo "O aluno $nome_do_aluno foi reprovado com média $media.";
}