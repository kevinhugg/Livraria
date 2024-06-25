<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/logstyle.css">

    <title>Login</title>
</head>
<body>

    <header class="nav">

        <div class="book"><a href="inicial.php"><h1>Bookshelf</h1></a></div>

      </header>

    <div class="card">
        <img src="../IMG/ICONS/user.png" id="can">
        <br>
        <form action="logarusu.php" method="post">

            <label for="email">Email:</label>
            <input type="text" id="email" name="email" placeholder="insira seu email:">

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" placeholder="Insira sua senha:">


        <br>

            <input class="bota" type="submit" value="login">

            <br>

            <div class="link">
                Não possui uma conta? <br> <a href="../HTML/register.php">Registre-se já</a>
            </div>
    </div>
</form>
    <div class="fundo">
        <img src="../IMG/FOTO/funlogin.jpg" alt="Tela-roxa-com-elementos-literários">
    </div>

    <?php
                $msg = isset($_GET['msg'])?$_GET['msg']:'';
                echo $msg;
            ?>
    
</body>
</html>