<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuário criado</title>
    <link rel="stylesheet" href="<?php if ($status == "sucesso") {
                                        echo base_url('/feedback/sucesso.css');
                                    } else echo base_url('/feedback/erro.css') ?>">

</head>

<body>
    <div id="main">
        <span><?= $message ?></span>
        <a href="<?= $btnLink ?>">
            <button id="btn-link"><?= $btnMessage ?></button>
        </a>
    </div>
</body>

</html>