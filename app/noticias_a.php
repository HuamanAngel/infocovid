<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class noticias_a extends Model
{
    protected $table = 'noticias_as';

    //Query Scope

    public function scopeTipo($query, $tipo)
    {
        if($tipo)
            return $query->where('tipo', 'LIKE', "%$tipo%");
    }  
}
