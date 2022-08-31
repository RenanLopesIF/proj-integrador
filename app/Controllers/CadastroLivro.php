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

        if ($res) return redirect('cadastrar/livro/feedback/sucesso');
        else return redirect("cadastrar/livro/feedback/erro");
    }
}
