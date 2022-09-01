<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    if (session()->getFlashdata('toast-msg') != null) {
        echo '<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">';
    };
    ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/login/css/novo_login.css') ?>">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <?php
        if (session()->getFlashdata('toast-msg') != null) {
            echo '<div style="position: fixed; top: 0; right: 0;">
                <div aria-live="polite" aria-atomic="true" style="margin-top: 20px; position: relative; min-height: 200px;">
                    <div class="toast hide" data-autohide="true" style="border-radius: 15px 0 0 15px;">
                        <div id="box-toast" style="background-color:' . session()->getFlashdata('toast-color') . ';border-radius: 15px 0 0 15px;min-height: 80px;" class="toast-body text-white">
                            <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
                            <p id="msg-toast">' . session()->getFlashdata('toast-msg') . '</p>
                            <p id="msg-toast">' . session()->getFlashdata('toast-msg-secondary') . '</p>
                            </div>
                    </div>
                </div>
            </div>';
        }
        ?>
        <div class="form-image">

            <img src="<?= base_url("/login/img/moca_dog.svg") ?>" alt="">
        </div>
        <div class="form">
            <form method="POST" action="<?= base_url("/autenticar") ?>">
                <div class="form-header">
                    <div class="title">
                        <h1>Conecte-se</h1>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <label for="email">Usuário</label>
                        <input id="email" type="text" name="username" placeholder="Username" required>
                    </div>
                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input id="password" type="password" name="password" placeholder="Senha" required>
                    </div>

                </div>
                <div class="continue-button">
                    <button type="submit" class="btn btn-warning bttwo">Entrar</button>
                    <a id="btn-cadastrar" href="<?= base_url("/cadastrar/usuario") ?>"><button type="button" class="btn btn-warning bttwo">Criar conta</button></a>
                    <p><a href="#">Esqueceu a senha?</a></p>
                </div>
            </form>
        </div>
    </div>

    <?php
    if (session()->getFlashdata('toast-msg') != null) {
        echo '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
        </script>
        <script>
            window.onload = ()=>{
                $(document).ready(function () {
                    $(".toast").toast("show");
                });
            }
        </script>';
    };
    ?>
</body>

</html>