<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    //protected $primaryKey = 'car_model_id';

    protected $fillable = [
        'car_make_id', 'model', 'number_plate', 'price', 'photo', 'descriptions'
    ];


    public function carmake()
    {
        return $this->belongsTo('App\CarMake','car_make_id');
    }

    public function rents()
    {
        return $this->hasMany('App\Rent', 'car_model_id');
    }
}
