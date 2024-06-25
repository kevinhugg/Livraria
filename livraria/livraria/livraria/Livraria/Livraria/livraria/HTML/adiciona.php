<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/adicionandoaqui.css">

    <title>Registro vendedor</title>
</head>
<body>

    <header class="nav">

        <div class="book"><a href="inicial2.php"><h1>Bookshelf</h1></a></div>

      </header>

    <div class="card-3">
        <form action="add_produto.php" method="POST">

            <label for="nome">nome:</label><br>
            <input class="venda" type="text" id="nome" name="nome" placeholder="insira o nome do produto:"><br>

            <label for="genero">Gênero:</label><br>
            <input class="venda" type="text" id="genero" name="genero" placeholder="Insira o gênero do livro:"><br>

            <label for="preco">Preço:</label><br>
            <input class="venda" type="number" id="preco" name="preco" placeholder="Insira o preco do livro:"><br>
            <input class="adiciona" type="submit" value="Adicionar">

            <br>

    </div>
</form>

<div class="produto-lista">
        <h2>Produtos</h2>
        <?php
    $arquivo = "produto.json";
    if (file_exists($arquivo)) {
        $extrair_dados = file_get_contents($arquivo);
        $dados = json_decode($extrair_dados, true);
        if (!empty($dados)) {
            foreach ($dados as $index => $produto) {
                echo '<div class="produto-item">';
                echo '<div>Nome: ' . htmlspecialchars($produto['nome']) . '</div>';
                echo '<div>Gênero: ' . htmlspecialchars($produto['genero']) . '</div>';
                echo '<div>Preço: ' . htmlspecialchars($produto['preco']) . '</div>';
                echo '<div class="actions">';
                echo '<form action="delete_produto.php" method="POST" style="display:inline-block;">';
                echo '<input type="hidden" name="index" value="' . $index . '">';
                echo '<button type="submit" class="delete">Apagar</button>';
                echo '</form>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo '<div class="produto-item">Nenhum produto encontrado.</div>';
        }
    } else {
        echo '<div class="produto-item">Nenhum produto encontrado.</div>';
    }
    ?>
</div>

    <div class="fundo">
        <img src="../IMG/FOTO/funlogin.jpg" alt="Tela-roxa-com-elementos-literários">
    </div>
    
</body>
</html>