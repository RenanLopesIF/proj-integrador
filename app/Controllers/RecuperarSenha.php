<?php

namespace App\Controllers;

class RecuperarSenha extends BaseController
{
    public function index()
    {
        return view('recuperar_senha_enviarEmail');
    }

    public function novaSenha($id_usuario)
    {
        return view('recuperar_senha_novaSenha', ["id_usuario" => $id_usuario]);
    }

    public function atualizarSenha()
    {
        $session = session();
        $usuariosModel = new \App\Models\UsuariosModel();
        $password = hash('md5', $_POST['password']);
        $res = $usuariosModel->updatePasswordByUserID($_POST['id'],  $password);

        $flashDataSuccess = [
            'toast-color' => "#66cf66",
            'toast-msg' => "Senha atualizada com sucesso.",
            'toast-msg-secondary' => "Efetue seu login!"
        ];
        $flashDataError = [
            'toast-color' => "#ff6262",
            'toast-msg' => "Falha ao tentar alterar senha.",
            'toast-msg-secondary' => "Verifique-a e tente novamente!"
        ];

        if ($res) {
            $session->setFlashdata($flashDataSuccess);
            return redirect('/');
        } else {
            $session->setFlashdata($flashDataError);
            return redirect("recuperarsenha/novasenha/" . $_POST['id']);
        };
    }

    public function enviarEmail()
    {
        $session = session();
        $usuariosModel = new \App\Models\UsuariosModel();
        //Enviar processo para enviar email
        $email = \Config\Services::email();


        try {
            $userEmail = $_POST['email'];
            $id_usuario = $usuariosModel->getIDByEmail($userEmail);

            $email->setFrom('pilivrosdigitais@gmail.com', 'Livros Digitais');
            $email->setTo($userEmail);
            $email->setBCC('pilivrosdigitais@gmail.com');

            $email->setSubject('RECUPERAÇÃO DE SENHA');

            $recoveryURL = base_url("recuperarsenha/novasenha/$id_usuario");
            $emailMessage = '<h1>Recuperação de senha</h1>
                            <p>Olá</p>
                            <p>
                            Foi solicitada a <b>recuperação de senha</b> para este usuário,
                            se não foi você quem solicitou desconsidere esta mensagem e continue utilizando sua senha atual.
                            <p>
                            <p>
                                <h5>
                                Para recuperar sua senha acesse o link: <a href="' . $recoveryURL . '">Esqueci minha senha.</a></p>
                                </h5>                            
                            </p>';

            $email->setMessage($emailMessage);
            $email->send();
        } catch (\Throwable $th) {
            $session->setFlashdata(["status" => "fail"]);
            return redirect("recuperarsenha");
        };

        $session->setFlashdata(["status" => "success"]);
        return redirect("recuperarsenha");
    }
}
