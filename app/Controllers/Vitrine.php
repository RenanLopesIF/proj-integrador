<?php

namespace App\Controllers;

class Vitrine extends BaseController
{
    public function index()
    {
        return view('vitrine');
    }

    public function livros()
    {
        $livrosModel = new \App\Models\LivrosModel();

        return $this->response->setJSON($livrosModel->getAll());
    }
}
