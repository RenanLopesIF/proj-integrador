<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('/recuperar_senha/css/recuperar.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/recuperar_senha/css/style.css') ?>">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="form">
            <form action="#">
                <div class="form-header">
                    <div class="title">
                        <h1>Atualizar senha</h1>
                    </div>
                </div>
                <div class="txt-informative">
                    <p>Preencha o dados abaixo para efetuar troca de senha.
                    </p>
                </div>

                <div class="field-group">
                    <div class="data-field">
                        <label for="email">Informe um e-mail, de confirmação.</label>
                        <input id="email" type="email" name="email" placeholder="Email" required>
                    </div>

                    <div class="data-field">
                        <label for="password">Senha antiga</label>
                        <input id="password" type="password" name="password" placeholder="Senha" required>
                    </div>

                    <div class="data-field">
                        <label for="password">Senha nova</label>
                        <input id="password" type="password" name="password" placeholder="Senha" required>
                    </div>

                </div>
                <div class="txt-informative">
                    Apos recuperar sua senha,verifique seu endereço de email com a confirmação da atualização.
                </div>
                <div class="update-button">
                    <button type="button" class="btn btn-warning bttwo">Atualizar</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>