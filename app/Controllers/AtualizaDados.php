<?php

namespace App\Controllers;

class AtualizaDados extends BaseController
{
    public function livro($id_livro)
    {
        $session = session();
        if ($session->get('email') == null) {
            return redirect('/');
        };

        $livrosModel = new \App\Models\LivrosModel();
        $livrosModel->update($id_livro, $_POST);

        $flashDataSuccess = [
            'toast-color' => "#66cf66",
            'toast-msg' => "Livro atualizado com sucesso.",
        ];
        $session->setFlashdata($flashDataSuccess);
        return redirect("manusearlivros");
    }

    public function usuario($id_usuario)
    {
        $session = session();
        if ($session->get('email') == null) {
            return redirect('/');
        };

        $usuarioModel = new \App\Models\UsuariosModel();
        $usuario = $usuarioModel->find($id_usuario);
        return view('editar_usuario', ["usuario" => $usuario]);
    }
}
