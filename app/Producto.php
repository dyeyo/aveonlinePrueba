<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table='productos';
    protected $fillable=['referencia', 'nombre', 'observaciones', 'precio', 'inpuesto', 'cantidad', 'estado', 'imagen'];
}
