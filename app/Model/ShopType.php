<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ShopType extends Model
{
    protected $fillable = [
        'shop_type_name',
        'image'
      ];
}
