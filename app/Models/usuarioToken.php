<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use app\models\Usuario;

class usuarioToken extends Model
{
    protected $table = "usuario_token";

    protected $fillable = [
        'usuario_id',
        'token',
        'valido_ate',
    ];  
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }
}
