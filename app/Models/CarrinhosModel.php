<?php

namespace App\Models;

use CodeIgniter\Model;

class CarrinhosModel extends Model
{
    protected $table      = 'carrinhos';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id_usuario'];

    protected $useTimestamps = false;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function getAll($id_usuario)
    {
        $db = \Config\Database::connect();
        $query = 'select 
                lc.id as "livroCarrinho_id",
                lc.qtd as "livroCarrinho_qtd",
                l.id as "livro_id",
                l.titulo as "livro_titulo",
                l.autor as "livro_autor",
                l.editora as "livro_editora",
                l.edicao as "livro_edicao",
                l.ano_publicacao as "livro_ano_publicacao",
                l.idioma as "livro_idioma",
                l.total_paginas as "livro_total_paginas",
                l.sinopse as "livro_sinopse",
                l.url_capa as "livro_url_capa",
                l.tipo_de_capa as "livro_tipo_de_capa",
                l.conservacao as "livro_conservacao",
                l.genero as "livro_genero",
                l.created_at as "livro_created_at",
                l.updated_at as "livro_updated_at",
                l.deleted_at as "livro_deleted_at",
                l.cod_lote as "livro_cod_lote",
                el.cod as "lote_cod",
                el.id_endereco as "lote_id_endereco",
                el.preco as "lote_preco",
                el.qtd as "lote_qtd",
                el.updated_at as "lote_updated_at",
                el.created_at as "lote_created_at"
            from livros_carrinho lc
            inner join livros l on l.id = lc.id_livro
            inner join estoque_livros el on l.cod_lote=el.cod
            where lc.id_carrinho = (select id from carrinhos where id_usuario = :id_usuario:);';
        return $db->query($query, ["id_usuario" => $id_usuario])->getResultArray();
    }
}
