<?php

namespace App\Controllers;

class AtualizaDados extends BaseController
{
    public function livro($id_livro)
    {
        $session = session();
        if ($session->get('email') == null) {
            return redirect('/');
        };

        $livrosModel = new \App\Models\LivrosModel();
        $livrosModel->update($id_livro, $_POST);

        $flashDataSuccess = [
            'toast-color' => "#66cf66",
            'toast-msg' => "Livro atualizado com sucesso.",
        ];
        $session->setFlashdata($flashDataSuccess);
        return redirect("manusearlivros");
    }

    public function usuario($id_usuario)
    {
        $session = session();
        if ($session->get('email') == null) {
            return redirect('/');
        };

        $usuarioModel = new \App\Models\UsuariosModel();

        $usuarioDado = [
            "nome" => $_POST['nome'],
            "email" => $_POST['email'],
            "telefone" => $_POST['telefone'],
            "data_nascimento" => $_POST['nascimento'],
        ];

        $enderecoDado = [
            "pais" => $_POST['pais'],
            "estado" => $_POST['estado'],
            "cidade" => $_POST['cidade'],
            "bairro" => $_POST['bairro'],
            "rua" => $_POST['rua'],
            "numero" => $_POST['numero'],
            "cep" => $_POST['cep'],
        ];

        $res = $usuarioModel->updateOne($id_usuario, [
            "usuario" => $usuarioDado,
            "endereco" => $enderecoDado,
            "new_password" => hash('md5', $_POST['password'])
        ]);

        $flashDataSuccess = [
            'toast-color' => "#66cf66",
            'toast-msg' => "Dados atualizado com sucesso.",
        ];
        $flashDataError = [
            'toast-color' => "#ff6262",
            'toast-msg' => "Falha ao tentar atualizar dados.",
            'toast-msg-secondary' => "Verifique-os e tente novamente!"
        ];

        if ($res) {
            $session->setFlashdata($flashDataSuccess);
        } else {
            $session->setFlashdata($flashDataError);
        };
        return redirect("home");
    }
}
