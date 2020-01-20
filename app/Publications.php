<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publications extends Model
{
    protected $table ='publications';

    protected $fillable = [
        'title',
        'date',
        'user_id'

    ];
}
