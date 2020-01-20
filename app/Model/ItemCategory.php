<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ItemCategory extends Model
{
    protected $fillable = [
        'item_category_name',
        'image'
      ];
}
