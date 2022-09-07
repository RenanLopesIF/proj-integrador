<?php

namespace App\Controllers;

class Carrinho extends BaseController
{
    public function index()
    {
        $session = session();
        if ($session->get('email') == null) {
            return redirect('/');
        };

        return view('carrinho');
    }

    public function insertItem()
    {
        $session = session();
        if ($session->get('email') == null) {
            return redirect('/');
        };

        $carrinhoModel = new \App\Models\CarrinhosModel();
        $id_usuario = $session->get("id");
        $id_livro = $_POST['id_livro'];
        $qtd = $_POST["qtd"];
        $res = $carrinhoModel->insertItem($id_usuario, $id_livro, $qtd);
        if ($res) return $this->response->setJSON(["status" => "success"]);
        return $this->response->setJSON(["status" => "fail"]);
    }

    public function getItems()
    {
        $session = session();
        $carrinhoModel = new \App\Models\CarrinhosModel();
        $id_usuario = $session->get("id");
        return $this->response->setJSON($carrinhoModel->getAll($id_usuario));
    }

    public function removeItem($item_id)
    {
        $session = session();
        if ($session->get('email') == null) {
            return redirect('/');
        };

        $carrinhoModel = new \App\Models\CarrinhosModel();

        $carrinhoModel->removeItem($session->get('id'), $item_id);

        return redirect('carrinho');
    }
}
