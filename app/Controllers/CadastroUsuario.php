<?php

namespace App\Controllers;

class CadastroUsuario extends BaseController
{
    public function index()
    {
        return view('formulario_cadastro');
        // return view('vitrine');
    }

    public function inserir()
    {
        $usuariosModel = new \App\Models\UsuariosModel();
        $res = $usuariosModel->insertOne($_POST);

        if ($res) return redirect('cadastrar/usuario/feedback/sucesso');
        else return redirect("cadastrar/usuario/feedback/erro");
    }
}
