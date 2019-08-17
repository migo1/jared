<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    protected $fillable = [
        'car_makes_id', 'model', 'number_plate', 'photo', 'descriptions'
    ];


    public function carmake()
    {
        return $this->belongsTo('App\CarMake');
    }
}
