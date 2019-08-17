<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RentDetail extends Model
{
    protected $fillable = [
        'user_id', 'car_make_id', 'rent_date', 'return_date', 
        'ammount', 'payment_status', 'return_status', 'returned_date', 'description'
    ];
}
