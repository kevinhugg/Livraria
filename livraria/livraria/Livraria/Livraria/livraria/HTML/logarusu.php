<?php

$erro = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if (isset($email) && isset($senha)) {
        $arquivo1 = 'usuarios.json';
        $dados = [];

        if (file_exists($arquivo1)) {
            $extrair_dados1 = file_get_contents($arquivo1);
            $usuarios = json_decode($extrair_dados1, true);
            $dados = array_merge($dados, $usuarios);
        }


        $usuario_encontrado = false;
        foreach ($dados as $usuario) {
            if ($usuario['email'] == $email && $usuario['senha'] == $senha) {
                $usuario_encontrado = true;
                break;
            }
        }

        if ($usuario_encontrado) {
            header('Location: inicial.php');
            exit;
        } else {
            $erro = 'Email ou senha incorretos';
        }

    } else {
        $erro = 'Preencha TODOS os campos';
    }


    header("Location: login.php?erro=" . urlencode($erro));
    exit;
}

header("Location: login.php");
exit;
?>