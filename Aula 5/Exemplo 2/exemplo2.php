<?php

$nome_do_aluno = isset($_GET["nome_do_aluno"]) ? $_GET["nome_do_aluno"] : '';
$peso1 = $_GET ['peso1'];
$nota1 = $_GET ['nota1'];
$peso2 = $_GET ['peso2'];
$nota2 = $_GET ['nota2'];

echo "As medias do aluno $nome_do_aluno sao: <br>";

function calcular_media_aritmetica($n1, $n2) {
    $media = ($n1 + $n2) / (2);
    return $media;
}

echo "A media artmetica e " . calcular_media_aritmetica($nota1, $nota2) . "<br>";


function calcular_media_ponderada($p1, $p2, $n1, $n2) {
    $media_ponderada = (($p1 * $n1) + ($p2 * $n2)) / ($p1 + $p2);
    return $media_ponderada;
}

echo "A media ponderada e " . calcular_media_ponderada($peso1, $peso2, $nota1, $nota2) . "<br>";

