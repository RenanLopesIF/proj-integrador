<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url("/cadastro_livro/formulario.css") ?>">
    <link rel="stylesheet" href="<?= base_url("/style.css") ?>">
    <title>Cadastro lote</title>
</head>

<body>
    <?php
    echo $this->include('cabecalho');
    echo $this->include('toast');
    ?>
    <div class="container">
        <form id="form" action="<?= base_url("/cadastrar/lote/inserir") ?>" method="POST">
            <div class="form-header">
                <div class="title">
                    <h1>Cadastrar lote</h1>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <label for="lote">Código do lote</label>
                    <input id="lote" type="text" name="lote" placeholder="Código do lote" required>
                </div>

                <div class="input-box">
                    <label for="preco">Preço</label>
                    <input id="preco" step="0.01" type="number" name="preco" placeholder="Preço" required>
                </div>

                <div class="input-box">
                    <label for="pais">Pais</label>
                    <input id="pais" type="text" name="pais" placeholder="País" required>
                </div>

                <div class="input-box">
                    <label for="Estado">Estado</label>
                    <input id="estado" type="text" name="estado" placeholder="Estado" required>
                </div>

                <div class="input-box">
                    <label for="cidade">Cidade</label>
                    <input id="cidade" type="text" name="cidade" placeholder="Cidade" required>
                </div>

                <div class="input-box">
                    <label for="bairro">Bairro</label>
                    <input id="bairro" type="text" name="bairro" placeholder="Bairro" required>
                </div>

                <div class="input-box">
                    <label for="rua">Rua</label>
                    <input id="rua" type="text" name="rua" placeholder="Rua" required>
                </div>
                <div class="input-box">
                    <label for="numero">Número</label>
                    <input id="numero" type="text" name="numero" placeholder="N°" required>
                </div>
                <div class="input-box">
                    <label for="cep">CEP</label>
                    <input id="cep" type="text" name="cep" placeholder="CEP" required>
                </div>

            </div>
            <div class="buttons">
                <a href="javascript:history.back()">
                    <button type="button" id="btn-back">Voltar</button>
                </a>
                <button type="submit" class="btn btn-warning bttwo">Cadastrar</button>
            </div>
        </form>
    </div>
</body>

</html>