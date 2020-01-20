<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'item_name',
        'unit',
        'image',
        'retail_price',
        'wholesale_price'
      ];
}
