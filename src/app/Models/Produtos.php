<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;

Class Produtos extends Model{

    protected $table = 'tbl_produto';
    protected $primaryKey = 'id_produto';
    public $timestamps = true;
    
    const CREATED_AT = 'data_criacao_produto';
    const UPDATED_AT = 'data_atualizacao_produto';

    protected $fillable = [
        'nome_produto',
        'id_categoria',
        'descricao_curta_produto',
        'descricao_longa_produto',
        'valor_produto',
        'imagem_produto',
        'destaque_produto',
        'status_produto',
    ];

    public function categoria(){
        return $this->belongsTo(Categoria::class, 'id_categoria', 'id_categoria');
    }

}