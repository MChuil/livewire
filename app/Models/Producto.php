<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = ['barcode', 'descripcion', 'iamgen', 'marca_id', 'unidad', 'existencia', 'precioa', 'preciob', 'precioc', 'preciod', 'costo', 'categoria_id', 'ubicacion', 'observaciones', 'actualizacion', 'alerta', 'estado', 'cve_unidad', 'cve_prod', 'usuario_id'];
}
