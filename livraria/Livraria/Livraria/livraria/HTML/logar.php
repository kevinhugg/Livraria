<?php

$erro = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if (isset($email) && isset($senha)) {
        $arquivo1 = 'usuarios.json';
        $arquivo2 = 'vendedores.json';
        $dados = [];

        // Verifica se existe o arquivo usuarios.json
        if (file_exists($arquivo1)) {
            $extrair_dados1 = file_get_contents($arquivo1);
            $usuarios = json_decode($extrair_dados1, true);
            $dados = array_merge($dados, $usuarios); // Adiciona usuários ao array de dados
        }

        // Verifica se existe o arquivo vendedor.json
        if (file_exists($arquivo2)) {
            $extrair_dados2 = file_get_contents($arquivo2);
            $vendedores = json_decode($extrair_dados2, true);
            $dados = array_merge($dados, $vendedores); // Adiciona vendedores ao array de dados
        }

        // Verifica se encontrou algum registro com email e senha correspondentes
        $usuario_encontrado = false;
        foreach ($dados as $usuario) {
            if ($usuario['email'] == $email && $usuario['senha'] == $senha) {
                $usuario_encontrado = true;
                break; // Encerra o loop assim que encontrar o usuário
            }
        }

        if ($usuario_encontrado) {
            header('Location: inicial.php');
            exit; // Encerra o script após redirecionar
        } else {
            $erro = 'Email ou senha incorretos';
        }

    } else {
        $erro = 'Preencha TODOS os campos';
    }

    // Redireciona para a página de login com mensagem de erro, se houver
    header("Location: login.php?erro=" . urlencode($erro));
    exit; // Encerra o script após redirecionar
}

// Se não for uma requisição POST, redireciona para a página de login
header("Location: login.php");
exit; // Encerra o script após redirecionar
?>
