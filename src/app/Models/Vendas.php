<?php 

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente;

class Vendas extends Model{
    protected $table = 'tbl_vendas';
    protected $primaryKey = 'id_vendas';

    public $timestamps = false;

    protected $fillable = [
        'data_hora_venda',
        'valor_total_venda',
        'forma_pagamento_venda',
        'id_cliente',
        'status_venda',
        'observacao_venda',
    ];

       public function VendaCliente(){
        return $this->belongsTo(Cliente::class, 'id_cliente', 'id_cliente');

     }


}