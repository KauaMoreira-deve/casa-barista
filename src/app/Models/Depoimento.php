<?php

namespace App\Models;
use App\Models\Cliente;
use Illuminate\Database\Eloquent\Model;

class Depoimento extends Model{
    protected $table = 'tbl_depoimentos';
    protected $primaryKey = 'id_depoimentos';
    public $timestamps = true;
    
    const CREATED_AT = 'data_criacao_depoimentos';
    const UPDATED_AT = 'data_atualizacao_depoimentos';

    protected $fillable = [
        'id_cliente',
        'titulo_depoimentos',
        'descricao_depoimentos',
        'nota_depoimentos',
        'status_depoimentos',
    ];

    //um cliente pode possuir muitos depoimentos
     public function DepoimentoCliente(){
        return $this->belongsTo(Cliente::class, 'id_cliente', 'id_cliente');

     }
}