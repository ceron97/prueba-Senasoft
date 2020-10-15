<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacturaProducto extends Model
{
    use HasFactory;

    public function empresa()
    {
        return $this->belongsTo(User::class, 'id_producto');
    }

    public function producto()
    {
        return $this->belongsTo(User::class, 'id_factura');
    }
}
