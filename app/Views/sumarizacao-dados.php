<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./img/libros.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('/sumarizacao_dados/css/sumarizacao.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/sumarizacao_dados/css/style.css') ?>">
    <title>sumarização dados</title>
</head>

<body>
    <div class="container">
        <form id="form" action="" method="POST">
            <div class="form-header">
                <div class="title">
                    <h1>sumarização de dados</h1>
                </div>
            </div>
            <ul class="lista">
                <div class="dado-lista">
                    <label for="information">lucro do mês</label>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas architecto a dolor deserunt? Nihil quibusdam expedita quo dignissimos, beatae voluptates nesciunt labore dolorem dolores provident. Reprehenderit molestiae magni quos laudantium?</li>
                </div>
                <div class="dado-lista">
                    <label for="information">lucro do mês</label>
                    <li>101101010</li>
                </div>
                <div class="dado-lista">
                    <label for="information">lucro do mês</label>
                    <li>101101010</li>
                </div>
                <div class="dado-lista">
                    <label for="information">lucro do mês</label>
                    <li>101101010</li>
                </div>

            </ul>
            <div class="buttons">
                <a href="javascript:history.back()">
                    <button type="button" id="btn-back">Voltar</button>
                </a>
        </form>
    </div>
</body>

</html>