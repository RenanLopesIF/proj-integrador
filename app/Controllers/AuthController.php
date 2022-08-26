<?php

namespace App\Controllers;

class AuthController extends BaseController
{
    public function index()
    {
        $session = session();

        return view('login');
    }

    public function login()
    {
        $session = session();
        $usuariosModel = new \App\Models\UsuariosModel();
        $res = $usuariosModel->getUser($_POST['username'], $_POST['password']);
        if (count($res) > 0) {
            foreach ($res[0] as $key => $value) {
                $session->set($key, $value);
            }
        }
        return var_dump($res[0]);
    }
}
