<!DOCTYPE html>
<html lang="pt-br">

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
    <link rel="stylesheet" href="<?= base_url("cadastro_usuario/css/cadastro_usuario.css") ?>">
    <link rel="stylesheet" href="<?= base_url("cadastro_usuario/css/style.css") ?>">
    <title>Cadastro usuário</title>
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
        </div>
        <form id="form" action="<?= base_url("/cadastrar/usuario/inserir") ?>" method="POST">
            <div class="form-header">
                <div class="title">
                    <h1>Cadastre-se</h1>
                </div>
            </div>
            <div class="field-group">

                <div class=" data-field">
                    <label for="username">Login</label>
                    <input id="username" type="text" name="username" placeholder="Login" required>
                </div>

                <div class="data-field">
                    <label for="password">Senha</label>
                    <input id="password" type="password" name="password" placeholder="Senha" required>
                </div>

                <div class="data-field">
                    <label for="confirmPassword">Confirmação de senha</label>
                    <input id="confirmPassword" type="password" name="confirmPassword" placeholder="Confimação" required>
                </div>

                <div class="data-field">
                    <label for="nome">Nome</label>
                    <input id="nome" type="text" name="nome" placeholder="Nome" required>
                </div>

                <div class="data-field">
                    <label for="cpf">Informe o CPF</label>
                    <input id="cpf" type="text" name="cpf" placeholder="CPF" required>
                </div>

                <div class="data-field">
                    <label for="email">E-mail</label>
                    <input id="email" type="email" name="email" placeholder="Email" required>
                </div>

                <div class="data-field">
                    <label for="telefone">Celular</label>
                    <input id="telefone" type="text" name="telefone" placeholder="(xx) xxxx-xxxx" required>
                </div>

                <div class="data-field">
                    <label for="nascimento">Data de Nascimento</label>
                    <input id="nascimento" type="date" name="nascimento" placeholder="" required>
                </div>

                <div class="data-field">
                    <label for="pais">Pais</label>
                    <input id="pais" type="text" name="pais" placeholder="País" required>
                </div>

                <div class="data-field">
                    <label for="Estado">Estado</label>
                    <input id="estado" type="text" name="estado" placeholder="Estado" required>
                </div>

                <div class="data-field">
                    <label for="cidade">Cidade</label>
                    <input id="cidade" type="text" name="cidade" placeholder="Cidade" required>
                </div>

                <div class="data-field">
                    <label for="bairro">Bairro</label>
                    <input id="bairro" type="text" name="bairro" placeholder="Bairro" required>
                </div>

                <div class="data-field">
                    <label for="rua">Rua</label>
                    <input id="rua" type="text" name="rua" placeholder="Rua" required>
                </div>
                <div class="data-field">
                    <label for="numero">Número</label>
                    <input id="numero" type="text" name="numero" placeholder="N°" required>
                </div>
                <div class="data-field">
                    <label for="cep">CEP</label>
                    <input id="cep" type="text" name="cep" placeholder="CEP" required>
                </div>

            </div>
            <div class="gender-inputs">
                <div class="gender-title">
                    <h6>Gênero</h6>
                </div>
                <div class="gender-group">
                    <div class="gender">
                        <input type="radio" id="male" value="M" name="gender">
                        <label>Masculino</label>
                    </div>

                    <div class="gender">
                        <input type="radio" id="female" value="F" name="gender">
                        <label>Feminino</label>
                    </div>

                    <div class="gender">
                        <input type="radio" id="others" value="UNK" name="gender">
                        <label>Outro</label>
                    </div>
                </div>
            </div>
            <div class="registration-button">
                <button type="submit" class="btn btn-warning bttwo">Continue</button>
                <a href="<?= base_url("/") ?>"><button type="button" class="btn btn-warning bttwo">Logar-se</button></a>
            </div>
        </form>
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