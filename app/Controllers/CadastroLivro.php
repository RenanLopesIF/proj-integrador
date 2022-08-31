<?php

namespace App\Controllers;

class CadastroLivro extends BaseController
{
    public function index()
    {
        $session = session();
        if ($session->get('email') == null) {
            return redirect('/');
        };

        return view('cadastro_livro');
    }

    public function inserir()
    {
        $session = session();
        if ($session->get('email') == null) {
            return redirect('/');
        };

        $livrosModel = new \App\Models\LivrosModel();
        $res = $livrosModel->insertOne($_POST);


        $flashDataSuccess = [
            'toast-color' => "#66cf66",
            'toast-msg' => "Livro cadastrado com sucesso.",
            // 'toast-msg-secondary' => "Efetue seu login!"
        ];
        $flashDataError = [
            'toast-color' => "#ff6262",
            'toast-msg' => "Houve uma falha ao tentar cadastrar livro.",
            'toast-msg-secondary' => "Verifique os dados e tente novamente!"
        ];

        if ($res) {
            $session->setFlashdata($flashDataSuccess);
            return redirect('cadastrar/livro');
        } else {
            $session->setFlashdata($flashDataError);
            return redirect("cadastrar/livro");
        };
    }
}
