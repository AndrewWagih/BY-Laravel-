<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'address_subject',
        'street',
        'buliding_number',
        'floor',
        'apartment_number'
      ];

}
