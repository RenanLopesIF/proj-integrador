<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/carrinho.css">

    <title>Document</title>
</head>

<body>
    <div class="container">
        <header class="cabeca">cabeçalho</header>
        <div class="containerFilha">
            <div class="carrinho">
                <div class="sessao1">
                    <div class="txt1">
                        <h1>meu carrinho</h1>
                        <p>produto</p>
                    </div>
                    <div class="txt2">
                        <p>quantidade</p>
                        <p>tempo de entrega</p>
                        <p>preço</p>
                    </div>
                </div>
                <div class="sessao2">
                    <div class="idLivro">
                        <div class="imagem">
                            <img src="./assets/img/kimetsu.webp" alt="">
                            <div class="txt3">
                                <p>nome do produto</p>
                                <h2>caracteristicas do produto</h2>
                                <!-- <p>caracteristicas do produto</p> -->
                            </div>
                        </div>
                        <div class="divLivro">
                            <div class="btCompra">
                                <button class="menor">-</button>
                                <span>0</span>
                                <button class="maior">+</button>
                            </div>
                            <!-- <button><a href="">-</a>0 <a href="">+</a></button> -->
                            <!-- <a href="">- 0 +</a> -->
                            <p>0 dias</p>
                            <p>$00,00</p>
                        </div>
                    </div>
                </div>
                <div class="sessao3">
                    <div class="frete">
                        <p>calcule frete</p>
                        <input type="number" name="" id="" placeholder="000000-000">
                    </div>
                    <input type="button" value="ok" class="confirm" placeholder="ok">
                    <!-- <input class="confirm" type="button" placeholder="ok"> -->
                </div>
            </div>
            <div class="resumo">
                <div class="containerBorda">
                    <div class="rFinal">
                        <p>resumo do pedido</p>
                    </div>
                    <div class="dadosFinal">
                        <ul>
                            <li>valor do pedido</li>
                            <li>frete</li>
                            <li>desconto</li>
                        </ul>
                        <ul>
                            <li>$00,00</li>
                            <li>$00,00</li>
                            <li>$00,00</li>
                        </ul>
                    </div>
                    <div class="final">
                        <div class="valorF">
                            <p>valor total</p>
                            <p>$00,00</p>
                        </div>
                        <input type="button" value="finalizar" placeholder="finalizar compra">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="rodape"></footer>
</body>

</html>