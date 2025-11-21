<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estadistica extends Model
{
    protected $table = 'estadisticas';

    protected $fillable = [
        'jugadores',
        'escuelas',
        'paises',
    ];
}
