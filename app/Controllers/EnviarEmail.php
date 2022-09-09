<?php

namespace App\Controllers;

class EnviarEmail extends BaseController
{
    public function index()
    {
        //Enviar processo para enviar email
        $email = \Config\Services::email();
        try {
            $email->setFrom('pilivrosdigitais@gmail.com', 'Loja Virtual');
            $email->setTo($_POST['email']);
            $email->setBCC('pilivrosdigitais@gmail.com');

            $email->setSubject('RECUPERAÇÃO DE SENHA');

            $recoveryURL = "https://www.google.com/";
            $emailMessage = '<h1>Recuperação de senha</h1>
                            <p>Olá</p><br>
                            <p>
                            Foi solicitada a <b>recuperação de senha</b> para este usuário,
                            se não foi você quem solicitou desconsidere esta mensagem e continue utilizando sua senha atual.
                            <p><br>
                            <p>
                            Para recuperar sua senha acesse o link: <a href="' . $recoveryURL . '">Link para gerar novo senha</a></p>
                            </p>';

            $email->setMessage($emailMessage);
            $email->send();
        } catch (\Throwable $th) {
            //Se acontecer algum erro
            return $email->printDebugger();
        };

        return;
    }
}
