<?php

namespace App\Models;

use CodeIgniter\Model;

class LivrosCarrinhoModel extends Model
{
    protected $table      = 'livros_carrinho';
    protected $primaryKey = ['id_carrinho', 'id_livro'];

    protected $useAutoIncrement = false;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id_livro', 'id_carrinho', 'qtd', 'fechado'];

    protected $useTimestamps = false;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function insertItem($id_usuario, $id_livro, $qtd)
    {
        $db = \Config\Database::connect();
        try {
            $query = "INSERT INTO livros_carrinho VALUES(:id_livro:, (select id from carrinhos c where id_usuario = :id_usuario:), :qtd:, default) on duplicate key update qtd = qtd+:qtd:;";
            $db->transBegin();
            $db->query($query, [
                "id_livro" => $id_livro,
                "id_usuario" => $id_usuario,
                "qtd" => $qtd
            ]);
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

    public function removeItem($id_usuario, $id_livro)
    {
        $db = \Config\Database::connect();

        try {
            $db->transBegin();
            $db->query('DELETE FROM livros_carrinho WHERE id_livro= :id_livro: and id_carrinho = (select id from carrinhos c where id_usuario = :id_usuario:);', [
                'id_livro' => $id_livro,
                'id_usuario' => $id_usuario
            ]);

            if ($db->transStatus() === false) {
                $db->transRollback();
                return false;
            } else {
                $db->transCommit();
                return true;
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
