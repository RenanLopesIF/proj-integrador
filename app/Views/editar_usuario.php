<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('editar_usuario/css/editar_usuario.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/style.css') ?>">
    <title>Cadastro usuário</title>
</head>

<body>
    <?php
    echo $this->include('cabecalho');
    echo $this->include('toast');
    ?>
    <div class="container">
        <form id="form" action="<?php $updateURL = '/atualizar/usuario/' . session('id');
                                echo base_url($updateURL)  ?>" method="POST">
            <div class="form-header">
                <div class="title">
                    <h1>Editar dados usuario</h1>
                </div>
            </div>
            <div class="field-group">

                <div class=" data-field">
                    <label for="username">Login</label>
                    <input value="<?= $usuario['username'] ?>" id="username" type="text" name="username" placeholder="Login" required disabled>
                </div>

                <div class="data-field">
                    <label for="password">Senha</label>
                    <input value="<?= $usuario['senha'] ?>" id="password" type="password" name="password" placeholder="Senha" required>
                </div>

                <div class="data-field">
                    <label for="nome">Nome</label>
                    <input value="<?= $usuario['nome'] ?>" id="nome" type="text" name="nome" placeholder="Nome" required>
                </div>

                <div class="data-field">
                    <label for="cpf">Informe o CPF</label>
                    <input value="<?= $usuario['cpf'] ?>" id="cpf" type="text" name="cpf" placeholder="CPF" requirer disabled>
                </div>

                <div class="data-field">
                    <label for="email">E-mail</label>
                    <input value="<?= $usuario['email'] ?>" id="email" type="email" name="email" placeholder="Email" required>
                </div>

                <div class="data-field">
                    <label for="telefone">Celular</label>
                    <input value="<?= $usuario['telefone'] ?>" id="telefone" type="text" name="telefone" placeholder="(xx) xxxx-xxxx" required>
                </div>

                <div class="data-field">
                    <label for="nascimento">Data de Nascimento</label>
                    <input value="<?= $usuario['data_nascimento'] ?>" id="nascimento" type="date" name="nascimento" placeholder="" required>
                </div>

                <div class="data-field">
                    <label for="pais">Pais</label>
                    <input value="<?= $usuario['pais'] ?>" id="pais" type="text" name="pais" placeholder="País" required>
                </div>

                <div class="data-field">
                    <label for="Estado">Estado</label>
                    <input value="<?= $usuario['estado'] ?>" id="estado" type="text" name="estado" placeholder="Estado" required>
                </div>

                <div class="data-field">
                    <label for="cidade">Cidade</label>
                    <input value="<?= $usuario['cidade'] ?>" id="cidade" type="text" name="cidade" placeholder="Cidade" required>
                </div>

                <div class="data-field">
                    <label for="bairro">Bairro</label>
                    <input value="<?= $usuario['bairro'] ?>" id="bairro" type="text" name="bairro" placeholder="Bairro" required>
                </div>

                <div class="data-field">
                    <label for="rua">Rua</label>
                    <input value="<?= $usuario['rua'] ?>" id="rua" type="text" name="rua" placeholder="Rua" required>
                </div>
                <div class="data-field">
                    <label for="numero">Número</label>
                    <input value="<?= $usuario['numero'] ?>" id="numero" type="text" name="numero" placeholder="N°" required>
                </div>
                <div class="data-field">
                    <label for="cep">CEP</label>
                    <input value="<?= $usuario['cep'] ?>" id="cep" type="text" name="cep" placeholder="CEP" required>
                </div>

            </div>
            <div class="gender-title">
                <h6>Gênero</h6>
            </div>
            <div class="sex-group">
                <div class="gender">
                    <input <?php if ($usuario['sexo'] == 'M') echo 'checked'; ?> type="radio" id="male" value="M" name="gender">
                    <label>Masculino</label>
                </div>

                <div class="gender">
                    <input <?php if ($usuario['sexo'] == 'F') echo 'checked'; ?> type="radio" id="female" value="F" name="gender">
                    <label>Feminino</label>
                </div>

                <div class="gender">
                    <input <?php if ($usuario['sexo'] == 'IND') echo 'checked'; ?> type="radio" id="others" value="UNK" name="gender">
                    <label>Outro</label>
                </div>
            </div>
            <div class="registration-button">
                <button type="submit" class="btn btn-warning bttwo">Salvar</button>
            </div>
        </form>
    </div>

</body>

</html>