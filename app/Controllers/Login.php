<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        $session = session();

        return view('login');
    }
}
