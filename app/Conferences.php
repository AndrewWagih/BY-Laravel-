<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conferences extends Model
{
    protected $table ='conferences';

    protected $fillable = [
        'name',
        'date',
        'user_id'

    ];
}
