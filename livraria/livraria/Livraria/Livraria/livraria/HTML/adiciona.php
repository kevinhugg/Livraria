<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/logstyle.css">

    <title>Registro vendedor</title>
</head>
<body>

    <header class="nav">

        <div class="book"><a href="inicial2.php"><h1>Bookshelf</h1></a></div>

      </header>

    <div class="card-2">
        <form action="vendedor.php" method="POST">

            <label for="email">Email:</label>
            <input type="text" id="email" name="email" placeholder="insira seu email:">

            <label for="user">usuario:</label><br>
            <input type="text" id="user" name="user" placeholder="Insira seu usuario:"><br>

            <label for="idade">Idade:</label>
            <input type="number" id="idade" name="idade" placeholder="Insira a sua idade:">

            <label for="endereco">cep:</label><br>
            <input type="text" id="cep" name="cep" placeholder="insira seu cep:"><br>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" placeholder="Insira sua senha:">

        <br>

            <input class="bota" type="submit" value="criar">

            <br>

    </div>
</form>
    <div class="msg">
            <?php
                $msg = isset($_GET['msg'])?$_GET['msg']:'';
                echo $msg;
            ?>
        </div>

    <div class="fundo">
        <img src="../IMG/FOTO/funlogin.jpg" alt="Tela-roxa-com-elementos-literários">
    </div>
    
</body>
</html>