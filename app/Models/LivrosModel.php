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
        'genero'
    ];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
