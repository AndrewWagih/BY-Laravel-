<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class VendorForm extends Model
{
    protected $fillable = [
        'buisness_name',
        'owner_name',
        'phone_number',
        'buisness_type',
        'address_with_details',
        'best_time_to_call'
      ];
}
