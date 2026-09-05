<?php

namespace App\Models;

use illuminate\Database\Eloquent\Model;

class Horarios extends Model
{
    protected $table = 'tbl_horarios';
    protected $primaryKey = 'id_horarios';
    public $timestamps = true;

    const CREATED_AT = 'data_criacao_horarios';
    const UPDATED_AT = 'data_atualizacao_horarios';

    protected $fillable = [
        'dia_semana_horarios',
        'hora_abertura_horarios ',
        'hora_fechamento_horarios',
        'observacao_horarios',
        'status_horarios',
    ];
}