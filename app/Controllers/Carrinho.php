<?php

namespace App\Controllers;

class Carrinho extends BaseController
{
    public function index()
    {
        $session = session();
        return view('vitrine');
    }

    public function insertItem()
    {
        $session = session();
        $carrinhoModel = new \App\Models\LivrosCarrinhoModel();
        $id_usuario = $session->get("id");
        $id_livro = $_POST['id_livro'];
        $qtd = $_POST["qtd"];
        $res = $carrinhoModel->insertItem($id_usuario, $id_livro, $qtd);
        if ($res) return "inserido";
        return 'falhou';
    }
}
