<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_medi extends Model
{
    protected $table = 'user_medis';
    protected $fillable = [
        'name_medi', 'precio_med', 'description_medi','cantidad'
    ];


    public function userSpace(){
        return $this->belongsTo(user_space::class);
    }

    public function scopeNombre($query, $nameSearch)
    {
        if($nameSearch)
            return $query->where('name_medi', 'LIKE', "%$nameSearch%");
    }

    public function scopePrecio($query, $nameSearch2)
    {
        if($nameSearch2)
            return $query->where('precio_med', "$nameSearch2");
    }

    public function scopeFiltro($query, $filtro)
    {
        if($filtro)
            return $query->where('tipo_medicamento', "$filtro");
    }
    
}
