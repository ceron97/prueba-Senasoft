<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;

    public function empresa()
    {
        return $this->belongsTo(User::class, 'id_empresa');
    }

    public function producto()
    {
        return $this->belongsTo(User::class, 'id_municipio');
    }

    public function producto()
    {
        return $this->belongsTo(User::class, 'id_departamento');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }

    public function sucursal()
    {
        return $this->belongsTo(User::class, 'id_venta');
    }

    public function proveedor()
    {
        return $this->belongsTo(User::class, 'id_sucursal');
    }
}
