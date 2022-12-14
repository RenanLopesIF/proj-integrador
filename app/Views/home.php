<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="<?= base_url("/style.css") ?>">
    <link rel="stylesheet" href="<?= base_url("home/css/home.css") ?>">
    <title>loja</title>
</head>

<body>

    <?php
    echo $this->include('cabecalho');
    echo $this->include('toast');
    ?>

    <div class="section-1">
        <div class="vtr-text-principal">
            <h1>Seja bem vindo</h1>
            <h2>Seus livos preferidos aqui.</h2>
            <p>Aqui tem para todos os estilos.</p>

        </div>
    </div>
    <!-- <div> -->


    <div class="section-2">
        <h2>Estante principal</h2>
        <div id="gallery" class="gallery"></div>

    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <h2 id="modal-titulo-livro"></h2>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-secondary">
                    <div id="modal-gallery">
                        <div id="modal-body-top">
                            <img id="modal-imagem-livro" alt="Capa do livro">
                            <h5 id="modal-sinopse"></h5>
                        </div>
                        <div id="modal-body-bot">
                            <p id="modal-autor-livro"></p>
                            <p id="modal-editora"></p>
                            <p id="modal-edicao"></p>
                            <p id="modal-idioma"></p>
                            <p id="modal-total-paginas"></p>
                            <p id="modal-tipo-capa"></p>
                            <p id="modal-genero"></p>
                            <p id="modal-ano-publicacao"></p>
                            <p id="modal-preco-livro"></p>
                        </div>
                    </div>
                </div>
                <div id="modal-footer" class="modal-footer">
                    <div><span id="txtQtd">Quantidade:</span> <input type="number" name="" value="1" id="qtd-items"></div>
                    <div> <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button id="modal-botao-comprar" type="button" class="btn btn-primary">Comprar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="position: fixed; top: 0; right: 0;">
        <div aria-live="polite" aria-atomic="true" style="margin-top: 20px; position: relative; min-height: 200px;">
            <div class="toast hide" data-autohide="true" style="border-radius: 15px 0 0 15px;">
                <div id="box-toast" style="border-radius: 15px 0 0 15px;min-height: 80px;" class="toast-body text-white">
                    <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
                    <span id="msg-toast"></span>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <script src="<?= base_url("home/js/index.js") ?>"></script>
</body>

</html>