<?php

$dados = [];
$erro = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $nome = $_POST['nome'];
    $genero = $_POST['genero'];
    $preco = $_POST['preco'];

    if (isset($nome) && isset($genero) && isset($preco)) {
        $arquivo = "produto.json";

        if(file_exists($arquivo)){

            $extrair_dados = file_get_contents($arquivo);

            $dados = json_decode($extrair_dados, true);
        };

        $novo_registro = [
            'nome' => $nome,
            'genero' => $genero,
            'preco' => $preco
        ];

        $dados[] = $novo_registro;

        file_put_contents($arquivo, json_encode($dados));

        

    }else {
    $erro = "Preeencha TODOS os campos";
    header('location: adiciona.php?erro='.$erro);
    };
};