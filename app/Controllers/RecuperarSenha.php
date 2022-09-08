<?php

namespace App\Controllers;

class RecuperarSenha extends BaseController
{
    public function index()
    {
        return view('recuperar_senha_enviarEmail');
    }

    public function novaSenha()
    {
        return view('recuperar_senha_novaSenha');
    }

    public function atualizarSenha($id_usuario)
    {
        return 'recuperada' . $id_usuario;
    }
}
