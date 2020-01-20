<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ItemShop extends Model
{
    protected $fillable = [
        'retail_price',
        'item_avilablity' //Boolean
      ];
}
