<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursales extends Model
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
}
