<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mascota extends Model
{
    use HasFactory;

    static $rules = [
		'nombre' => 'required',
		'photo' => 'required',
		'id_raza' => 'required',
		'id_genero' => 'required',
    ];

    protected $fillable = ['nombre','photo','id_raza','id_genero'];



}
