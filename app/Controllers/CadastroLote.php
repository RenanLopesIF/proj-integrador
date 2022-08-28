<?php

namespace App\Controllers;

class CadastroLote extends BaseController
{
    public function index()
    {
        return view('cadastro_lote');
    }

    public function inserir()
    {
        $estoqueModel = new \App\Models\EstoqueLivrosModel();
        $res = $estoqueModel->insertOne($_POST);

        if ($res) return redirect('cadastrar/lote/feedback/sucesso');
        else return redirect("cadastrar/lote/feedback/erro");
    }
}
