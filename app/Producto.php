<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
    	'nombre', 'unidades', 'color', 'peso', 'longitud', 'categoria_id'
    ];
}
