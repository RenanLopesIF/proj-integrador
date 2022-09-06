<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="<?= base_url('/img/livros.png') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('/Editar_livro/css/Editar_livros.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/Editar_livro/css/style.css') ?>">
    <title>Editar livro</title>
</head>

<body>

    <div class="container">

        <form id="form" action="" method="POST">
            <div class="form-header">
                <div class="title">
                    <h1>Editar livro</h1>
                </div>
            </div>
            <div class="input-group">

                <div class="input-box">
                    <label for="titulo">Título</label>
                    <input id="titulo" type="text" name="titulo" placeholder="Título" required>
                </div>

                <div class="input-box">
                    <label for="autor">Autor</label>
                    <input id="autor" type="text" name="autor" placeholder="Autor" required>
                </div>

                <div class="input-box">
                    <label for="editora">Editora</label>
                    <input id="editora" type="text" name="editora" placeholder="Editora" required>
                </div>

                <div class="input-box">
                    <label for="edicao">Edição</label>
                    <input id="edicao" type="number" name="edicao" placeholder="Edição" required>
                </div>

                <div class="input-box">
                    <label for="ano_publicacao">Ano de publicação</label>
                    <input id="ano_publicacao" type="number" name="ano_publicacao" placeholder="Ano de publicação" required>
                </div>

                <div class="input-box">
                    <label for="idioma">Idioma</label>
                    <input id="idioma" type="idioma" name="idioma" placeholder="Idioma" required>
                </div>

                <div class="input-box">
                    <label for="genero">Gênero</label>
                    <input id="genero" type="genero" name="genero" placeholder="Gênero" required>
                </div>

                <div class="input-box">
                    <label for="paginas">N° de páginas</label>
                    <input id="paginas" type="number" name="paginas" placeholder="N° de páginas" required>
                </div>

                <div class="input-box">
                    <label for="url_capa">URL da capa</label>
                    <input id="url_capa" type="text" name="url_capa" placeholder="https://example.com/image.png" required>
                </div>

                <div class="input-box">
                    <label for="tipo_capa">Tipo de capa</label>
                    <input id="tipo_capa" type="text" name="tipo_capa" placeholder="Tipo de capa" required>
                </div>

                <div class="input-box">
                    <label for="conservacao">Estado de conversavação</label>
                    <input id="conservacao" type="text" name="conservacao" placeholder="Estado de conversavação" required>
                </div>

                <div class="input-box">
                    <label for="lote">Código do lote</label>
                    <input id="lote" type="text" name="lote" placeholder="lote" required>
                </div>

                <div class="input-box">
                    <label for="qtd">Quantidade de itens</label>
                    <input id="qtd" type="text" name="qtd" placeholder="Quantidade de itens" required>
                </div>

                <div class="input-box">
                    <label for="sinopse">Sinopse</label>
                    <textarea name="sinopse" id="sinopse" cols="70" rows="4"></textarea>
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