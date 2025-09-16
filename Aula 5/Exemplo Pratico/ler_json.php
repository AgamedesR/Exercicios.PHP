<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
</head>
<body>
    <ul>
    <h2>Lista de Usuários</h2>
    </ul>
    
</body>
</html>

<?php

$arquivo_json = "usuarios.json";

if (file_exists($arquivo_json)) {
    $conteudo = file_get_contents($arquivo_json);
    $usuarios = json_decode($conteudo, true);
}