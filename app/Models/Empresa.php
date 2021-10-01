<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'domcilio', 'ciudad', 'cp', 'telefono', 'propietario', 'web', 'logotipo', 'rfc', 'razonsocial', 'regimen'];
}
