<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bodega extends Model
{
    use HasFactory;

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuarios');
    }

    public function producto()
    {
        return $this->belongsTo(User::class, 'id_productos');
    }

    public function sucursal()
    {
        return $this->belongsTo(User::class, 'id_sucursal');
    }

    public function proveedor()
    {
        return $this->belongsTo(User::class, 'id_proveedor');
    }

    public function empresa()
    {
        return $this->belongsTo(User::class, 'id_empresa');
    }
}
