<?php

$dados = [];
$erro = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $email = $_POST['email'];
    $user = $_POST['user'];
    $idade = $_POST['idade'];
    $senha = $_POST['senha'];

    if (isset($email) && isset($user) && isset($idade) && isset($senha)) {
        $arquivo = "usuarios.json";

        if(file_exists($arquivo)){

            $extrair_dados = file_get_contents($arquivo);

            $dados = json_decode($extrair_dados, true);
        };

        $novo_registro = [
            'email' => $email,
            'user' => $user,
            'idade' => $idade,
            'senha' => $senha
        ];

        $dados[] = $novo_registro;

        file_put_contents($arquivo, json_encode($dados));

        header('location: inicial.php?msg=Registro salvo');

    }else {
    $erro = "Preeencha TODOS os campos";
    header('location: register.php?erro='.$erro);
    };
};