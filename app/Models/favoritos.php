<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class favoritos extends Model
{
    protected $fillable = ['id','id_receta', 'id_usuario'];
}
