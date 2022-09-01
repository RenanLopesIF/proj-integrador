<?php

namespace App\Controllers;

class Feedback extends BaseController
{
    public function cadastrarUsuarioSucesso()
    {
        return view('feedback', [
            "status" => "sucesso",
            "message" => "Usuário criado com sucesso",
            "btnLink" => "javascript:history.back()",
            "btnMessage" => "Voltar"
        ]);
    }

    public function cadastrarUsuarioErro()
    {
        return view('feedback', [
            "status" => "erro",
            "message" => "Houver uma falha ao tentar cadastrar o usuário",
            "btnLink" => "javascript:history.back()",
            "btnMessage" => "Voltar"
        ]);
    }

    public function cadastrarLivroSucesso()
    {
        return view('feedback', [
            "status" => "sucesso",
            "message" => "Livro criado com sucesso",
            "btnLink" => "javascript:history.back()",
            "btnMessage" => "Voltar"
        ]);
    }

    public function cadastrarLivroErro()
    {
        return view('feedback', [
            "status" => "erro",
            "message" => "Houver uma falha ao tentar cadastrar o livro",
            "btnLink" => "javascript:history.back()",
            "btnMessage" => "Voltar"
        ]);
    }

    public function cadastrarLoteSucesso()
    {
        return view('feedback', [
            "status" => "sucesso",
            "message" => "Lote criado com sucesso",
            "btnLink" => "javascript:history.back()",
            "btnMessage" => "Voltar"
        ]);
    }

    public function cadastrarLoteErro()
    {
        return view('feedback', [
            "status" => "erro",
            "message" => "Houver uma falha ao tentar cadastrar o lote",
            "btnLink" => "javascript:history.back()",
            "btnMessage" => "Voltar"
        ]);
    }
}
