<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="base_url(login/css/login.css)">
    <link rel="stylesheet" href="base_url(login/css/style.css)">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="assets/img/moça_dog.svg" alt="">
        </div>
        <div class="form">
            <form action="#">
                <div class="form-header">
                    <div class="title">
                        <h1>Conecte-se</h1>
                    </div>
                    <div class="login-button">
                        <button type="button" class="btn btn-warning bttwo">Criar conta</button>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <label for="username">E-mail</label>
                        <input id="username" type="username" name="username" placeholder="E-mail" required>
                    </div>
                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input id="password" type="password" name="password" placeholder="Senha" required>
                    </div>

                </div>
                <div class="continue-button">
                    <button type="button" class="btn btn-warning bttwo">Continue</button>
                    <p><a href="#">Esqueceu a senha?</a></p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>