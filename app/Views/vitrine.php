<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="<?= base_url("vitrine/css/style.css") ?>">
    <link rel="stylesheet" href="<?= base_url("vitrine/css/vitrine.css") ?>">
    <title>loja</title>
</head>

<body>

    <div class="vtr-navigation">
        <h2>Loja virtual</h2>
        <nav class="navbar">
            <ul class="menu">
                <li><a href="">Home</a></li>
                <li><a href="">Produtos</a></li>
                <li><a href="">Login</a></li>
                <li><a href="">Criar conta</a></li>
            </ul>
        </nav>
        <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" height="48" width="48">
                <path d="M14.35 43.95q-1.5 0-2.55-1.05-1.05-1.05-1.05-2.55 0-1.5 1.05-2.55 1.05-1.05 2.55-1.05 1.5 0 2.55 1.05 1.05 1.05 1.05 2.55 0 1.5-1.05 2.55-1.05 1.05-2.55 1.05Zm20 0q-1.5 0-2.55-1.05-1.05-1.05-1.05-2.55 0-1.5 1.05-2.55 1.05-1.05 2.55-1.05 1.5 0 2.55 1.05 1.05 1.05 1.05 2.55 0 1.5-1.05 2.55-1.05 1.05-2.55 1.05Zm-22.6-33 5.5 11.4h14.4l6.25-11.4Zm-1.5-3H39.7q1.15 0 1.75 1.05.6 1.05 0 2.1L34.7 23.25q-.55.95-1.425 1.525t-1.925.575H16.2l-2.8 5.2h24.55v3h-24.1q-2.1 0-3.025-1.4-.925-1.4.025-3.15l3.2-5.9L6.45 7h-3.9V4H8.4Zm7 14.4h14.4Z" />
            </svg>
        </a>
    </div>


    <div class="section-1">
        <div class="vtr-text-principal">
            <h1>Seja bem vindo</h1>
            <h2>Seus livos preferidos aqui.</h2>
            <p>Aqui tem para todos os estilos.</p>

        </div>
    </div>
    <div>


        <div class="section-2">
            <h2>Estante principal</h2>
            <div id="gallery" class="gallery"></div>

        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Item para ser comprado</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body bg-secondary">
                        <div class="gallery">
                            <div class="image-holder">
                                <img id="modal-imagem-livro" alt="Capa do livro">
                                <div class="text">
                                    <h2 id="modal-titulo-livro"></h2>
                                    <p id="modal-preco-livro"></p>
                                    <p id="modal-autor-livro"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Comprar</button>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
        </script>
        <script src="<?= base_url("vitrine/js/index.js") ?>"></script>
</body>

</html>