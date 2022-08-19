<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastrar</title>
    <link rel="stylesheet" href="cadastro_usuario/css/style.css" />
    <link rel="stylesheet" href="cadastro_usuario/css/formulario.css">
</head>

<body>
    <form action="" method="post">
        <h2>Crie sua conta</h2>
        <div class="comum">
            <label for="name">Nome:</label>
            <input type="text" name="name" id="name" placeholder="Nome" />
            <p id="errorName">e</p>
        </div>
        <div class="comum">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="Email" />
            <p id="errorEmail">e</p>
        </div>
        <div class="comum">
            <label for="password">Senha:</label>
            <input type="password" name="password" id="password" placeholder="Senha" />
            <p id="errorPassword">r</p>
        </div>

        <div class="sumbit-reset">
            <button type="submit">Entrar</button>
            <button type="reset">Resetar</button>
        </div>
    </form>

    <script type="text/javascript" src="cadastro_usuario/js/main.js"></script>
</body>

</html>