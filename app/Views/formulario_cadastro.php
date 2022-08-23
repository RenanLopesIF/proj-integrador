<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="formulario_cadastro/css/formulario_cadastro.css">
    <link rel="stylesheet" href="formulario_cadastro/css/style.css">
    <title>formulario cadastro</title>
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
                        <h1>cadastre-se</h1>
                    </div>
                    <div class="login-button">
                        <button type="button" class="btn btn-warning bttwo">Entrar</button>
                        <!-- <button><a href="#">Entrar</a></button> -->
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <label for="firstname">Nome</label>
                        <input id="firstname" type="text" name="firstname" placeholder="Primeiro nome" required>
                    </div>

                    <!-- <div class="input-box">
                        <label for="date">data de nascimento</label>
                        <input id="date" type="date" name="confirmPassword" placeholder="Confimação" required>
                    </div>  -->

                    <div class="input-box">
                        <label for="CPF">Informe o CPF</label>
                        <input id="lastname" type="text" name="lastname" placeholder="CPF" required>
                    </div>

                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Email" required>
                    </div>

                    <div class="input-box">
                        <label for="number">Celular</label>
                        <input id="number" type="number" name="number" placeholder="(xx) xxxx-xxxx" required>
                    </div>

                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input id="password" type="password" name="password" placeholder="Senha" required>
                    </div>

                    <div class="input-box">
                        <label for="confirmPassword">Confra su senha</label>
                        <input id="confirmPassword" type="confirmPassword" name="confirmPassword" placeholder="Confimação" required>
                    </div>


                    <!-- <div class="input-box">
                        <label for="confirmPassword">Confra su senha</label>
                        <input id="confirmPassword" type="confirmPassword" name="confirmPassword" placeholder="Confimação" required>
                    </div> -->

                </div>
                <div class="gender-inputs">
                    <div class="gender-title">
                        <h6>Gênero</h6>
                    </div>
                    <div class="gender-group">
                        <div class="gender-input">
                            <input type="radio" id="female" name="gender">
                            <label for="female">Feminino</label>
                        </div>

                        <div class="gender-input">
                            <input type="radio" id="male" name="gender">
                            <label for="male">masculino</label>
                        </div>
                        <div class="gender-input">
                            <input type="radio" id="others" name="gender">
                            <label for="others">outros</label>
                        </div>
                        <!-- <div class="gender-input">
                            <input type="radio" id="none" name="gender">
                            <label for="none">num sei</label>
                        </div> -->
                    </div>
                </div>
                <div class="continue-button">
                    <button type="button" class="btn btn-warning bttwo">Continue</button>
                    <!-- <button><a href="#">Continuar</a></button> -->
                </div>
            </form>
        </div>
    </div>
</body>

</html>