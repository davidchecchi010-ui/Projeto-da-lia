<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produto';

    protected $fillable = [
        'nome_produto',
        'quatidade_estoque',
        'unidade_medida',
        'data_validade',
    ];
}
