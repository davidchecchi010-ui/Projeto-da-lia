<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Cardapio extends Model
{
    protected $table = 'cardapio';

    protected $fillable = [
        'data',
        'departamento',
        'data_admissao',
    ];

    protected function casts(): array
    {
        return [
            'data' => 'date',
            'data_admissao' => 'date',
        ];
    }

    public function produtos(): BelongsToMany
    {
        return $this->belongsToMany(Produto::class, 'item_cardapios', 'cardapio_id', 'produto_id');
    }
}
