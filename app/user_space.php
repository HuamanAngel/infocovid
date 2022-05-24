<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_space extends Model
{
    protected $table = 'user_spaces';
    protected $fillable = [
        'name_space','descripcion'
    ];


    public function userEstablecimiento(){
        return $this->hasMany(establecimientos::class);
    }
    public function userMedi(){
        return $this->hasMany(user_medi::class);
    }

    public function userComment(){
        return $this->hasMany(user_comment::class);
    }

    public function userFb(){
        return $this->belongsTo(user_fb::class);
    }
}
