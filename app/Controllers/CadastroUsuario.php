<?php

namespace App\Controllers;

class CadastroUsuario extends BaseController
{
    public function index()
    {
        return view('formulario_cadastro');
    }

    public function inserir()
    {
        $usuariosModel = new \App\Models\UsuariosModel();
        $res = $usuariosModel->insertOne($_POST);

        if ($res) redirect()->route('cadastrar/feedback/sucesso');
        else return redirect("cadastrar/feedback/erro");
    }
}
