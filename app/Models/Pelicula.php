<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    public function categorias()
    {
        return $this->belongsToMany(Categoria::class); 
    }
}
