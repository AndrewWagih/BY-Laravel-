<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalInfo extends Model
{
    protected $table ='personal_info';

    protected $fillable = [
        'first_name',
        'last_name',
        'profession',
        'address',
        'phone',
        'email',
        'date_birth',
        'user_id'

    ];
}
