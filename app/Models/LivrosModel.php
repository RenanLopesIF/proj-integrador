<?php

namespace App\Models;

use CodeIgniter\Model;

class LivrosModel extends Model
{
    protected $table      = 'livros';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        'titulo',
        'autor',
        'editora',
        'edicao',
        'ano_publicacao',
        'idioma',
        'total_paginas',
        'sinopse',
        'url_capa',
        'tipo_de_capa',
        'conservacao',
        'genero',
        'cod_lote'
    ];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function getAll()
    {
        $db = \Config\Database::connect();
        $sql = "SELECT * FROM livros l inner join estoque_livros el on l.cod_lote=el.cod ORDER BY l.created_at DESC";
        return $db->query($sql)->getResultArray();
    }

    public function insertOne($dados)
    {
        $db = \Config\Database::connect();

        $dadosLivro = [
            "titulo" => $dados["titulo"],
            "autor" => $dados["autor"],
            "editora" => $dados["editora"],
            "edicao" => $dados["edicao"],
            "ano_publicacao" => $dados["ano_publicacao"],
            "idioma" => $dados["idioma"],
            "total_paginas" => $dados["paginas"],
            "sinopse" => $dados["sinopse"],
            "url_capa" => $dados["url_capa"],
            "tipo_de_capa" => $dados["tipo_capa"],
            "conservacao" => $dados["conservacao"],
            "genero" => $dados["genero"],
            "cod_lote" => $dados["lote"],
        ];
        try {
            $db->transBegin();
            $db->query("UPDATE estoque_livros el SET qtd = (el.qtd + :qtd:) WHERE cod = :cod:", [
                "qtd" => $dados["qtd"],
                "cod" => $dados["lote"]
            ]);
            $this->insert($dadosLivro);
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
