<?php

namespace App\Models;

use CodeIgniter\Model;

class ComprasModel extends Model
{
    protected $table      = 'compras';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id_cliente', 'id_carrinho', 'id_pagamento'];

    protected $useTimestamps = false;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function finalizarCompra($dados)
    {
        $db = \Config\Database::connect();
        try {
            $db->transBegin();
            $db->query('CALL finalizar_compra(:id_usuario:,:forma_pgt:,:parcelas:,:vencimento:, :status:);', $dados);

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
