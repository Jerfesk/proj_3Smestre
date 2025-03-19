<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Loja Online</title>
    <link rel="stylesheet" type="text/css" href="style.css">



</head>
<body>
    <h1>      Bem-vindo à Shop.On!!<br>
        Onde você encontra tudo para seu PC</h1>



        <ul>
  <li><a href="index.html" title="Pagina Inicial">Inicio</a></li>
  <li><a href="about.html" title="Leva para página como uma descrição da empresa">Sobre Nós</a></li>
  <li><a class="active" href="services.html" title="Leva para página com os Nossos Serviços">Nossos Serviços</a></li>
  <li><a href="portfolio.html" title="Leva para página como os projetos realizados">Portfólio</a></li>
  <li><a href="contact.html" title="Leva para página Um formulário de contato para perguntas e tira dúvidas">Entre em Contato</a></li>
</ul>

    <?php
    // Simulação de dados de produtos (substituir por dados do MySQL)
    $produtos = [
        [
            'nome' => 'Produto 1',
            'descricao' => 'Descrição do Produto 1',
            'preco' => 29.99,
            'imagem' => 'imagem1.jpg'
        ],
        [
            'nome' => 'Produto 2',
            'descricao' => 'Descrição do Produto 2',
            'preco' => 49.99,
            'imagem' => 'imagem2.jpg'
        ],
        // Adicione mais produtos conforme necessário
    ];

    foreach ($produtos as $produto) {
        echo '<div class="produto">';
        echo '<img src="' . $produto['imagem'] . '" alt="' . $produto['nome'] . '" width="150">';
        echo '<h2>' . $produto['nome'] . '</h2>';
        echo '<p>' . $produto['descricao'] . '</p>';
        echo '<p>Preço: R$ ' . number_format($produto['preco'], 2, ',', '.') . '</p>';
        echo '<button>Adicionar ao Carrinho</button>';
        echo '</div>';
    }
    ?>

    <br>
    <a href="carrinho.php">Carrinho de Compras</a>

</body>
</html>
