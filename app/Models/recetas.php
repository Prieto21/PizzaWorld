<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recetas extends Model
{
    protected $fillable = ['id','receta', 'descripcion', 'foto','id_receta'];
}
