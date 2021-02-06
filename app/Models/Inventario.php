<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    public function peliculas()
    {
        return $this->belongsToMany(Pelicula::class); 
    }
}
