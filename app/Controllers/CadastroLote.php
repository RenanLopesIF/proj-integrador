<?php

namespace App\Controllers;

class CadastroLote extends BaseController
{
    public function index()
    {
        $session = session();
        if ($session->get('email') == null) {
            return redirect('/');
        };
        return view('cadastro_lote');
    }

    public function inserir()
    {
        $session = session();
        if ($session->get('email') == null) {
            return redirect('/');
        };

        $estoqueModel = new \App\Models\EstoqueLivrosModel();
        $res = $estoqueModel->insertOne($_POST);

        if ($res) return redirect('cadastrar/lote/feedback/sucesso');
        else return redirect("cadastrar/lote/feedback/erro");
    }
}
