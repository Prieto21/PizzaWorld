<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    protected $fillable = ['id','nombres', 'apellidos', 'user','contra', 'email', 'edad','foto', 'id_sexo', 'id_rol'];
}
