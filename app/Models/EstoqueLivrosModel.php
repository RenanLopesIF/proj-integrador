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
}
