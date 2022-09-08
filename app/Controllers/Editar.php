<?php

namespace App\Controllers;

class Editar extends BaseController
{
    public function livro($id_livro)
    {
        $livrosModel = new \App\Models\LivrosModel();
        $livro = $livrosModel->getOne($id_livro)[0];
        return view('editar_livro', ["livro" => $livro]);
    }

    public function usuario($id_usuario)
    {
        $usuarioModel = new \App\Models\UsuariosModel();
        $usuario = $usuarioModel->find($id_usuario);
        return view('editar_usuario', ["usuario" => $usuario]);
    }
}
