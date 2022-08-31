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

        $flashDataSuccess = [
            'toast-color' => "#66cf66",
            'toast-msg' => "Lote cadastrado com sucesso.",
            // 'toast-msg-secondary' => "Efetue seu login!"
        ];
        $flashDataError = [
            'toast-color' => "#ff6262",
            'toast-msg' => "Houve uma falha ao tentar cadastrar lote.",
            'toast-msg-secondary' => "Verifique os dados e tente novamente!"
        ];

        if ($res) {
            $session->setFlashdata($flashDataSuccess);
            return redirect('cadastrar/lote');
        } else {
            $session->setFlashdata($flashDataError);
            return redirect("cadastrar/lote");
        }
    }
}
