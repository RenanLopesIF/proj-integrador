<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
        // return view('vitrine'); // depois tirar, coloquei para testar
    }
}