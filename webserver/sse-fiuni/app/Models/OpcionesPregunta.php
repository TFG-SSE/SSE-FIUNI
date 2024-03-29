<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpcionesPregunta extends Model
{
    use HasFactory;
    protected $fillable = [
        'pregunta_id',
        'encuesta_id',
        'opcion'
    ];
}
