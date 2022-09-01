<?php

namespace App\Controllers;

class AuthController extends BaseController
{
    public function login()
    {
        $session = session();
        $usuariosModel = new \App\Models\UsuariosModel();
        $res = $usuariosModel->getUser($_POST['username'], $_POST['password']);
        if (count($res) > 0) {
            foreach ($res[0] as $key => $value) {
                $session->set($key, $value);
            }

            return redirect('home');
        }
        $flashData = [
            'toast-color' => "#ff6262",
            'toast-msg' => "Usuário ou senha incorreto.",
            'toast-msg-secondary' => "Tente novamente!"
        ];

        $session->setFlashdata($flashData);
        return redirect('/');
    }
}
