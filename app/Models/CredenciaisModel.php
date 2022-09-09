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

    public function updatePasswordByUserID($id_usuario, $new_password)
    {
        $db = \Config\Database::connect();
        $query = "update credenciais 
            set senha = :nova_senha:
            where id_usuario = :id_usuario:;";
        try {
            $db->transBegin();
            $db->query($query, ["id_usuario" => $id_usuario, "nova_senha" => $new_password]);

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
