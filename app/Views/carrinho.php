<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
    crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?= base_url('/carrinho/css/style.css') ?> ">
    <link rel="stylesheet" href="<?= base_url('/carrino/css/carrinho.css') ?> ">

    <title>Document</title>
</head>

<body>
    <div class="container">
        <header class="cabeca">cabeçalho</header>
        <div class="containerFilha">
            <div class="carrinho">
                <div class="sessao1">
                    <div class="txt1">
                        <h1>Meu carrinho</h1>
                        <p>Produto</p>
                    </div>
                    <div class="txt2">
                        <p>Quantidade</p>
                        <p>Tempo de entrega</p>
                        <p>Preço</p>
                    </div>
                </div>
                <div class="sessao2">
                    <div class="infoLivro">
                        <div class="imagem">
                            <img src="./assets/img/kimetsu.webp" alt="">
                            <div class="txt3">
                                <p>Nome do produto</p>
                                <h2>Caracteristicas do produto</h2>
                            </div>
                        </div>
                        <div class="unidadeLivro">
                            <div class="btCompra">
                                <button class="menor" id="menor">-</button>
                                <span id="quantityBooks">0</span>
                                <button class="maior" id="maior">+</button>
                            </div>
                            <p>0 dias</p>
                            <p>$00,00</p>
                        </div>
                    </div>
                </div>

                <!-- <div class="sessao2">
                    <div class="infoLivro">
                        <div class="imagem">
                            <img src="./assets/img/kimetsu.webp" alt="">
                            <div class="txt3">
                            <p>nome do produto</p>
                            <h2>caracteristicas do produto</h2>
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
                        </div>
                    </div>
                </div> -->

                <div class="sessao3">
                    <div class="frete">
                        <p>Calcule frete</p>
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
                            <li>esconto</li>
                        </ul>
                        <ul>
                            <li>$00,00</li>
                            <li>$00,00</li>
                            <li>$00,00</li>
                        </ul>
                    </div>
                    <div class="final">
                        <div class="valorF">
                            <p>Valor total</p>
                            <p>$00,00</p>
                        </div>
                        <input type="button" value="finalizar" placeholder="finalizar compra">
                    </div>
                </div>
            </div>
        </div>

        <footer class="rodape">
            <h1>Rodapé</h1>
        </footer>
    </div>
    <script src="./assets/js/main.js"></script>
</body>

</html>