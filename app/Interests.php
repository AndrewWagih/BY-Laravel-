<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interests extends Model
{
    protected $table ='interests';

    protected $fillable = [
        'interests',
        'user_id'

    ];
}
