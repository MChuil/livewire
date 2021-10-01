<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VentaTemporal extends Model
{
    use HasFactory;
    protected $fillable = ['descripcion', 'cantidad', 'precio', 'usuario_id'];
}
