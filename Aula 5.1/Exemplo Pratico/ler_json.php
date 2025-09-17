<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- Define a codificação como UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Página responsiva -->
    <title>Lista de Usuários</title>
    <style>
        /* CSS básico para melhorar a visualização da tabela */
        table {
            border-collapse: collapse; 
            width: 80%; 
            margin: 20px auto; 
        }
        th, td {
            border: 1px solid #444;
            padding: 8px; 
            text-align: left; 
        }
        th {
            background-color: #f2f2f2; 
        }
    </style>
</head>

<body>
    <h1 style="text-align:center;">Lista de Usuários</h1>
    
    <?php
    
    $arquivo_json = "usuarios.json";

    // 1. Verifica se o arquivo existe
    if (file_exists($arquivo_json)) {
        $conteudo = file_get_contents($arquivo_json);

        // 2. Converte o JSON em array associativo 
        $usuarios = json_decode($conteudo, true);

        if ($usuarios !== null && json_last_error() === JSON_ERROR_NONE) {

            // HTML = Cria o cabeçalho da tabela
            echo "<table>";
            echo "<thead><tr><th>ID</th><th>Nome de Usuário</th><th>Email</th></tr></thead>";
            echo "<tbody>";

            // 3. Percorre cada usuário do JSON
            foreach ($usuarios as $usuario) {
                // A função htmlspecialchars protege os dados contra injeção de HTML/JS
                $id = isset($usuario['id']) ? htmlspecialchars($usuario['id']) : 'N/A';
                $username = isset($usuario['nome']) ? htmlspecialchars($usuario['nome']) : 'N/A';
                $email = isset($usuario['email']) ? htmlspecialchars($usuario['email']) : 'N/A';

                // HTML = Exibe cada usuário como uma linha da tabela
                echo "<tr><td>$id</td><td>$username</td><td>$email</td></tr>";
            }

            echo "</tbody>";
            echo "</table>";

        } else {
            echo "<p style='text-align:center; color:red;'>Erro ao decodificar os dados dos usuários ou arquivo JSON inválido.</p>";
        }
    } else {
        echo "<p style='text-align:center; color:red;'>O arquivo de usuários ('usuarios.json') não existe ou está vazio.</p>";
    }
    ?>
        
</body>
</html>
