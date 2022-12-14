<link rel="stylesheet" href="<?= base_url('/cabecalho/index.css') ?>">
<link rel="stylesheet" href="<?= base_url("/style.css") ?>">

<div class="vtr-navigation">
    <h2>Jardim dos Livros</h2>
    <nav class="navbar">
        <ul class="menu">
            <li><a href="<?= base_url('/index.php/home') ?>">Home</a></li>
            <?php
            if (session('id_tipo_de_usuario') == 2) {
                echo "<li><a href=" . base_url('/index.php/manusearlivros') . ">Manusear Livros</a></li>";
            }
            $editRoute = "/index.php/editar/usuario/" . session('id');
            echo "<li><a href=" . base_url($editRoute) . ">Editar usuário</a></li>"
            ?>

        </ul>
    </nav>
    <a href="<?= base_url('/index.php/carrinho') ?>">
        <svg xmlns="http://www.w3.org/2000/svg" height="48" width="48">
            <path d="M14.35 43.95q-1.5 0-2.55-1.05-1.05-1.05-1.05-2.55 0-1.5 1.05-2.55 1.05-1.05 2.55-1.05 1.5 0 2.55 1.05 1.05 1.05 1.05 2.55 0 1.5-1.05 2.55-1.05 1.05-2.55 1.05Zm20 0q-1.5 0-2.55-1.05-1.05-1.05-1.05-2.55 0-1.5 1.05-2.55 1.05-1.05 2.55-1.05 1.5 0 2.55 1.05 1.05 1.05 1.05 2.55 0 1.5-1.05 2.55-1.05 1.05-2.55 1.05Zm-22.6-33 5.5 11.4h14.4l6.25-11.4Zm-1.5-3H39.7q1.15 0 1.75 1.05.6 1.05 0 2.1L34.7 23.25q-.55.95-1.425 1.525t-1.925.575H16.2l-2.8 5.2h24.55v3h-24.1q-2.1 0-3.025-1.4-.925-1.4.025-3.15l3.2-5.9L6.45 7h-3.9V4H8.4Zm7 14.4h14.4Z" />
        </svg>
    </a>
    <a href="<?= base_url('/logout') ?>"><span id='btn-logout'>SAIR</span></a>
</div>