<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ShopDeilvery extends Model
{
    protected $fillable = [
        'delivery_time',
        'delivery_cost'
      ];
}
