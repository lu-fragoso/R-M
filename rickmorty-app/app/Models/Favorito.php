<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorito extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'personagem_id',
        'personagem_nome',
        'personagem_imagem',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
