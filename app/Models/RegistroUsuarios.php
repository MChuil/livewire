<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistroUsuarios extends Model
{
    use HasFactory;

    protected $fillable = ['usuario_id', 'ip', 'detalle', 'entrada', 'salida'];
}
