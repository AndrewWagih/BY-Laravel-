<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DeliveryMan extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'phone_number',
        'image_national_id',
        'image',
        'birthdate',
        'gender',
        'confirm', //Bollean
        'password'
      ];
}
