<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova senha</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
    crossorigin="anonymous">
    <link rel="stylesheet" href="<?=base_url("/recuperar_senha/css/style.css")?>">
    <link rel="stylesheet" href="<?=base_url("/recuperar_senha/css/senhaTentando.css")?>">
</head>
<body>
    <header id="header">
        <h1 class="titulo">Nova senha</h1>
        <form action="" method="post" id="form">
            <div class="data-field">
                <div id="sendPassword">
                    Senha trocada com sucesso
                </div>
                <label id="labelSenha" for="senha">Seu nova senha:</label>
                <div class="on-off">
                    <input id="password" type="password" name="password" placeholder="Password" required><img id="olho" src="<?=base_url("/recuperar_senha/img/visible.png")?>" alt="icone do olho aberto"></input>
                    
                </div>
            </div>
            <button id="enviandoSenha" type="submit" class="btn btn-warning bttwo">Atualizar</button>
        </form>
    </header>
    <script src="<?=base_url("/recuperar_senha/js/tentando.js")?>"></script>
</body>
</html>