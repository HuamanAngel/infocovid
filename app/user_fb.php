<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_fb extends Model
{
    protected $table = 'user_fbs';
    public function userSpace(){
        return $this->hasOne(user_space::class);
    }
    public function userGeneral(){
        return $this->belongsTo(User::class);
    }

}
