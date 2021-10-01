<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    protected $fillable = ['cliente_id', 'total', 'efectivo', 'cambio', 'tipo', 'estado', 'forma_pago', 'referencia', 'observaciones', 'factura', 'usuario_id'];
}