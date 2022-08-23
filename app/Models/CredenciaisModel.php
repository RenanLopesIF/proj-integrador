<?php

namespace App\Models;

use CodeIgniter\Model;

class CredenciaisModel extends Model
{
    protected $table      = 'credenciais';
    protected $primaryKey = 'username';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['senha', 'id_usuario'];

    protected $useTimestamps = false;
    protected $updatedField  = 'updated_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
