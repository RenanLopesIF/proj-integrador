<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login/css/style.css">
    <link rel="stylesheet" href="login/css/formulario.css">
    <title>Login</title>
</head>

<body>
    <form>
        <h3>login</h3>
        <label>Email</label>
        <input class="email" type="text" name="email" placeholder="Email">
        <label>password</label>
        <input class="senha" type="password" name="senha" placeholder="password">
        <div class="bt">
            <input type="button" value="continue" onclick="verificar()">
            <input type="button" value="cadastre-se" onclick="cadastro()">
        </div>
    </form>
</body>

</html>