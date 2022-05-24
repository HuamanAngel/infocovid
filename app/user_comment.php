<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_comment extends Model
{
    protected $table = 'user_comments';

    protected $fillable = [
        'comentario', 'us_com', 'us_sex', 'calif', 'user_id'
    ];

    public function userSpace(){
        return $this->belongsTo(user_space::class);
    }

}
