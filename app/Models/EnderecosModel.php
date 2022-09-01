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
}
