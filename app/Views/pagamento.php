<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Pagamento</title>
    <link rel="stylesheet" href="<?= base_url("/style.css") ?>">
    <link rel="stylesheet" href="<?= base_url("/pagamento/css/pagamento.css") ?>">
</head>

<body>
    <?php
    echo $this->include('cabecalho');
    echo $this->include('toast');
    ?>
    <header id="header">
        <div class="metodo">
            <h1>Método de pagamento:</h1>
            <div class="butons-metodo">
                <button id="cartao">Cartão de crédito</button>
                <button id="boleto">Boleto</button>
            </div>
        </div>
        <form id="form" action="<?= base_url('/pagamento/confirmar/credito') ?>" method="post">
            <div class="desativado-cartao cartao-credito">
                <div class="basico">
                    <label for="numCartao">Número do cartão:</label>
                    <input class="formInput" type="number" name="numCartao" id="numCartao" placeholder="Digite o numero do cartão" required>
                    <span class="errorName" id="errorName">Valid</span>
                    <label for="nomeCartao">Nome impresso no cartão:</label>
                    <input class="formInput" type="text" name="nomeCartao" id="nomeCartao" placeholder="Seu nome" required>
                </div>
                <label for="cvv">Código de segurança (CVV):</label>
                <input class="formInput" type="number" name="cvv" id="cvv" placeholder="Somente 3 números" required>
                <div class="data">
                    <label for="validade">Validade:</label>
                    <div class="mes">
                        <select name="mes" id="mes">
                            <option class="cor" value="1" selected>01</option>
                            <?php
                            for ($i = 1; $i <= 12; $i++) {
                                echo "<option class='cor' value='$i'>$i</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="ano">
                        <select name="ano" id="ano">
                            <option class="cor" value="2022" selected>2022</option>
                            <?php
                            $currentYear = intval(date('Y', time()));
                            $maxYear = $currentYear + 12;
                            for ($i = $currentYear; $i <= $maxYear; $i++) {
                                echo "<option class='cor' value='$i'>$i</option>";
                            }
                            ?>
                        </select>
                    </div>

                </div>
                <label id="parcelas-label" for="parcelas">N° de parcelas</label>
                <select name="parcelas" id="parcelas">
                    <option class="cor" value="1" selected>01</option>
                    <?php
                    for ($i = 1; $i <= 12; $i++) {
                        echo "<option class='cor' value='$i'>$i</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="total-credito">
                <button type="submit" id="pagamento" class="pagamento">Confirmar</button>
                <p id="valorCredito">Total: R$ <?= $total ?></p>
            </div>
        </form>
        <form action="" id="form-1">
            <div class="desativado-boleto boleto-1">
                <div class="name-text">
                    <label for="nome">Nome:</label>
                    <input class="formInput" type="text" id="nome" placeholder="Digite seu nome" required value="<?= session('nome') ?>">
                </div>
                <div class="cpf-text">
                    <label for="cpf">CPF:</label>
                    <input class="formInput" type="text" id="cpf" placeholder="Digite seu cpf" required value="<?= session('cpf') ?>">
                </div>
            </div>
            <p id="errorCpf"></p>
            <div class="total-pagar" disabled>
                <button type="submit" id="gerarBoleto" class="gerarBoleto">
                    <a id="baixarBoleto" href="<?= base_url("/pagamento/boleto.pdf") ?>" download="boleto">Confirmar</a>
                </button>
                <p id="valorBoleto">Total: R$ <?= $total ?></p>
            </div>
        </form>
    </header>
    <script src="<?= base_url("/pagamento/js/main.js") ?>"></script>
</body>

</html>