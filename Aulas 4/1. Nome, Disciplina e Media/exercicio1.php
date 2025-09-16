<?php

$nome_do_aluno = $_GET["nome_do_aluno"];
$disciplina = $_GET ['disciplina'];
$nota1 = $_GET ['nota1'];
$nota2 = $_GET ['nota2'];

function calcular_media_aritmetica($n1, $n2) {
    $media = ($n1 + $n2) / (2);
    return $media;
}

echo "O nome do aluno e $nome_do_aluno, e sua media na disciplina de $disciplina foi de " . calcular_media_aritmetica($nota1, $nota2);