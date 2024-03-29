<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RespuestaPreguntas extends Model
{
    use HasFactory;
    protected $fillable = [
        'respuesta',
        'pregunta_id',
        'encuesta_id',
        'opciones',
        'egresado_id'
    ];
}
