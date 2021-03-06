<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaccion extends Model
{
    public function inventarios()
    {
        return $this->hasOne(Inventario::class); 
    }

    public function tipoTransaccion()
    {
        return $this->hasOne(TipoTransaccion::class); 
    }
}