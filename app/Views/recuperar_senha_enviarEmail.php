<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url("/style.css") ?>">
    <link rel="stylesheet" href="<?= base_url("/recuperar_senha/css/enviarEmail.css") ?>">
    <title>Document</title>
</head>

<body>
    <header id="header">
        <h1 class="titulo">Recuperação de email</h1>
        <form action="" method="post" id="form">
            <div class="data-field">
                <div id="sendEmail">
                    Email de recuperação enviado com sucesso
                </div>
                <label id="labelEmail" for="email">Seu email:</label>
                <input id="email" type="email" name="email" placeholder="Email" required>
            </div>
            <button id="enviandoEmail" type="submit" class="btn btn-warning bttwo">Atualizar</button>
        </form>
    </header>
    <script src="<?= base_url("/recuperar_senha/js/enviarEmail.js") ?>"></script>
</body>

</html>