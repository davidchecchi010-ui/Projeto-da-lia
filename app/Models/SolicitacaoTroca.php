<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SolicitacaoTroca extends Model
{
    protected $fillable = [
        'nome', 'ano', 'senai', 'mistura_atual', 'mistura_solicitada', 'status',
    ];
}
