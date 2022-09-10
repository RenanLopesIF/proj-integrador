<?php

namespace App\Models;

use CodeIgniter\Model;

class CarrinhosModel extends LivrosCarrinhoModel
{
    protected $table      = 'carrinhos';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id_usuario'];

    protected $useTimestamps = false;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function getTotalPrice($id_usuario)
    {
        $query = "select 
            cast(sum(el.preco*lc.qtd)as decimal(10,2)) as `total`
                from livros_carrinho lc
                inner join livros l on l.id = lc.id_livro
                inner join estoque_livros el on l.cod_lote=el.cod
                where lc.id_carrinho = (select id from carrinhos where id_usuario = :id_usuario:)  and lc.`order` = -1;";

        $db = \Config\Database::connect();
        return $db->query($query, ['id_usuario' => $id_usuario])->getResultArray();
    }
}
