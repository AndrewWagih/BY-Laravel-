<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OrderState extends Model
{
    protected $fillable = [
        'preparing_order', //Boolean
        'deilvery_received_order', //Boolean
        'order_done' //Boolean
      ];
}
