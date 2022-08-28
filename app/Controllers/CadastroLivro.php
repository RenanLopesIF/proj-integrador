<?php

namespace App\Controllers;

class CadastroLivro extends BaseController
{
    public function index()
    {
        return view('cadastro_livro');
    }

    public function inserir()
    {
        $livrosModel = new \App\Models\LivrosModel();
        $res = $livrosModel->insertOne($_POST);

        if ($res) return redirect('cadastrar/livro/feedback/sucesso');
        else return redirect("cadastrar/livro/feedback/erro");
    }
}
