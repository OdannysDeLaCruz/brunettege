<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    public $table = 'imagenes';
    protected $fillable = [
        'principal', 'ruta', 'producto_id',
    ];
}
