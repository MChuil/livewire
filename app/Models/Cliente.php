<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'domicilio', 'telefono', 'ciudad', 'codigo_postal', 'rfc', 'email', 'saldo', 'estado'];
}
