<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
    crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?= base_url('/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/carrinho/css/carrinho.css') ?>">

    <title>Document</title>
</head>

<body>
    <?php
    echo $this->include('cabecalho');
    echo $this->include('toast');
    ?>
    <div class="container">
        <!-- <header class="cabeca">cabeçalho</header> -->
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
                        <a href="<?= base_url('/index.php/pagamento') ?>">
                            <button id='btnFinalizarPedido' type="submit">Finalizar</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <footer class="rodape">
            <h1>©Loja Virtual 2022</h1>
        </footer>
    </div>
    <script src="<?= base_url("/carrinho/js/main.js") ?>"></script>
</body>

</html>