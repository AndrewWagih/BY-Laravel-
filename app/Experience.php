<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $table ='experience';

    protected $fillable = [
        'position',
        'company',
        'date_from',
        'date_to',
        'description',
        'user_id'

    ];
}
