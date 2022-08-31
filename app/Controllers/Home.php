<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $session = session();
        return view('home');
    }

    public function livros()
    {
        $session = session();
        $livrosModel = new \App\Models\LivrosModel();

        return $this->response->setJSON($livrosModel->getAll());
    }
}
