<?php

namespace App\Models;

use CodeIgniter\Model;

class CarrinhosModel extends Model
{
    protected $table      = 'livros_carrinho';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id_livro', 'id_carrinho', 'qtd'];

    protected $useTimestamps = false;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function insertItem($id_usuario, $id_livro, $qtd)
    {
        $db = \Config\Database::connect();
        $db->transBegin();
        $db->query("INSERT INTO livros_carrinho VALUES(default, :id_livro:, (select id from carrinhos c where id = :id_usuario:), :qtd:)", [
            "id_livro" => $id_livro,
            "id_usuario" => $id_usuario,
            "qtd" => $qtd
        ]);
        try {
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
