<?php

namespace App\Controllers;

class Pagamento extends BaseController
{
    public function index()
    {
        $session = session();
        if ($session->get('email') == null) {
            return redirect('/');
        }

        return view('pagamento');
    }
}
