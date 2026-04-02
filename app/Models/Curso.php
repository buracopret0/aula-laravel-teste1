<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{

    // fillable - Insere informacoes em massa
    protected $fillable = [
        'nome',
        'descricao',
    ];
}
