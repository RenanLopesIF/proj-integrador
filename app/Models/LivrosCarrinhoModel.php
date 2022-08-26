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
}
