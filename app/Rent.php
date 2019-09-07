<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{

    protected $table = 'rents';

    protected $fillable = [
        'user_id', 'car_model_id', 'rent_date', 'return_date', 'total_days',
        'ammount', 'payment_status', 'return_status', 'returned_date', 'description'
    ];

    public function carmodels()
    {
        return $this->belongsTo('App\CarModel', 'car_model_id');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
