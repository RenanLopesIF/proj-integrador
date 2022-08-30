<?php

namespace App\Controllers;

class Vitrine extends BaseController
{
    public function index()
    {
        $session = session();
        return view('vitrine');
    }

    public function livros()
    {
        $session = session();
        $livrosModel = new \App\Models\LivrosModel();

        return $this->response->setJSON($livrosModel->getAll());
    }
}
