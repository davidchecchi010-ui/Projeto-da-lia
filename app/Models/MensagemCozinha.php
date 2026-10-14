<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MensagemCozinha extends Model
{
    protected $table = "mensagem_cozinhas";
    protected $fillable = [
    'nome', 
    'email',
    'assunto',
    'mensagem', 
'status'];
}
