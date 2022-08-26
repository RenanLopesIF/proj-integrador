<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('/login/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/login/css/formulario.css') ?>">
    <title>Login</title>
</head>

<body>
    <form method="POST" action="<?= base_url("/autenticar") ?>">
        <h3>login</h3>
        <label>Login</label>
        <input class="email" type="text" name="username" placeholder="Login">
        <label>Senha</label>
        <input class="senha" type="password" name="password" placeholder="Senha">
        <div class="bt">
            <input type="submit" value="continue" onclick="verificar()">

            <input id="login-btn-cadastrar" type="button" value="cadastre-se">
        </div>
    </form>

    <script>
        function cadastrar() {
            window.location = "<?= base_url('/cadastrar') ?>"
        };

        document.querySelector("#login-btn-cadastrar").onclick = cadastrar;
    </script>
</body>

</html>