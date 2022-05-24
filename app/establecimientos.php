<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class establecimientos extends Model
{
    protected $table = 'establecimientos';
    protected $fillable = [
        'latitude_fb_es','longitude_fb_es'
    ];


    public function userSpace(){
        return $this->belongsTo(user_space::class,'user_space_id');
    }

}
