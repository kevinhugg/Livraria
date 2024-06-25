<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/livrosstyle.css">

    <title>bookshelf.com.br</title>
</head>
<body>

    <div class="fundo">
    </div>

    <header class="nav">

        <div class="book"><a href="../HTML/inicial.php"><h1>Bookshelf</h1><a></div>
    
        <div class="grupo">
          
          <ul class="navegacao">
    
            <li><a href="carrinho.php" id="uq">Carrinho</a></li>
            <li><a href="../HTML/escolha.php" id="int">Login</a></li>
    
          </ul>
    
        <div class="searchbox">
    
          <input  type="text" placeholder="Procurar">
          <button class="btn" type="button">pesquisar</button>
        </div>
    
      </header>
    
    
        <main>
            <section>

                
 
              
                <div class="carousel">
                    
                    <div class="carousel-item">
                        <img src="CAPAS/capa1.webp" alt="Capa do Ebook 1">
                        <p class="titli">O segredo nas sombras</p>
                        <p class="carousel-text">R$34,00</p>
                    </div>
                   

                </div>  
                <div class="sinopse">  

                  <h2 id="titulo">O Segredo nas Sombras</h2>
             <p id="texto">Sinopse: Após a derrota do vilão perigoso, Shóstenes e seus amigos são levados a uma cidade misteriosa, onde uma sombra sinistra paira sobre a população. Envolvidos em uma nova trama sombria, eles descobrem que são os escolhidos para desvendar uma profecia antiga e lutar contra o mal que ameaça consumir a cidade.</p>
  
           </div>
 
                <div class="button">

                  <a href="../HTML/carrinho.html"><input type="button" value="Adicionar ao carrinho" id="compra" onclick=""></a>

                  <a href="../HTML/inicial.php"><input type="button" value="Voltar a página incial" id="volta"></a>

                </div>

            </section>
        </main>
</body>
</html>