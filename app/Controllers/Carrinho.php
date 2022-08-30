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
        $carrinhoModel = new \App\Models\CarrinhosModel();
        // $id = $_POST['id_livro'];
        // $res = $carrinhoModel->insertItem($session->get("id"), $id, $_POST["qtd"]);
        // if ($res) return "inserido";
        return var_dump($_POST);
    }
}
