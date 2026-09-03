<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LANches
    </title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
      <title>MeuSupermercado</title>
  <link rel="icon" type="img/favicon.png" href="img/favicon.png">
</head>

<body>
    <header class="cabecalho">
        <div class="logo">
            <img src="img/logo.png" alt="MeuSupermercado">
        </div>
        <button class="menu-toggle" aria-label="Abrir menu">&#9776;</button>
        <nav class="menu">
            <a href="#">Início</a>
            <a href="#">Cadastrar</a>
            <a href="#">Produtos</a>
            <a href="#">Sobre</a>
            <a href="#">Contato</a>
            <a href="#">Ajuda</a>
        </nav>
        <div class ="carrinho">
            <div class ="ajuste_icone_carrinho">
                <a href="carrinho.php"><img src="img/carrinhoIcone.png" alt="Carrinho de compras"></a>
                <span class="valor_carrinho">730</span>
            </div>
        </div>
    </header>
    <script>
        const toggleBtn = document.querySelector('.menu-toggle');
        const menu = document.querySelector('.menu');

        toggleBtn.addEventListener('click', () => {
            menu.classList.toggle('ativo');
        });
    </script>