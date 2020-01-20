<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificates extends Model
{
    protected $table ='certif';

    protected $fillable = [
        'title',
        'date',
        'user_id'

    ];
}
