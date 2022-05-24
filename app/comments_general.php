<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comments_general extends Model
{
    protected $table = 'comments_general';

    protected $fillable = [
        'comentario', 'user_com', 'user_sex'
    ];

}
