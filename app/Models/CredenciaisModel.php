<?php

namespace App\Models;

use CodeIgniter\Model;

class CredenciaisModel extends Model
{
    protected $table      = 'credenciais';
    protected $primaryKey = 'username';

    protected $useAutoIncrement = false;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['username', 'senha', 'id_usuario'];

    protected $useTimestamps = false;
    protected $updatedField  = 'updated_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
