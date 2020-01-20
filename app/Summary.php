<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Summary extends Model
{
    protected $table ='summaryy';

    protected $fillable = [
        'description',
        'user_id'

    ];
}
