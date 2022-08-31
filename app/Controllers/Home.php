<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $session = session();
        if ($session->get('email') == null) {
            return redirect('/');
        };
        return view('home');
    }

    public function livros()
    {
        $session = session();
        if ($session->get('email') == null) {
            return redirect('/');
        };

        $livrosModel = new \App\Models\LivrosModel();

        return $this->response->setJSON($livrosModel->getAll());
    }
}
