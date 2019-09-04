<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{

    protected $table = 'rents';

    protected $fillable = [
        'user_id', 'car_model_id', 'rent_date', 'return_date', 
        'ammount', 'payment_status', 'return_status', 'returned_date', 'description'
    ];

    public function carmodels()
    {
        return $this->belomgsTo('App\CarModel');
    }
}
