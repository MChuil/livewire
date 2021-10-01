<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;
    protected $fillable = ['empresa', 'domicilio', 'telefono', 'telefono_dos', 'ciudad', 'codigo_postal', 'rfc', 'email', 'cta_primaria', 'sucursal_prim', 'cta_secundaria', 'sucursal_sec', 'observaciones', 'contacto', 'estado'];
}
