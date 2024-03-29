<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Educacion extends Model
{
    use HasFactory;

    protected $table = 'educacion';

    protected $fillable = [
        'institucion',
        'titulo',
        'user_id',
        'inicio',
        'fin'
    ];
}
