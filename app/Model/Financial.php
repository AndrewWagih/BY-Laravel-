<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Financial extends Model
{
    protected $fillable = [
        'commission_collect', //Boolean
        'commission'
      ];
}
