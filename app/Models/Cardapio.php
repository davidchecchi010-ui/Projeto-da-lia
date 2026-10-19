<?php

namespace App\Models;

use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cardapio extends Model
{
    protected $table = 'cardapio';
    public $timestamps = false;
    protected $fillable = [
        'data',
        'departamento',
        'data_admissao',
    ];


    public function produtos()
    {
        return $this->belongsTo(Produto::class, 'item_cardapios', 'cardapio_id', 'produto_id');
    }
}
