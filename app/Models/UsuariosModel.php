<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuariosModel extends Model
{
    protected $table      = 'usuarios';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id_endereco', 'id_tipo_de_usuario', 'nome', 'cpf', 'email', 'telefone', 'data_nascimento'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function insertOne($dados)
    {
        $db = \Config\Database::connect();
        $enderecoModel = new \App\Models\EnderecosModel();
        $credenciaisModel = new \App\Models\CredenciaisModel();

        try {
            $db->transBegin();

            $endDados = [
                "pais" => $dados['pais'],
                "estado" => $dados['estado'],
                "cidade" => $dados['cidade'],
                "bairro" => $dados['bairro'],
                "rua" => $dados['rua'],
                "numero" => $dados['numero'],
                "cep" => $dados['cep'],
            ];
            $idEndereco = $enderecoModel->insert($endDados);

            $usuarioDados = [
                "id_endereco" => $idEndereco,
                "id_tipo_de_usuario" => 2,
                "nome" => $dados["nome"],
                "cpf" => $dados["cpf"],
                "email" => $dados["email"],
                "telefone" => $dados["telefone"],
                "data_nascimento" => $dados["nascimento"],
                "sexo" => $dados["gender"]
            ];
            $idUsuario = $this->insert($usuarioDados);

            $credenciaisDados = [
                "id_usuario" => $idUsuario,
                "username" => $dados["username"],
                "senha" => $dados["password"]
            ];
            $credenciaisModel->insert($credenciaisDados);

            if ($db->transStatus() === false) {
                $db->transRollback();
                return false;
            } else {
                $db->transCommit();
                return true;
            }
        } catch (\Throwable $th) {
            return false;
        }
    }

    public function getUser($username, $senha)
    {
        $db = \Config\Database::connect();
        $query = "SELECT * FROM USUARIOS 
        WHERE id = (SELECT id_usuario FROM CREDENCIAIS WHERE username = :username: AND senha = :senha: )";

        return $db->query($query,  [
            "username" => $username,
            "senha" => $senha,
        ])->getResultArray();
    }
}
