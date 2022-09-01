<?php

namespace App\Models;

use CodeIgniter\Model;

class EstoqueLivrosModel extends Model
{
    protected $table      = 'estoque_dos_livros';
    protected $primaryKey = 'cod';

    protected $useAutoIncrement = false;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id_endereco', 'preco', 'qtd'];

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

        try {
            $db->transBegin();
            $dadosEnd = [
                "pais" => $dados['pais'],
                "estado" => $dados['estado'],
                "cidade" => $dados['cidade'],
                "bairro" => $dados['bairro'],
                "rua" => $dados['rua'],
                "numero" => $dados['numero'],
                "cep" => $dados['cep'],
            ];
            $idEndereco = $enderecoModel->insert($dadosEnd);

            $dadosLote = [
                "cod" => $dados["lote"],
                "id_endereco" => $idEndereco,
                "preco" => $dados["preco"],
                "qtd" => 0,
            ];

            $db->query("INSERT INTO estoque_livros(cod, id_endereco, preco, qtd) values(:cod:, :id_endereco:, :preco:, :qtd:)", $dadosLote);

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
}
