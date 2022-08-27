<?php

namespace App\Controllers;

class Feedback extends BaseController
{
    public function cadastrarUsuarioSucesso()
    {
        return view('feedback', [
            "status" => "sucesso",
            "message" => "Usuário criado com sucesso",
            "btnLink" => base_url("/"),
            "btnMessage" => "Voltar para tela de login"
        ]);
    }

    public function cadastrarUsuarioErro()
    {
        return view('feedback', [
            "status" => "erro",
            "message" => "Houver uma falha ao tentar cadastrar o usuário",
            "btnLink" => base_url("/cadastrar"),
            "btnMessage" => "Voltar para tela de cadastro"
        ]);
    }
}
