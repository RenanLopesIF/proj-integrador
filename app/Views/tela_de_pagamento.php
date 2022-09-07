<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Pagamento</title>
    <link rel="stylesheet" href="<?base_url("/tela_de_pagamento/css/style.css")?>">
    <link rel="stylesheet" href="<?base_url("/tela_de_pagamento/css/pagamento.css")?>">
</head>
<body>
    <header id="header">
        <div class="metodo">
            <h1>Metodo de pagamento:</h1>
            <div class="butons-metodo">
                <button id="cartao">Cartão de crédito</button>
                <button id="boleto">Boleto</button>
            </div>
        </div>
        <form id="form" action="" method="post">
            <div class="desativado-cartao cartao-credito">
                <div class="basico">
                    <label for="numCartao">Número do cartão:</label>
                    <input type="number" name="numCartao" id="numCartao" placeholder="Digite o numero do cartão" required>
                    <span class="errorName" id="errorName">Valid</span>
                    <label for="nomeCartao">Nome do cartão:</label>
                    <input type="text" name="nomeCartao" id="nomeCartao" placeholder="Seu nome" required>
                </div>
                <label for="cvv">Código de segurança (CVV):</label>
                <input type="number" name="cvv" id="cvv" placeholder="Somente 3 números" required>
                <div class="data">
                    <label for="dataExpedicao">Data de expedição:</label>
                    <div class="mes">
                        <select name="mes" id="mes">
                            <option class="cor" value="1"  selected>01</option>
                            <option class="cor" value="2">02</option>
                            <option class="cor" value="3">03</option>
                            <option class="cor" value="4">04</option>
                            <option class="cor" value="5">05</option>
                            <option class="cor" value="6">06</option>
                            <option class="cor" value="7">07</option>
                            <option class="cor" value="8">08</option>
                            <option class="cor" value="9">09</option>
                            <option class="cor" value="10">10</option>
                            <option class="cor" value="11">11</option>
                            <option class="cor" value="12">12</option>
                        </select>
                    </div>
                    <div class="ano">
                        <select name="ano" id="ano">
                            <option class="cor" value="2022" selected>2022</option>
                            <option class="cor" value="2023">2023</option>
                            <option class="cor" value="2024">2024</option>
                            <option class="cor" value="2025">2025</option>
                            <option class="cor" value="2026">2026</option>
                            <option class="cor" value="2027">2027</option>
                            <option class="cor" value="2028">2028</option>
                            <option class="cor" value="2029">2029</option>
                            <option class="cor" value="2030">2030</option>
                            <option class="cor" value="2032">2032</option>
                            <option class="cor" value="2033">2033</option>
                            <option class="cor" value="2034">2034</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="total-credito">
                <button type="submit" id="pagamento" class="pagamento">Pagar</button>
                <p id="valorCredito">Total: R$ 100,00</p>
            </div>
        </form>
        <form action="" id="form-1">
            <div class="desativado-boleto boleto-1">
                <div class="name-text">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" placeholder="Digite seu nome" required>
                </div>
                <div class="cpf-text">
                    <label for="cpf">CPF:</label>
                    <input type="text" id="cpf" placeholder="Digite seu cpf" required>
                </div>
            </div>
            <p id="errorCpf"></p>
            <div class="total-pagar" disabled>
                <button type="submit" id="gerarBoleto" class="gerarBoleto" >
                    <a id="baixarBoleto" href="<?=base_url("/tela_de_pagamento/boleto.pdf")?>" download="boleto">baixar boleto</a>
                </button>
                <p id="valorBoleto">Total: R$ 100,00</p>
            </div>
        </form>
    </header>
    <script src="<?base_url("tela_de_pagamento/js/main.js")?>"></script>
</body>
</html>