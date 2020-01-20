<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $table ='education';

    protected $fillable = [
        'school_name',
        'description',
        'date_from',
        'date_to',
        'user_id'


    ];
    
}
