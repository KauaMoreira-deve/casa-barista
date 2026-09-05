<?php

namespace App\Models;

use illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $table = 'tbl_usuarios';
    protected $primaryKey = 'id_usuarios';
    public $timestamps = true;

    const CREATED_AT = 'data_criacao_usuarios';
    const UPDATED_AT = 'data_atualizacao_usuarios';

    protected $fillable = [
        'nome_usuarios',
        'email_usuarios',
        'senha_usuarios',
        'foto_usuarios',
        'nivel_usuarios',
        'status_usuarios',
    ];
}