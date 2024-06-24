<?php

$dados = [];
$erro = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $email = $_POST['email'];
    $user = $_POST['user'];
    $idade = $_POST['idade'];
    $cep = $_POST['cep'];
    $senha = $_POST['senha'];

    if (isset($email, $user, $idade, $cep, $senha)) {

        $cep_formatado = preg_replace('/[^0-9]/', '', $cep);

        $url = "https://viacep.com.br/ws/{$cep_formatado}/json/";

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($curl);

        if ($response === false) {
            $erro = 'Erro ao consultar o CEP. Tente novamente.';
        } else {
            $endereco = json_decode($response, true);

            if (isset($endereco['logradouro'])) {
                $novo_registro = [
                    'email' => $email,
                    'user' => $user,
                    'idade' => $idade,
                    'cep' => $cep_formatado,
                    'logradouro' => $endereco['logradouro'],
                    'bairro' => $endereco['bairro'],
                    'localidade' => $endereco['localidade'],
                    'uf' => $endereco['uf'],
                    'senha' => $senha
                ];

                $arquivo = "vendedores.json";
                if (file_exists($arquivo)) {
                    $extrair_dados = file_get_contents($arquivo);
                    $dados = json_decode($extrair_dados, true);
                }

                $dados[] = $novo_registro;

                file_put_contents($arquivo, json_encode($dados, JSON_PRETTY_PRINT));

                header('Location: login.php?msg=registro salvo');
                exit;
            } else {
                $erro = "CEP não encontrado. Tente novamente.";
            }
        }

        curl_close($curl);

    } else {
        $erro = "Preencha todos os campos corretamente.";
    }

    header("Location: regvendedor.html?erro=" . urlencode($erro));
    exit;

} else {
    header("Location: regvendedor.html");
    exit;
}

?>