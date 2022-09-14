<?php

namespace App\Controllers;

class CadastroUsuario extends BaseController
{
    public function index()
    {
        return view('cadastro_usuario');
        // return view('vitrine');
    }

    public function inserir()
    {
        $session = session();
        $usuariosModel = new \App\Models\UsuariosModel();
        $_POST['password'] = hash('md5', $_POST['password']);
        $res = $usuariosModel->insertOne($_POST);

        $flashDataSuccess = [
            'toast-color' => "#66cf66",
            'toast-msg' => "Usuário cadastrado com sucesso.",
            'toast-msg-secondary' => "Efetue seu login!"
        ];
        $flashDataError = [
            'toast-color' => "#ff6262",
            'toast-msg' => "Falha ao tentar cadastrar usuário.",
            'toast-msg-secondary' => "Verifique os dados e tente novamente!"
        ];

        if ($res) {
            $session->setFlashdata($flashDataSuccess);
            return redirect('/');
        } else {
            $session->setFlashdata($flashDataError);
            return redirect("cadastrar/usuario");
        };
    }
}
