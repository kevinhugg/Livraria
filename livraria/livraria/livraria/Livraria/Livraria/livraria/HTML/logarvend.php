<?php

$erro = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if (isset($email) && isset($senha)) {
        $arquivo2 = 'vendedores.json';
        $dados = [];

        if (file_exists($arquivo2)) {
            $extrair_dados2 = file_get_contents($arquivo2);
            $usuarios = json_decode($extrair_dados2, true);
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
            header('Location: inicial2.php');
            exit;
        } else {
            $erro = 'Email ou senha incorretos';
        }

    } else {
        $erro = 'Preencha TODOS os campos';
    }


    header("Location: login2.php?erro=" . urlencode($erro));
    exit;
}

header("Location: login2.php");
exit;
?>















































if (file_exists($arquivo2)) {
            $extrair_dados2 = file_get_contents($arquivo2);
            $vendedores = json_decode($extrair_dados2, true);
            $dados = array_merge($dados, $vendedores);
        }






























$arquivo2 = 'vendedores.json';