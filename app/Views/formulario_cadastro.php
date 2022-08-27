<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url("formulario_cadastro/css/formulario_cadastro.css") ?>">
    <link rel="stylesheet" href="<?= base_url("formulario_cadastro/css/style.css") ?>">
    <title>Cadastro usuário</title>
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="assets/img/moça_dog.svg" alt="">
        </div>
        <form id="form" action="<?= base_url("/cadastrar/inserir") ?>" method="POST">
            <div class="form-header">
                <div class="title">
                    <h1>Cadastre-se</h1>
                </div>
                <div class="login-button">
                    <button type="button" class="btn btn-warning bttwo">Entrar</button>
                </div>
            </div>
            <div class="input-group">

                <div class="input-box">
                    <label for="username">Login</label>
                    <input id="username" type="text" name="username" placeholder="Login" required>
                </div>

                <div class="input-box">
                    <label for="password">Senha</label>
                    <input id="password" type="password" name="password" placeholder="Senha" required>
                </div>

                <div class="input-box">
                    <label for="confirmPassword">Confirmação de senha</label>
                    <input id="confirmPassword" type="password" name="confirmPassword" placeholder="Confimação" required>
                </div>

                <div class="input-box">
                    <label for="nome">Nome</label>
                    <input id="nome" type="text" name="nome" placeholder="Nome" required>
                </div>

                <div class="input-box">
                    <label for="cpf">Informe o CPF</label>
                    <input id="cpf" type="text" name="cpf" placeholder="CPF" required>
                </div>

                <div class="input-box">
                    <label for="email">E-mail</label>
                    <input id="email" type="email" name="email" placeholder="Email" required>
                </div>

                <div class="input-box">
                    <label for="telefone">Celular</label>
                    <input id="telefone" type="text" name="telefone" placeholder="(xx) xxxx-xxxx" required>
                </div>

                <div class="input-box">
                    <label for="nascimento">Data de Nascimento</label>
                    <input id="nascimento" type="date" name="nascimento" placeholder="" required>
                </div>

                <div class="input-box">
                    <label for="pais">Pais</label>
                    <input id="pais" type="text" name="pais" placeholder="País" required>
                </div>

                <div class="input-box">
                    <label for="Estado">Estado</label>
                    <input id="estado" type="text" name="estado" placeholder="Estado" required>
                </div>

                <div class="input-box">
                    <label for="cidade">Cidade</label>
                    <input id="cidade" type="text" name="cidade" placeholder="Cidade" required>
                </div>

                <div class="input-box">
                    <label for="bairro">Bairro</label>
                    <input id="bairro" type="text" name="bairro" placeholder="Bairro" required>
                </div>

                <div class="input-box">
                    <label for="rua">Rua</label>
                    <input id="rua" type="text" name="rua" placeholder="Rua" required>
                </div>
                <div class="input-box">
                    <label for="numero">Número</label>
                    <input id="numero" type="text" name="numero" placeholder="N°" required>
                </div>
                <div class="input-box">
                    <label for="cep">CEP</label>
                    <input id="cep" type="text" name="cep" placeholder="CEP" required>
                </div>

            </div>
            <div class="gender-inputs">
                <div class="gender-title">
                    <h6>Gênero</h6>
                </div>
                <div class="gender-group">
                    <div class="gender-input">
                        <input type="radio" id="male" value="M" name="gender">
                        <label for="male">Masculino</label>
                    </div>

                    <div class="gender-input">
                        <input type="radio" id="female" value="F" name="gender">
                        <label for="female">Feminino</label>
                    </div>

                    <div class="gender-input">
                        <input type="radio" id="others" value="UNK" name="gender">
                        <label for="others">Outro</label>
                    </div>
                </div>
            </div>
            <div class="continue-button">
                <button type="submit" class="btn btn-warning bttwo">Continue</button>
            </div>
        </form>
    </div>
</body>

</html>