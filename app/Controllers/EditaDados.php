<?php

namespace App\Controllers;

class EditaDados extends BaseController
{
    public function livro($id_livro)
    {
        $session = session();
        if ($session->get('email') == null && $session->get('id_tipo_de_usuario') != 2) {
            return redirect('/');
        };

        $livrosModel = new \App\Models\LivrosModel();
        $livro = $livrosModel->getOne($id_livro);
        return view('editar_livro', ["livro" => $livro]);
    }

    public function usuario($id_usuario)
    {
        $session = session();
        if ($session->get('email') == null) {
            return redirect('/');
        };

        $usuarioModel = new \App\Models\UsuariosModel();
        $usuario = $usuarioModel->getOne($id_usuario);
        return view('editar_usuario', ["usuario" => $usuario]);
    }
}
