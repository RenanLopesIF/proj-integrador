<?php

namespace App\Models;

use CodeIgniter\Model;

class EnderecosModel extends Model
{
    protected $table      = 'enderecos';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['pais', 'estado', 'cidade', 'bairro', 'rua', 'numero', 'cep'];

    protected $useTimestamps = false;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function getAllByUserID($id_usuario)
    {
        $db = \Config\Database::connect();

        $query = "select * from enderecos e
        where e.id = (select id_endereco from usuarios u where u.id = :id_usuario:)";

        return $db->query($query, ["id_usuario" => $id_usuario])->getResultArray()[0];
    }
}
