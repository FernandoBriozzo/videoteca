<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    protected $fillable = ['nombre', 'anio', 'director_id', 'genero_id', 'sinopsis', 'imagen'];
}
