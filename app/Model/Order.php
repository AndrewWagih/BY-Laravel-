<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'sub_total',
        'total',
        'note_for_delivery'
      ];
}
