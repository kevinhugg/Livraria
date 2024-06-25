<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $index = $_POST['index'];
    $arquivo = 'produto.json';

    if (file_exists($arquivo)) {
        $extrair_dados = file_get_contents($arquivo);
        $dados = json_decode($extrair_dados, true);

        if (isset($dados[$index])) {
            array_splice($dados, $index, 1);
            file_put_contents($arquivo, json_encode($dados));
        }
    }
}

header('Location: adiciona.php');
exit();
?>
