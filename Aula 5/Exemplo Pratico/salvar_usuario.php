<?php

$arquivo_json = "usuarios.json";

// 1.Receba os dados do formulário via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    $nome = $_POST["nome"];
    $email = $_POST["email"];

    // (Leitura Arquivo JSON) 2. Se o arquivo JSON existir, leia o conteúdo e decodifique-o em um array(vetor)
    if (file_exists($arquivo_json)) {
        $conteudo = file_get_contents($arquivo_json);
        $usuarios = json_decode($conteudo, true);

    // Trata o caso de arquivo corrompido ou vazio
    if ($usuarios === null || !is_array($usuarios)) {
        $usuarios = [];
    }

// Se o aqruivo não existir, cria um array vazio
} else {
    $usuarios = [];
}

// 3.Adicione o novo usuário ao array(vetor)
$novo_id = count($usuarios) + 1; 
$novo_usuario = [
    "id" => $novo_id,
    "nome" => $nome,
    "email" => $email
];
$usuarios[] = $novo_usuario;

$novo_conteudo_json = json_encode($usuarios, JSON_PRETTY_PRINT);

if (file_put_contents($arquivo_json, $novo_conteudo_json)) {
    echo "Usuário cadastrado com sucesso!";
} else {
    echo "Erro ao salvar o usuário.";
}
} else {
    echo "Método de requisição inválido.";
}
?>