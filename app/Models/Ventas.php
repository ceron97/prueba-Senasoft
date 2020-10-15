<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    use HasFactory;

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'id_producto');
    }

    public function empresa()
    {
        return $this->belongsTo(Empresas::class, 'id_empresa');
    }
}
