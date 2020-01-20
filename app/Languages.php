<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Languages extends Model
{
    
    protected $table ='languages';

    protected $fillable = [
        'language',
        'mastery',
        'user_id'

    ];
}
