<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produtos;

Class Categoria extends Model{

    protected $table = 'tbl_categoria';
    protected $primaryKey = 'id_categoria';
    public $timestamps = true;
    
    const CREATED_AT = 'data_criacao_categoria';
    const UPDATED_AT = 'data_atualizacao_categoria';

    protected $fillable = [
        'nome_categoria',
        'status_categoria'
    ];

    public function produto(){
        return $this->hasMany(Produtos::class, 'id_categoria', 'id_categoria');
    }
}