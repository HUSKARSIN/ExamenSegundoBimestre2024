<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mueble extends Model
{
    use HasFactory;

    // Definir la tabla asociada al modelo
    protected $table = 'mueble';

    // Desactivar timestamps automáticos
    public $timestamps = false;

    // Definir los campos que se pueden llenar de forma masiva
    protected $fillable = [
        'nombre',
        'material',
        'precio',
        'imagen',
    ];

    // Definir los tipos de datos para los campos (opcional)
    protected $casts = [
        'precio' => 'float',
    ];
}

