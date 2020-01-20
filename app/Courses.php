<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $table ='courses';

    protected $fillable = [
        'name',
        'date_to',
        'date_from',
        'user_id'

    ];
}
