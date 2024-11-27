<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'nome',
        'preco',
        'qualidade',
        'categoria_id'
    ];
    public function Categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }
}
