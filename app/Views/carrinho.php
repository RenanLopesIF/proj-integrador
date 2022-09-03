<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
    crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?= base_url('/carrinho/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/carrinho/css/carrinho.css') ?>">

    <title>Document</title>
</head>

<body>
    <div class="container">
        <header class="header">cabeçalho</header>
        <div class="containerFilha">
            <div class="carrinho">
                <div id="sessao1" class="sessao1">
                    <div class="txt1">
                        <h1>Meu carrinho</h1>
                        <p>Produto</p>
                    </div>
                    <div class="txt2">
                        <p>Quantidade</p>
                        <p>Tempo de entrega</p>
                        <p>Preço</p>
                    </div>

                    <div class="infoLivro">
                        <div class="imagem">
                            <img src="./assets/img/kimetsu.webp" alt="">
                            <div class="txt3">
                                <h2 id="modal-titulo-livro">titulo </h2>
                                <p id="modal-autor-livro">atuor </p>
                                <p id="modal-editora">editora </p>
                                <p id="modal-edicao">edição </p>
                                <p id="modal-ano-publicacao">ano publicaçao</p>
                                <p id="modal-idioma">idioma </p>
                                <p id="modal-total-paginas">numro de paginas</p>
                                <p id="modal-tipo-capa">estilo da capa</p>
                                <p id="modal-genero">genero </p>
                                <p id="modal-preco-livro">preço </p>
                            </div>
                        </div>
                        <div class="unidadeLivro">
                            <div class="btCompra">
                                <button class="menor">-</button>
                                <span>0</span>
                                <button class="maior">+</button>
                            </div>
                            <p>0 dias</p>
                            <p>$00,00</p>
                            <button><img src="./assets/img/delete_forever_FILL0_wght400_GRAD0_opsz48.svg"></button>
                        </div>
                    </div>

                </div>
                <div id='sessao3' class="sessao3">
                    <div class="frete">
                        <p>calcule frete</p>
                        <div class="cepOk">
                            <input type="number" class="confirm" name="" id="" placeholder="000000-000">
                            <input type="button" value="ok" class="confirm" placeholder="ok">
                        </div>
                    </div>
                </div>
            </div>

            <div class="resumo">
                <div class="containerBorda">
                    <div class="rFinal">
                        <p>Resumo do pedido</p>
                    </div>
                    <div class="dadosFinal">
                        <ul>
                            <li>Valor do pedido</li>
                            <li>Frete</li>
                            <li>Desconto</li>
                        </ul>
                        <ul>
                            <li id='valorPedido'></li>
                            <li id="valorFrete"></li>
                            <li id="valorDesconto"></li>
                        </ul>
                    </div>
                    <div class="final">
                        <div class="valorF">
                            <p>Valor total</p>
                            <p id="valorTotalPedido"></p>
                        </div>
                        <button id='btnFinalizarPedido' type="submit">Finalizar</button>
                    </div>
                </div>
            </div>
        </div>

        <footer class="rodape">
            <h1>Rodapé</h1>
        </footer>
    </div>
    <script src="<?= base_url("/carrinho/js/main.js") ?>"></script>
</body>

</html>